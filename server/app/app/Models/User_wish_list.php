<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_wish_list extends Model
{
    use HasFactory;

    protected $fillable = [
        
        'travel_time', 'notification_status',
    ];

    protected $casts = [

        'notification_status'=>'boolean',
    ];

    public function wish_list_user()
    {
      return $this->belongsTo(User::class);
    }

    public function wish_list_rest_place()
    {
      return $this->belongsTo(Rest_place::class);
    }
}
