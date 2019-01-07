<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InventoryController extends Controller
{
    public function showInventory(){
        $contents= file_get_contents('storage/inventory/inventory.json');
        $output = array();
        $json_array = json_decode($contents,true);

        print_r($json_array);
    }
}
