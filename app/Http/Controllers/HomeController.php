<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function staticJson()
    {

        $json =  '[
        {
        "name": "Michael Bruce",
        "type": "mobile",
        "quantity": 55
        },
        {
        "name": "Jennifer Winters",
        "type": "makanan",
        "quantity": 3
        },
        {
        "name": "Donna Fox",
        "type": "minuman",
        "quantity": 1
        },
        {
        "name": "Howard Hatfield",
        "type": "elektronik",
        "quantity": 2
        }
        ]';

        return $json;

    }

    public function index()
    {
        $cards = json_decode($this->staticJson());
        return view('pages.user.home', compact('cards'));
    }

    public function card()
    {
        $cards = json_decode($this->staticJson());

        return view('pages.user.card', compact('cards'));
    }
    public function vendor()
    {
        $cards = json_decode($this->staticJson());

        return view('pages.user.product', compact('cards'));
    }
}
