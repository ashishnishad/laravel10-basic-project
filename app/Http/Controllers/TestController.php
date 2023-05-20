<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AwesomeServiceInterface;

class TestController extends Controller
{
    //
    public function awesome(AwesomeServiceInterface $awesome_service){
        dd($awesome_service);
    }
}
