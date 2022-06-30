<?php

namespace App\Http\Controllers\Coins;

use App\Http\Controllers\Controller;
use App\Models\Chain;
use App\Models\Money;
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


    public function getResults(Request $request)
    {
        $data = $request->all();
        $items = $this->getItems($data);

        return view('index', compact('items'));

    }


    public function getItems($data)
    {
        $money = Money::query();
        if (array_key_exists('network', $data)) {
            if ( $data['network'] != 'all') {
                $chain_id = Chain::where('symbol', strtoupper($data['network']))->first();
                $items = $money->where('chain_id', $chain_id)->get()->all();
            } else {
                $items = $money->get()->all();
            }
        } else {
            $items = $money->get()->all();
        }
        return $items;
    }

    public function vote(Request $request, $id) {

        $money = Money::find($id);
        $money->votes = $money->votes+1;
        $money->save();

        //$data = $request->all();
        //$items = $this->getItems($data);

        return redirect()->action([MainController::class, 'getResults'], ['request' => null]);

        //return view('index', compact('items'));
    }

}
