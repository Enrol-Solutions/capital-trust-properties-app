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
      return redirect()->back()->with('error', 'Something went wrong!');
    }
  }

  public function addNewProperty()
  {
    return view('addNewProperty');
  }

  public function newProperty(Request $request)
  {
    try {

      DB::BeginTransaction();
      $validatedData = $request->validate([
        'location' => 'required|string|max:255',
        'property_type' => ['required', Rule::in(['Apartment', 'House', 'Residential Land', 'Hotel and Villa', 'Commercial Land', 'Commercial Building', 'Warehouse', 'Factory', 'Estate', 'Other'])],
        'description' => 'nullable|string',
        'deal_type' => ['required', Rule::in(['forBuy', 'forRent'])],
        'posted_by' => 'required|string|max:255',
        'square_feet' => 'nullable|string|max:255',
        'asking_price' => 'required|numeric',
        'bed_rooms' => 'nullable|integer|max:255',
        'bath_rooms' => 'nullable|integer|max:255',
        'images' => 'required|array|max:10',
        'images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        'furnished' => 'nulable|boolean',
        'parking' => 'numeric|nullable',
        'district' => 'required|string',
        'province' => 'required|numeric',
        'furnished' => 'nullable|boolean',
        'rentCommision' => 'nullable|String',
        'saleCommision' => 'nullable|String',
        'land_extent' => 'nullable|integer|max:255',
       
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
      if(isset($validatedData['rentCommision']) || isset($validatedData['saleCommision']))
      {
      if($validatedData['deal_type']=='forRent')
      {
        $rentCommision = $validatedData["rentCommision"]=="on" ? "one month fee":"no";
        $validatedData['commision']=$rentCommision;
      }
     else
      {
        $saleCommision = $validatedData["saleCommision"]=="on" ? "3%":"no";
        $validatedData['commision']=$saleCommision;
      }
      unset($validatedData["saleCommision"]);
      unset($validatedData["rentCommision"]);
    }
      if($request->posted_by === 'broker')
      {
     $validatedOwner['owner']=$validatedData['owner'];
     $validatedOwner['ownerMail']=$validatedData['ownerMail'];
     $validatedOwner['ownerContact']=$validatedData['ownerContact'];

      unset($validatedData['owner']);
      unset($validatedData['ownerMail']);
      unset($validatedData['ownerContact']);
      }
      $provinces = ['Southern', 'Western', 'Central', 'Sabaragamuwa', 'Eastern', 'Uva', 'North western', 'North Central', 'North'];
      $validatedData['province'] = $provinces[$validatedData['province']];
      $property_id = Property::create(array_merge($validatedData, ['users_id' => auth()->user()->id]))->id;
      foreach ($validatedData['images'] as $image) {
        $path = $image->store('', 'public');
        Image::create(['property_id' => $property_id, 'image' => $path]);
      }
      if($request->posted_by === 'broker')
      {
        $owner = ['name' => $validatedOwner['owner'], 'mail' => $validatedOwner['ownerMail'], 'contact' => $validatedOwner['ownerContact']];
        Owner::create(array_merge($owner,['properties_id'=>$property_id]));
      }
      DB::commit();
      return redirect()->back()->with('success', 'Your data has been saved successfully!');
    } catch (Exception $e) {
      DB::rollBack();
      return redirect()->back()->with('error', 'Something went wrong!');
    }
  }
  public function editProfile(Request $request)
  {
    try {
      $request->validate([
        // 'username' => 'required|unique:users,username',
        'name' => 'required|string',
        'contact' => 'required|string',
        // 'phone_number',
        // 'user_type' => ['required', Rule::in(['Owner', 'Broker']),],
        // 'profile_image',
        'password' => 'required|confirmed',
        // 'confirm_password' => 'required|same:password',
      ]);

      // if (User::where('username', $request->username)->exists()) {
      //     return response()->json([
      //         'message' => 'Username already exists.'
      //     ], 400);
      // }


      User::find(auth()->user()->id)->update([
        'name' => $request->name,
        'contact' => $request->contact,
        // 'phone_number' => $request->phone_number,
        // 'user_type' => $request->user_type,
        // 'profile_image' => $profileImage,
        'password' => Hash::make($request->password)
      ]);
      return redirect()->back()->with('success', 'Your data has been saved successfully!');
    } catch (Exception $e) {

      return redirect()->back()->with('error', 'Something went wrong!');
    }
  }


  public function editProfilefrm()
  {
    return view('editProfile');
  }
}
