<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directions;
use App\Models\Reviews;
use Response;
class AboutController extends Controller
{
    public function index()
    {
        $reviews = Reviews::skip(0)
        ->take(3)
        ->get();

        return view('feedback', [
            'reviews'    => $reviews
        ]);
    }
}
