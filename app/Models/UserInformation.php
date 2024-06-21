<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'fullname',
        'email',
        'phonenumber',
        'car_brand',
        'car_model',
        'car_generation',
        'car_energy',
        'car_range',
        'date_create',
        'date_update'
    ];
}
