<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest_place extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'name', 'description',
        'width', 'longitude',
    ];

    public function rest_place_wish()
    {
      return $this->hasMany(User_wish_list::class);
    }

    public function rest_place_comment()
    {
      return $this->hasMany(Rest_place_comment::class);
    }

    public function rest_place_rating()
    {
      return $this->hasMany(Rest_place_rating::class);
    }

    public function rest_place_photo()
    {
      return $this->hasMany(Rest_place_photo::class);
    }

    public function country_rest_place()
    {
      return $this->belongsTo(Rest_place_country::class);
    }

    public function categories_rest_place()
{
    return $this->belongsToMany(Rest_place_category::class);
}
}
