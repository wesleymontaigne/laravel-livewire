<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response; 

class ChirpController extends Controller
{
     /**
     * Display a listing of the resource. 
     */
    public function index(): Response
    {
        return response('Hello, World!');
    }
}
