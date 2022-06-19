<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directions;
use App\Models\Tariff;
use App\Models\Reviews;
use Response;
class ReviewController extends Controller
{
    public function index(Request $req)
    {
        $data = $req->all();
        $data["grade"] = 3;
        $reviews = Reviews::create($data);

        return redirect("/");
    }
}
