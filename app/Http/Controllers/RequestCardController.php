<?php

namespace App\Http\Controllers;

use App\invo;
use App\RequestCard;
use Illuminate\Http\Request;

class RequestCardController extends Controller
{
    public function index()
    {
        $cardPer = invo::all();

        return view('pro.cardUpdate', compact('cardPer'));
    }
}
