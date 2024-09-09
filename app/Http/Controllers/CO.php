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

    public function analyze()
    {

        $response = Http::post('http://localhost:9200/_analyze', [

            'analyzer' => 'standard',

            'text' => 'hi is a pc ubuntu...!!! THE END'

        ]);


        return $response;

    }
}
