<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewController extends Controller
{
    public function index()
    {
        return view('new', [
            "title" => "Detail of New",
            "page" => "New"
        ]);
    }
}
