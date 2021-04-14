<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class Languajes extends Controller
{
    public $i18n = [
        "en-US" => [
            "title" => "Hello buddy",
            "load" => "Loading language",
            "section" => "this is for user {name}  age {age}",
            "smallTxt" => "This could be a pretty long paragraph with an odd content... and so much other things such as numbers {number} and so...etc. ",
            "lngBTN" => [
                "btnES" => "Spanish",
                "btnEN" => "English"
            ],
            "lngErr" => "Can't find {lng} language module.",
            "react" => "Learn React"
        ],
        "es-ES" => [
            "title" => "Hola socio",
            "load" => "Cargando idioma",
            "section" => "esto es para el usuario {name} edad {age}",
            "smallTxt" => "Esto podria ser un parafo bien extenso con contenido raro... y muchas otras cosas como numeros {number} y demas...etc. ",
            "lngBTN" => [
                "btnES" => "Espaniol",
                "btnEN" => "Ingles"
            ],
            "lngErr" => "No se encuentra el modulo del idioma {lng}",
            "react" => "Aprende React"
        ],
    ];

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //

        return response()->json($this->i18n, 200);
    }


    /**
     * Display the specified resource.
     *
     * @param string $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //

        return isset($this->i18n[$id]) ?
            response()->json(["response" => $this->i18n[$id], "error" => null], 200) :
            response()->json(["response" => null, "error" => "Language Not Found"], 404);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
