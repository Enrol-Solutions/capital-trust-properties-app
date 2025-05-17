<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Property extends Model
{

    use HasFactory;
    protected $guarded = ['images'];

    public function images()
    {
      return $this->hasMany(Image::class);  
    }
    public function mainImage()
    {
        return $this->hasOne(Image::class)->latest(); // or any ordering you prefer
    }
    public function dealer()
    {
        return $this->belongsTo(User::class); // or any ordering you prefer
    }
    public function owner()
    {
        return $this->belongsTo(Owner::class); // or any ordering you prefer
    }
}
