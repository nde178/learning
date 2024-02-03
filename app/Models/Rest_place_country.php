<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest_place_country extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'name', 'description',
    ];

    public function country_rest_place()
    {
      return $this->hasMany(Rest_place::class);
    }

}
