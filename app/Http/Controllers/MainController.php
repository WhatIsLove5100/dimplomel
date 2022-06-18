<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directions;
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

    public function ditail(Request $req)
    {
        return Response::json($req->all());
    }
}
