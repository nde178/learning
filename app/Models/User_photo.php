<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_photo extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'photo'
    ];

    public function brand()
    {
      return $this->belongsTo(User::class);
    }
}
