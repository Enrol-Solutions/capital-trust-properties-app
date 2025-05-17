<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Property;
use App\Models\Banner;
use App\Models\Image;
use App\Models\News;
use App\Models\Subscriber;
use Exception;

class GuestController extends Controller
{
  public function index()
  {
    $banners = Banner::latest()->take(3)->get();
    $news = News::latest()->take(3)->get();

    $slider = [];
    foreach ($banners as $banner) {
      $slider[] = Image::find($banner->image_id);
    }
    foreach ($slider as $ar) {
      $property = Property::find($ar->property_id);
      foreach ($property->toArray() as $key => $val) {
        $ar[$key] = $val;
      }
    }
    $properties = Property::where('status', 'active')
      ->with('mainImage') // Fetch one image per property
      ->paginate(3);
    return view('index', ['slider' => $slider, 'properties' => $properties, 'news' => $news]);
  }
  public function company()
  {
    $banners = Banner::latest()->take(3)->get();
    $slider = [];
    foreach ($banners as $banner) {
      $slider[] = Image::find($banner->image_id);
    }
    foreach ($slider as $ar) {
      $property = Property::find($ar->property_id);
      foreach ($property->toArray() as $key => $val) {
        $ar[$key] = $val;
      }
    }
    return view('company', ['slider' => $slider]);
  }
  public function rent(string $item,Request $request)
  {
    $province = $request->query('province');
    $district = $request->query('district');
    $banners = Banner::latest()->take(3)->get();
    $slider = [];
    foreach ($banners as $banner) {
      $slider[] = Image::find($banner->image_id);
    }
    foreach ($slider as $ar) {
      $property = Property::find($ar->property_id);
      foreach ($property->toArray() as $key => $val) {
        $ar[$key] = $val;
      }
    }
    if ($item == 'apartment') {
      $properties = Property::where('deal_type', 'forRent')->where('property_type', 'Apartment')->where('status', 'active')
        ->with('mainImage') // Fetch one image per property
       ;
    } elseif ($item == 'houses') {
      $properties = Property::where('deal_type', 'forRent')->where('property_type', 'House')->where('status', 'active')
        ->with('mainImage') // Fetch one image per property
       ;
    } elseif ($item == 'land') {
      $properties = Property::where('deal_type', 'forRent')->where('property_type', 'Residential Land')->orWhere('property_type','Commercial Land')->where('status', 'active')
        ->with('mainImage') // Fetch one image per property
       ;
    } elseif ($item == 'hotels-and-villas') {
      $properties = Property::where('deal_type', 'forRent')->where('property_type', 'Hotels and Villa')->where('status', 'active')
        ->with('mainImage') // Fetch one image per property
       ;
    } elseif ($item == 'other') {
      $properties = Property::where('deal_type', 'forRent')
      ->where('status', 'active')
      ->where(function ($query) {
          $query
              ->where('property_type', 'Commercial Building')
              ->orWhere('property_type', 'Warehouse')
              ->orWhere('property_type', 'Factory')
              ->orWhere('property_type', 'Estate')
              ->orWhere('property_type', 'Other');
      })
      ->with('mainImage'); 
    } else {
      $properties = [];
      $item = '';
    }
    if (0 != strcasecmp('All', $province) && $province!="" ) {
      $properties =  $this->filter($properties, $province, $district);
    }
    $properties =$properties->paginate(6);
    return view('rent', ['type' => $item, 'properties' => $properties, 'slider' => $slider]);
  }
  public function all(Request $request)
  {
    $province = $request->query('province');
    $district = $request->query('district');
    $banners = Banner::latest()->take(3)->get();
    $slider = [];
    foreach ($banners as $banner) {
      $slider[] = Image::find($banner->image_id);
    }
    foreach ($slider as $ar) {
      $property = Property::find($ar->property_id);
      foreach ($property->toArray() as $key => $val) {
        $ar[$key] = $val;
      }
    }
      $properties = Property::where('status', 'active')
        ->with('mainImage') ;// Fetch one image per property
      $item = 'Available Item';
    if (0 != strcasecmp('All', $province) && $province!="" ) {
      $properties =  $this->filter($properties, $province, $district);
    }
    $properties =$properties->paginate(6);
    return view('allProperties', ['type' => $item, 'properties' => $properties, 'slider' => $slider]);
  }

  public function buy(string $item, Request $request)
  {
    $province = $request->query('province');
    $district = $request->query('district');
    $banners = Banner::latest()->take(3)->get();
    $slider = [];
    foreach ($banners as $banner) {
      $slider[] = Image::find($banner->image_id);
    }
    foreach ($slider as $ar) {
      $property = Property::find($ar->property_id);
      foreach ($property->toArray() as $key => $val) {
        $ar[$key] = $val;
      }
    }
    if ($item == 'apartment') {
      $properties = Property::where('deal_type', 'forBuy')->where('property_type', 'Apartment')->where('status', 'active')
        ->with('mainImage');
    } elseif ($item == 'houses') {
      $properties = Property::where('deal_type', 'forBuy')->where('property_type', 'House')->where('status', 'active')
        ->with('mainImage');
    } elseif ($item == 'land') {
      $properties = Property::where('deal_type', 'forBuy')->where('property_type', 'Residential Land')->orWhere('property_type', 'Commercial Land')->where('status', 'active')
        ->with('mainImage');
    } elseif ($item == 'hotels-and-villas') {
      $properties = Property::where('deal_type', 'forBuy')->where('property_type', 'Hotels and Villa')->where('status', 'active')
        ->with('mainImage');
    } elseif ($item == 'other') {
      $properties = Property::where('deal_type', 'forBuy')
      ->where('status', 'active')
      ->where(function ($query) {
          $query
              ->orWhere('property_type', 'Commercial Building')
              ->orWhere('property_type', 'Warehouse')
              ->orWhere('property_type', 'Factory')
              ->orWhere('property_type', 'Estate')
              ->orWhere('property_type', 'Other');
      })
      ->with('mainImage'); 
    } else {
      $properties = [];
      $item = '';
    }
    if (0 != strcasecmp('All', $province) && $province!="" ) {
      $properties =  $this->filter($properties, $province, $district);
    }
    $properties =$properties->paginate(6);
    return view('buy', ['type' => $item, 'properties' => $properties, 'slider' => $slider]);
  }
  public function news()
  {
    $banners = Banner::latest()->take(3)->get();
    $slider = [];
    foreach ($banners as $banner) {
      $slider[] = Image::find($banner->image_id);
    }
    foreach ($slider as $ar) {
      $property = Property::find($ar->property_id);
      foreach ($property->toArray() as $key => $val) {
        $ar[$key] = $val;
      }
    }
    $news = News::paginate(16);
    return view('news', ['slider' => $slider, 'newss' => $news]);
  }
  public function login()
  {

    return view('login');
  }
  public function register()
  {

    return view('register');
  }
  public function wanted()
  {
    return view('wanted');
  }
  public function propertyDetails(int $id)
  {
    $property = Property::find($id);
    $similar = Property::where('property_type', $property->property_type)->where('id', '!=', $property->id)->where('status', 'active')->latest()->paginate(3, ['*'], 'similar');
    return view('property-details', ['property' => $property, 'images' => $property->images()->paginate(4), 'similar' => $similar]);
  }
  public function newSubscriber(Request $request)
  {
    $validate = $request->validate(['email' => 'required|string']);
    Subscriber::create($validate);
    return true;
  }

  public function newMessage(Request $request)
  {
    try {
      // Mail::to('@.com')->send(new NewMessageMail($request->input()));
    } catch (Exception $e) {
    }
  }

  private function filter($properties, $province, $district)
  {
    $provinces = ['Southern', 'Western', 'Central', 'Sabaragamuwa', 'Eastern', 'Uva', 'North western', 'North Central', 'North'];
    if (0 == strcasecmp('All', $district)) {
      $filtered = $properties->where('province', $provinces[$province]);
    } else {
      $filtered = $properties->where('province', $provinces[$province])->where('district', $district);
    }
    return $filtered;
  }
  public function detailedNews($id)
  {
    $news = News::find($id);
    return view('detailedNews',['news'=>$news]);
  }
}
