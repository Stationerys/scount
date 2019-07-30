<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Position;

class TestController extends Controller
{
    public function index()
    {
        $Position=new Position();
        $beers = $Position->search('职位')->get();
        dd($beers);
    }
}
