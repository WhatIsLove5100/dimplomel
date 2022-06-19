<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directions;
use App\Models\Tariff;
use App\Models\Reviews;
use Response;
class MainController extends Controller
{
    public function index()
    {
        $directions = Directions::skip(0)
                ->take(8)
                ->get();

        $reviews = Reviews::skip(0)
                ->take(3)
                ->get();

        return view('index', [
            'directions' => $directions,
            'reviews'    => $reviews
        ]);
    }

    public function detail(Request $req)
    {
        $dir = Directions::where("from",$req->from)->where("to", $req->to)->first();

        if(!$dir)
            return abort(404);
        
        $resTariffs = Tariff::get();

        $tariffs = [];

        foreach ($resTariffs as $key => $tariff)
        {
            $tempo = [];
            $tempo["price"] = $dir->price * $tariff->markup;
            $tempo["name"] = $tariff->name;
            $tempo["cars"] = $tariff->cars;
            $tempo["img"] = $tariff->img;
            $tariffs[] = $tempo;
        }

        $reviews = Reviews::skip(0)
                ->take(3)
                ->get();

        return view('order',[
            'tariffs' =>$tariffs,
            'reviews'    => $reviews
        ]);
    }
}
