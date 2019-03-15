<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class localesDP extends Controller
{

  

    //
  function calificar ($ventas)
    {
      switch($ventas)
      {
        /*case 1: $lista = array("Norte","Sur","Valle");*/
        case 1: $lista = array(
                              array("Norte"=>"$1000","Satisfaccion"=>9),
                              array("Sur"=>"9000","Satisfaccion"=>8),
                              array("Valles"=>"8000","Satisfaccion"=>8),
                              );
        break;
      }
      return view ('lista',['lista'=> $lista]);
    }
}

