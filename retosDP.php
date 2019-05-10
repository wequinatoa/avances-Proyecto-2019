<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reto;

class retosDP extends Controller
{


    public function retoAleatorio()
    {

        $encontrado = false;


        while(!$encontrado)
        {
            $num = count(reto::all());
            $aleatorio= rand(1,$num);

            $penitencia = reto::where('id',$aleatorio)->get();

            if($penitencia->isEmpty())
            {
                $encontrado = false;
            }
            else
            {
                $encontrado = true;
            }

        }

        return $penitencia;
    }

}
