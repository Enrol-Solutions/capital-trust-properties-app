<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;
use App\Models\Admin;
use App\Models\Property;
use Exception;
use Illuminate\Support\Facades\Storage;
use App\Http\Resources\BannerResource;
use App\Models\User;
use App\Models\Image;
use App\Models\News;
use App\Models\Owner;
use App\Models\WantedProperty;
use Illuminate\Validation\Rule;

class AdminController extends Controller
{
  public function adminDashboard()
  {
    $property=Property::where('status','active')->count();
    $wanted = WantedProperty::where('status','active')->count();
    $admins = Admin::count(); 
    return view('admin.dashboard',['property'=>$property,'wanted'=>$wanted,'admins'=>$admins]);
  }

  public function adminHomebanner()
  {
    $banners= Banner::get()->pluck('image_id')->toArray();
    $banner= Image::whereIn('id',$banners)->paginate(4);
    $image = Image::whereNotIn('id',$banners)->paginate(4);
    Banner::paginate(3); 
    return view('admin.homebanner',['image'=>$image,'banner'=>$banner]);
  }

  public function upload(Request $request)
  {
   try{ 
    $validatedData= $request->validate(['images.*' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
     ]);
    
    foreach ($validatedData['images'] as $image) {
      $path = $image->store('', 'public');
      Banner::create(['image'=>$path]);
    }
     return redirect()->back()->with('success', 'Your data has been saved successfully!');
  }
  catch(Exception $e)
  {
    return redirect()->back()->with('error', 'Something went wrong!');

  }  
  }

  public function fetch()
  {
    return BannerResource::collection(Banner::paginate(5));
  }
  public function remove(string $img)
  {
    if (Storage::disk('public')->exists($img)) {
      // Delete the file if it exists
      Storage::disk('public')->delete($img);
      Banner::where('image',$img)->delete();
  }
    return true;
  }
  public function adminPendingProperties()
  {
    $properties =  Property::where('status','to_active')->with('mainImage') // Fetch one image per property
    ->paginate(1,['*'],'properties'); 
    $user= new User();
    $owner = new Owner();
    return view('admin.properties',['properties'=>$properties,'user'=>$user,'owner'=>$owner]);
  }
  public function adminApprovedProperties()
  {
    $properties =  Property::where('status','active')->with('mainImage') 
    ->paginate(1,['*'],'properties'); 
    $user= new User();
    $owner = new Owner();
    return view('admin.properties',['properties'=>$properties,'user'=>$user,'owner'=>$owner]);  }
  public function updateProperty(int $id,Request $request)
  {
   try
   {
    $validatedData = $request->validate([
      'location' => 'required|string|max:255',
      'property_type' => ['required',Rule::in(['Apartment','House','Residential Land','Hotels and Villa','Commercial Land','Commercial Building','Warehouse','Factory','Estate','Other'])],
      'deal_type' => ['required', Rule::in(['forBuy', 'forRent'])],
      'square_feet' => 'required|string|max:255',
      'asking_price' => 'required|numeric',
      'bed_rooms' => 'required|integer|max:255',
      'bath_rooms' => 'required|integer|max:255',
      'furnished' => 'required|boolean',
      'parking' => 'numeric|nullable'
  ]);
    Property::find($id)->update($validatedData);
    return redirect()->back()->with('success', 'Your data has been saved successfully!');
   }
   catch(Exception $e)
   {
    return redirect()->back()->with('error', 'Something went wrong!');
   }
  } 

public function addToBanner(int $id)
{
  Banner::create(['image_id'=>$id]);
  return redirect()->back();
}

public function newNews()
{
 return view('admin.newNews'); 
}
public function removeFromBanner(int $id)
{
  Banner::where('image_id',$id)->delete();
  return redirect()->back();
}
public function updatePropertyStatus(int $id)
{
 try
 {
  Property::find($id)->update(['status'=>'not_active']);
  return redirect()->back()->with('success', 'Your data has been saved successfully!');
 }
 catch(Exception $e)
 {
  return redirect()->back()->with('error', 'Something went wrong!');
 }
} 

public function approveProperty(int $id)
{
 try
 {
  Property::find($id)->update(['status'=>'active']);
  return redirect()->back()->with('success', 'Your data has been saved successfully!');
 }
 catch(Exception $e)
 {
  return redirect()->back()->with('error', 'Something went wrong!');
 }
} 
public function adminWanted()
{
  $properties =  WantedProperty::with('user')->paginate(6); 
  return view('admin.wanted',['wantedProperties'=>$properties]);
}
public function adminWantedDelete(int $id)
{try
  {
   WantedProperty::find($id)->delete(); 
   return redirect()->back()->with('success', 'Your data has been saved successfully!');
  }
  catch(Exception $e)
  {
   return redirect()->back()->with('error', 'Something went wrong!');
  }
 }
 public function adminWantedComplete(int $id)
 {try
   {
    WantedProperty::find($id)->update(['status'=>'not_active']); 
    return redirect()->back()->with('success', 'Your data has been saved successfully!');
   }
   catch(Exception $e)
   {
    return redirect()->back()->with('error', 'Something went wrong!');
   }
  }

public function deleteProperty(int $id)
{
 try
 {
  $property=Property::find($id); 
  
  $imgs=$property->images();
  foreach($imgs->get() as $image)
  {
    Banner::where('image_id',$image->id)->delete();
    Storage::disk('public')->delete($image->image);
  }
  $imgs->delete();
  $property->delete();
  return redirect()->back()->with('success', 'Your data has been saved successfully!');
 }
 catch(Exception $e)
 {
  return redirect()->back()->with('error', 'Something went wrong!');
 }
} 

public function addNewNews(Request $request)
{
 try
  { $validated= $request->validate([     
    'title'=>'required|string',
    'description'=>'nullable|string',
    'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
    'author'=>'required|string',
    'link'=>'string|nullable'

  ]);
  $path = $validated['image']->store('', 'public');
  $validated['image']=$path;
  News::create($validated);
  return redirect()->back()->with('success', 'Your data has been saved successfully!');
}
catch(Exception $e)
{
 
 return redirect()->back()->with('error', 'Something went wrong!');
}   
}

public function adminNews()
{
  $newses= News::paginate(6); 
  return view('admin.adminNews',['newses'=>$newses]);
}

public function deleteNews(int $imgid)
{
 try
  { 
   $image=  News::where('id',$imgid);

  Storage::disk('public')->delete($image->first()->image);
  $image->delete();
  return redirect()->back()->with('success', 'Your data has been deleted successfully!');
}
catch(Exception $e)
{
 return redirect()->back()->with('error', 'Something went wrong!');
}   
}

}