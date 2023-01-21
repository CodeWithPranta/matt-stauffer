<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Conference extends Model
{
    use HasFactory;

    // The attributes that are mass assignable
    protected $fillable = ['slug', 'name', 'description'];

    // Customizing the route key for an eloquent model

    public function getRouteKeyName()
    {
        return 'slug';
    }

}
