<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Saude;

class SaudeController extends Controller
{
    public function index() {
        return view('saude');
    }

    public function imc($valores) {
        $calculoimc = new Saude();
        $resultadoimc = Saude.imc();
        return view('imc', $resultadosimc);
    }
}