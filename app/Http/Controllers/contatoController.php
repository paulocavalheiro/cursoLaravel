<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class contatoController extends Controller
{

    public function index(){

        $data['titulo'] = 'pagina de contato';
        $data2['conteudo'] = 'teste pagina laravel';

        return view('contato',$data,$data2);


    }























}
