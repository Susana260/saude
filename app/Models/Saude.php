<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saude extends Model
{
    use HasFactory;
    public function imc() {
        valores = [];
        valores["nome"] = $_GET["nome"];
        $datanascimento = $_GET["datanascimento"];
    }
    
}