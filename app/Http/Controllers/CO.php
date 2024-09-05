<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class CO extends Controller
{
    public function __invoke()
    {

        $response = Http::get('http://localhost:9200');


        return $response;

    }
}
