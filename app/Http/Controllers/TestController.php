<?php
/**
 * Created by PhpStorm.
 * User: paulo
 * Date: 19/10/2015
 * Time: 14:54
 */

namespace App\Http\Controllers;
use App\Http\Controllers\Controller;


class TestController extends Controller
{

    public function index($nome = null){
        return view('test.index', ['nome'=>$nome]);
    }

    public function notas(){

        $notas = [
           0 => 'Anotação 1', 1 =>'Anotação 2', 2 =>'Anotação 3', 3 =>'Anotação 4'
        ];

        return view('test.notas', ['notas'=>$notas]);
    }
}