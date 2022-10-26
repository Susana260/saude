<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Saude extends Model
{
    use HasFactory;

    function caulcula_idade($nascimento) {
        $nascimento=explode('/', $nascimento);
        $data=date('d/m/Y'); $data=explode('/',$data);
        $anos=$data[2]-$nascimento[2];
        if($nascimento[1] > $data[1]) return $anos-1;
        if($nascimento[1] == $data[1])
        {
            if($nascimento[0] <= $data[0]) {
                return $anos;
            }
            else {
                return $anos-1;
            }
        }
        return $anos;
    }

    function calcula_imc($peso, $altura) {
        return ($peso / ($altura * $altura));
    }

    function classificacao_imc($imc) {
        if($imc < 18.5) {
            return "Abaixo do peso";
        } elseif ($imc < 25) {
            return "Peso normal";
        } elseif ($imc < 30) {
            return "Acima do peso (sobrepeso)";
        } elseif ($imc < 35) {
            return "Obesidade I";
        } elseif ($imc < 40) {
            return "Obesidade II";
        } else {
            return "Obesidade III";
        }
    }

    public function imc() {
        valores = [];
        valores["nome"] = $_GET["nome"];
        valores["idade"] = this.calcula_idade($_GET["datanascimento"]);
        valores["peso"] = $_GET["peso"];
        valores["altura"] = $_GET["altura"];
        valores["imc"] = this.calcula_imc(valores["peso"],valores["altura"]);
        valores["classificacaoimc"] = this.classificacao_imc(valores["imc"]);
    }
    
}