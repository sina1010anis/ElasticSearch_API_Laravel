<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CO extends Controller
{
    public function mapping()
    {

        $response = Http::get('http://localhost:9200/products/_mapping');


        return $response;

    }
}
