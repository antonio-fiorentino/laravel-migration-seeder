<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Data;

class ApiController extends Controller
{
    public function getFirstData(){
        $firstData = Data::orderBy('id', 'asc')->first();
        
        return response()->json($firstData);

       
    }
}
