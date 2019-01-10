<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Item;

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
        $cate = Category::all();
        return view('home', compact('cate'));
    }

    public function list($cid)
    {
        $items = Item::all()->where('cid', $cid);
        return view('borrow.list', compact('items'));
    }
}
