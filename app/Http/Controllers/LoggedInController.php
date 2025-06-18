<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\WantedProperty;
use App\Models\Property;
use Illuminate\Support\Facades\Mail;
use App\Mail\NewWantedPropertyMail;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Models\Admin;
use Illuminate\Support\Facades\Hash;
use App\Models\Dealer;
use App\Models\Image;
use App\Models\Owner;
use Exception;
use Illuminate\Auth\Events\Validated;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;

class LoggedInController extends Controller
{
  public function newWanted(Request $request)
  {
    try {
      DB::BeginTransaction();

      $validatedData = $request->validate([
        'location' => 'required|string|max:255',
        'property_type' => ['required', Rule::in(['Apartment', 'House', 'Residential Land', 'Hotel and Villa', 'Commercial Land', 'Commercial Building', 'Warehouse', 'Factory', 'Estate', 'Other'])],
        'requirement' => 'nullable|string',
        'is_buy' => 'boolean|required',
      ]);
      WantedProperty::create(array_merge($validatedData, ['users_id' => auth()->user()->id]));
      // Mail::to('@.com')->send(new NewWantedPropertyMail($request->input()));
      DB::commit();
      return redirect()->back()->with('success', 'Your data has been saved successfully!');
    } catch (Exception $e) {
      DB::rollBack();
      return redirect()->back()->with('error', 'Something went wrong!')->with('delay', 3000);
  }
  
  }

  public function addNewProperty()
  {
    return view('addNewProperty');
  }

  public function newProperty(Request $request)
  {
    Log::info('New property submission started', ['input' => $request->all()]);
    try {
      DB::beginTransaction();
      
      // Log the raw request data for debugging
      Log::debug('Raw request data:', $request->all());
      
      // Manually check required fields
      $requiredFields = [
          'location',
          'property_type',
          'deal_type',
          'posted_by',
          'asking_price',
          'district',
          'province'
      ];
      
      $missingFields = [];
      foreach ($requiredFields as $field) {
          if (!$request->has($field) || $request->input($field) === null) {
              $missingFields[] = $field;
          }
      }
      
      if (!empty($missingFields)) {
          Log::error('Missing required fields:', ['missing' => $missingFields]);
          throw new \Exception('Missing required fields: ' . implode(', ', $missingFields));
      }
      
      $validatedData = $request->validate([
        'location' => 'required|string|max:255',
        'property_type' => ['required', Rule::in(['Apartment', 'House', 'Residential Land', 'Hotel and Villa', 'Commercial Land', 'Commercial Building', 'Warehouse', 'Factory', 'Estate', 'Other'])],
        'description' => 'nullable|string',
        'deal_type' => ['required', Rule::in(['forBuy', 'forRent'])],
        'posted_by' => 'required|string|max:255',
        'square_feet' => 'nullable|numeric|min:0|max:99999999.99',
        'asking_price' => 'required|numeric|min:0|max:9999999999.99',
        'bed_rooms' => [
            'nullable',
            'integer',
            'min:0',
            'max:1000',
            Rule::requiredIf(function () use ($request) {
                return in_array($request->property_type, ['Apartment', 'House', 'Hotel and Villa']);
            })
        ],
        'bath_rooms' => [
            'nullable',
            'integer',
            'min:0',
            'max:1000',
            Rule::requiredIf(function () use ($request) {
                return in_array($request->property_type, ['Apartment', 'House', 'Hotel and Villa']);
            })
        ],
        'images' => 'required|array|max:10',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'furnished' => 'nullable|boolean',
        'parking' => 'nullable|integer|min:0|max:1000',
        'district' => 'required|string|max:255',
        'province' => 'required|integer|min:0|max:10',
        'rentCommision' => 'nullable|string|max:50',
        'saleCommision' => 'nullable|string|max:50',
        'land_extent' => 'nullable|numeric|min:0|max:999999.99',
        'ownerMail' => [
          'nullable',
          Rule::requiredIf(fn() => $request->posted_by === 'broker'),
        ],
        'owner' => [
          'nullable',
          Rule::requiredIf(fn() => $request->posted_by === 'broker'),
        ],
        'ownerContact' => [
          'nullable',
          Rule::requiredIf(fn() => $request->posted_by === 'broker'),
        ],
      ]);

      if(isset($validatedData['rentCommision']) || isset($validatedData['saleCommision'])) {
        if($validatedData['deal_type'] == 'forRent') {
          $rentCommision = $validatedData["rentCommision"] == "on" ? "one month fee" : "no";
          $validatedData['commision'] = $rentCommision;
        } else {
          $saleCommision = $validatedData["saleCommision"] == "on" ? "3%" : "no";
          $validatedData['commision'] = $saleCommision;
        }
        unset($validatedData["saleCommision"]);
        unset($validatedData["rentCommision"]);
      }

      if($request->posted_by === 'broker') {
        $validatedOwner = [
          'owner' => $validatedData['owner'],
          'ownerMail' => $validatedData['ownerMail'],
          'ownerContact' => $validatedData['ownerContact']
        ];
        
        unset($validatedData['owner']);
        unset($validatedData['ownerMail']);
        unset($validatedData['ownerContact']);
      }

      $provinces = ['Southern', 'Western', 'Central', 'Sabaragamuwa', 'Eastern', 'Uva', 'North western', 'North Central', 'North'];
      $validatedData['province'] = $provinces[$validatedData['province']];
      
      // Prepare property data with proper type casting
      $propertyData = array_merge($validatedData, [
          'users_id' => auth()->id(),
          'bed_rooms' => $validatedData['bed_rooms'] ?? null,
          'bath_rooms' => $validatedData['bath_rooms'] ?? null,
          'square_feet' => isset($validatedData['square_feet']) ? (float)$validatedData['square_feet'] : null,
          'asking_price' => (float)$validatedData['asking_price'],
          'parking' => $validatedData['parking'] ?? null,
          'land_extent' => $validatedData['land_extent'] ?? null
      ]);
      
      $property = Property::create($propertyData);
      $property_id = $property->id;
      
      foreach ($validatedData['images'] as $image) {
        $path = $image->store('properties', 'public');
        Image::create([
          'property_id' => $property_id, 
          'image' => $path
        ]);
      }

      if(isset($validatedOwner)) {
        Owner::create([
          'name' => $validatedOwner['owner'], 
          'mail' => $validatedOwner['ownerMail'], 
          'contact' => $validatedOwner['ownerContact'],
          'properties_id' => $property_id
        ]);
      }

      DB::commit();
      return redirect()->back()->with('success', 'Your property has been listed successfully!');
      
    } catch (\Illuminate\Validation\ValidationException $e) {
      DB::rollBack();
      Log::error('Validation error in property submission', ['errors' => $e->errors()]);
      return redirect()->back()
          ->withErrors($e->errors())
          ->withInput()
          ->with('error', 'Validation failed: ' . json_encode($e->errors(), JSON_PRETTY_PRINT));
          
    } catch (\Exception $e) {
      DB::rollBack();
      $errorDetails = [
          'message' => $e->getMessage(),
          'file' => $e->getFile(),
          'line' => $e->getLine(),
          'trace' => $e->getTraceAsString(),
          'request_data' => $request->all()
      ];
      Log::error('Error in property submission', $errorDetails);
      
      // Store error message in session
      $errorMessage = 'Error: ' . $e->getMessage();
      if ($e->getPrevious()) {
          $errorMessage .= ' - ' . $e->getPrevious()->getMessage();
      }
      
      return redirect()->back()
          ->with('error', $errorMessage)
          ->withInput()
          ->with('error_details', $errorDetails);
    }
  }

  public function editProfile(Request $request)
  {
    try {
      $request->validate([
        'name' => 'required|string',
        'contact' => 'required|string',
        'password' => 'required|confirmed',
      ]);

      User::find(auth()->id())->update([
        'name' => $request->name,
        'contact' => $request->contact,
        'password' => Hash::make($request->password)
      ]);
      
      return redirect()->back()->with('success', 'Your profile has been updated successfully!');
      
    } catch (\Exception $e) {
      Log::error('Error updating profile: ' . $e->getMessage());
      return redirect()->back()
          ->with('error', 'Error updating profile: ' . $e->getMessage())
          ->withInput();
    }
  }

  public function editProfilefrm()
  {
    return view('editProfile');
  }
}
