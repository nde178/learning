<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Rest_place_category extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'description'];

    public function rest_place_categories()
{
    return $this->belongsToMany(Rest_place::class);
}
}


