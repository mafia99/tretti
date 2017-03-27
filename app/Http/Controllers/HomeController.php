<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller {

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        //$this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        try {
            $products = Product::all();
            return view('home', ['products' => $products]);
        } catch (Illuminate\Database\QueryException $e) {
            return view('home', ['products' => []]);
        }
    }

}
