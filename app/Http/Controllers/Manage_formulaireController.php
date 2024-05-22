<?php

namespace App\Http\Controllers;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class Manage_formulaireController extends Controller
{
    public function index(): View|Factory|Application
    {
        return view('manage_formulaire.index');
    }
}
