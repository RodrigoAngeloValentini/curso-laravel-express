<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TestController extends Controller
{
    public function index($nome){

        return view('test.index', ['nome'=>$nome]);
    }

    public function notas(){

        $notas = [
            0 => 'Anotação 01',
            1 => 'Anotação 02',
            2 => 'Anotação 03',
            3 => 'Anotação 04',
            4 => 'Anotação 05',
        ];
        return view('test/notas', compact('notas'));
    }
}
