<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Carro;

class CarrosController extends Controller
{
    public function index()
    {
    return Carro::all();
    }
}
