<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest_place_comment extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'comment',
    ];

    public function comment_rest_place()
    {
      return $this->belongsTo(Rest_place::class);
    }


}
