<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        $posts = $request->all();
        // dump dieの略 -> メソッドの引数の取った値を展開して止める -> データの確認
        dd($posts);
        return view('create');
    }
}
