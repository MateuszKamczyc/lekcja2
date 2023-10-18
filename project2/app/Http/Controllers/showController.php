<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class showController extends Controller
{
    public function show(){
        return 'Kontroler ShowController';
    }


    public function showData(){
        $data =[
            'name' => 'Mateusz',
            'surname' => 'Kamczyc',
            'city' => 'Poznań'
        ];
        return view('data',$data);
    }

}

