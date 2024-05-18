<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Connection;
use App\Models\Car_make;
use App\Models\Car_model;
use App\Models\Car_generation;
use App\Models\UserInformation;

class FormulaireController extends Controller
{
    protected $model = Car_make::class;

    public function __construct(Connection $connection)
    {
        $this->connection = $connection;
    }
    public function index(Request $request)
    {
        // Code for the home page
        return view('formulaire.index');
    }
    public function find_vehicle(Request $request)
    {
        // Code for the contact page
        return view('formulaire.find_vehicle');
    }
    public function vehicle_brand(Request $request)
    {
        // Code for the contact page
        return view('formulaire.vehicle_brand');
    }
    public function vehicle_model(Request $request)
    {
        // Code for the contact page
        return view('formulaire.vehicle_model');
    }
    public function vehicle_version(Request $request)
    {
        // Code for the contact page
        return view('formulaire.vehicle_version');
    }
    public function car_energy(Request $request)
    {
        // Code for the contact page
        return view('formulaire.car_energy');
    }
    public function range(Request $request)
    {
        // Code for the contact page
        return view('formulaire.range');
    }
    public function summary(Request $request)
    {
        // Code for the contact page
        return view('formulaire.summary');
    }
    public function formulaire_user(Request $request)
    {
        // Code for the contact page
        return view('formulaire.user_information');
    }
    public function check_info(Request $request)
    {
        return view('formulaire.user_information');
    }
    public function congradulation(Request $request)
    {
        // Code for the contact page
        return view('formulaire.congradulation');
    }
    public function search(Request $request)
    {
        // Retrieve the user's input from the `query` parameter
        $value = $request->input('value');
        // Use the user's input to retrieve similar data from the database
        $carbrandData = Car_make::where('name', 'LIKE', "%" . $value . '%')->get();

        // Return the similar data to the user
        // dd($carbrandData);
        return response()->json($carbrandData);
    }
    public function search_model(Request $request)
    {
        // Retrieve the user's input from the `query` parameter
        $value1 = $request->input('value1');
        $value = $request->input('value');
        // Use the user's input to retrieve similar data from the database
        $carbrandData = Car_model::where('id_car_make', $value1)->where('name', 'LIKE', "%" . $value . '%')->get();

        // Return the similar data to the user
        // dd($carbrandData);
        return response()->json($carbrandData);
    }
    public function search_generation(Request $request)
    {
        // Retrieve the user's input from the `query` parameter
        $value = $request->input('value');
        $value1 = $request->input('value1');
        // Use the user's input to retrieve similar data from the database
        $carbrandData = Car_generation::where('name', 'LIKE', "%" . $value1 . '%')->where('id_car_model', $value)->get();

        // Return the similar data to the user
        // dd($carbrandData);
        return response()->json($carbrandData);
    }
    public function submit_data(Request $request)
    {
        // Retrieve the user's input from the `query` parameter
        $fullname = $request->input('fullname');
        $email = $request->input('email');
        $phonenumber = $request->input('phonenumber');
        $car_brand = $request->input('car_brand');
        $car_model = $request->input('car_model');
        $car_generation = $request->input('car_generation');
        $car_energy = $request->input('car_energy');
        $car_range = $request->input('car_range');
        $date = $request->input('date');
        $data = [
            'fullname' => $fullname,
            'email' => $email,
            'phonenumber' => $phonenumber,
            'car_brand' => $car_brand,
            'car_model' => $car_model,
            'car_generation' => $car_generation,
            'car_energy' => $car_energy,
            'car_range' => $car_range,
            'date_create' => $date
        ];
        // User_infromation::create(['fullname'=>$fullname,'email'=>$email,'phonenumber'=>$phonenumber,'car-brand'=>$car_brand,'car_model'=>$car_model,'car_generation'=>$car_generation,'car_energy'=>$car_energy,'car_range'=>$car_range,'date_create'=>$date]);
        UserInformation::create($data);
        return response()->json(['message' => 'User created'], '200');
    }
}
