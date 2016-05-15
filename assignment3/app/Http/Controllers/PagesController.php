<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class PagesController extends Controller
{
    public function frontpage()
    {
        return view('index');
    }

    public function loginReg()
    {
        return view('loginReg');
    }
}
