<?php

namespace App\Http\Controllers\Coins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MainController extends Controller
{
    //
    public function contact()
    {
        return view('contact');
    }

    public function termsAndConditions()
    {
        return view('terms');
    }

}
