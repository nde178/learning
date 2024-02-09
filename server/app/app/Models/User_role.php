<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_role extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'role',
        'description',
    ];

    public function user_role()
    {
        return $this->belongsTo(User::class);
    }
}
