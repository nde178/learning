<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest_place_rating extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'score',
    ];

    public function rating_rest_place()
    {
      return $this->belongsTo(Rest_place::class);
    }


}
