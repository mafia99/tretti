<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Currency\CurrencyHelper;

class CurrencyController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($currencyCode)
    {
        CurrencyHelper::setCurrency($currencyCode);
        return redirect()->back();
    }
}
