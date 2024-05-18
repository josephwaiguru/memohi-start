<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Car_model extends Model
{
    use HasFactory;
    protected $table = 'car_model';
    public $fillable = [
        'id_car_type',
        'id_car_make',
        'name',
        'date_create',
        'date_update'
    ];
    protected $casts = [
        'id' => 'integer',
        'id_car_type' => 'integer',
        'id_car_make' => 'integer',
        'name' => 'string',
        'date_create' => 'integer',
        'date_update' => 'integer'
    ];
    public static $rules = [
        'name' => 'required|unique:categories,name',
        'date_create' => 'required',
        'date_update' => 'required',
        'id_car_type' => 'required',
        'id_car_make' => 'required'

    ];
}
