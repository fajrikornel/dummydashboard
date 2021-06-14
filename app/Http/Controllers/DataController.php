<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Data;

class DataController extends Controller
{
    public function data() {

        Data::create([
            'X' => random_int(50,100),
            'Y' => random_int(65,85),
        ]);
        
        $jsonData = (object) array(
            'name' => 'dummy data',
            'data' => Data::latest()->select('X','Y')->take(10)->get());        

        return json_encode($jsonData);
    }
}
