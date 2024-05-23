<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use App\Models\UserInformation;

class Manage_formulaireController extends Controller
{
    public function index(): View|Factory|Application
    {
        return view('manage_formulaire.index');
    }
    public function update(Request $request, $id)
    {
        $fullname = $request->input('Fullname');
        $email = $request->input('Email');
        $phonenumber = $request->input('PhoneNumber');
        $car_brand = $request->input('Car_Brand');
        $car_model = $request->input('Car_Model');
        $car_generation = $request->input('Car_Generation');
        $car_energy = $request->input('Car_Energy');
        $car_range = $request->input('Car_Range');
        // $date = $request->input('date');
        $requestData = [
            'fullname' => $fullname,
            'email' => $email,
            'phonenumber' => $phonenumber,
        ];

        $data = UserInformation::findOrFail($id);
        $data->update($requestData);
        return response()->json(['message' => 'Data updated successfully']);
    }

    public function delete($id)
    {
        $data = UserInformation::findOrFail($id);
        $data->delete();
        return response()->json(['message' => 'Data deleted successfully']);
    }
    public function findData(Request $request, $id){
        $data = UserInformation::find($id);
        return response()->json($data);
    }
    public function list(){
        $data = UserInformation::all();
        return response()->json($data);
    }
}
