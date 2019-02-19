<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function addInventory1(){
        return view('pages.addInventory1') ;
    }

    public function addInventory2(){
        return view('pages.addInventory2') ;
    }

    public function viewInventory(){
        return view('pages.viewInventory') ;
    }
}

