<?php

namespace App\Http\Controllers\Coins;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SubmitCoinController extends Controller
{
    //
    public function create()
    {
        return view('submit-coin');
    }

    public function update()
    {
        return view('update-coin');
    }


}
