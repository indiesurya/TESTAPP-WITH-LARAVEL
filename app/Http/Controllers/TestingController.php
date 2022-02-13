<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestingController extends Controller
{
    public function index()
    {
        return view('problem', [
            "title" => "Detail of Testing",
            "page" => "Testing"
        ]);
    }
}
