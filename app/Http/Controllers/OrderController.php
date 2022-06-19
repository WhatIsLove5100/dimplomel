<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Directions;
use App\Models\Tariff;
use App\Models\Orders;
use Response;

class OrderController extends Controller
{
    public function index(Request $req)
    {
        $order = Orders::create($req->all());

        return redirect("/");
    }
}
