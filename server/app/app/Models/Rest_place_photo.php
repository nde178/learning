<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest_place_photo extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'name', 'description',
    ];

    public function photo_rest_place()
    {
      return $this->belongsTo(Rest_place::class);
    }
}
