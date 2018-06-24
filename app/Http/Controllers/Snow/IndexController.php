<?php

namespace App\Http\Controllers\Snow;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {

        return view('snow.index');
    }
}
