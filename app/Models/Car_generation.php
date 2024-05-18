<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_generation extends Model
{
    use HasFactory;
    
    protected $table = 'car_generation';

    public $fillable = [
        'id_car_model',
        'name',
        'year_begin',
        'year_end',
        'date_create',
        'date_update',
        'id_car_type'
    ];
    protected $casts = [
        'id' => 'integer',
        'id_car_model' => 'integer',
        'id_car_type' => 'integer',
        'name' => 'string',
        'date_create' => 'integer',
        'date_update' => 'integer',
        'year_begin' => 'integer',
        'year_end' => 'integer',
    ];
    public static $rules = [
        'name' => 'required|unique:categories,name',
        'date_create' => 'required',
        'date_update' => 'required',
        'id_car_type' => 'required',
        'id_car_model' => 'required',
        'year_begin' => 'required',
        'year_end' => 'required'

    ];
}
