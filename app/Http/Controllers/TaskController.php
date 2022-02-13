<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    public function index()
    {
        $news = DB::table('new')->get();
        $problems = DB::table('problem')->get();
        $progresses = DB::table('progress')->get();
        $testings = DB::table('testing')->get();
        $completes = DB::table('complete')->get();
        return view('task', [
            "title" => "Detail of Tasks",
            "news" => $news,
            "problems" => $problems,
            "testings" => $testings,
            "progresses" => $progresses,
            "completes" => $completes
        ]);
    }
}
