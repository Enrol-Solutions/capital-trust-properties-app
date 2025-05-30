<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Banner extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function image()
    {
      return $this->belongsTo(Image::class);  
    }
}
