<?php

namespace App\Http\Controllers;

//use App\Posts;
use Illuminate\Http\Request;

use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;

class PostsController extends Controller
{



  function verEntradas(){

    $client = new Client();

      $resultado = $client->get('https://jsonplaceholder.typicode.com/posts');
      //$resultado = $client->get('http://services.groupkt.com/country/get/all');
      $contenido = $resultado->getBody();


      //print_r(json_decode($contenido));

      return view('listado',['lista'=> json_decode($contenido)]);

  }

    function ingresarEntradas(Request $request){
      $title = $request->input('title');
      $content = $request->input('content');


      $client = new Client();
  
      $resultado = $client->post('https://jsonplaceholder.typicode.com/posts',
        [
          'form_params' => [
            'title'=>$title,
            'body'=>$content,
          ]
        ]
      
      );

      if($resultado->getStatusCode()=="201")
        return redirect()->route('listado');  
    }

    function borrarEntrada($id){
      $client = new Client();
      $resultado = $client->delete('https://jsonplaceholder.typicode.com/posts/'.$id);
      return redirect()->route('listado');
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function show(Posts $posts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function edit(Posts $posts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Posts $posts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Posts  $posts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Posts $posts)
    {
        //
    }
}