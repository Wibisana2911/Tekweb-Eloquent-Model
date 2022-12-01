<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Store;
class HomeController extends Controller
{
    function index(){
        
        return view('frontpage.landingpage', ['title' => "Landing Page"]);
    }

    function order(){
        return view('frontpage.order', ['title' => "Order page"]);
    }

    function product(){
        return view('frontpage.product', ['title' => "product page"]);
    }

    public function Store(){
        $Store= Store::all();
        return view('Sas.store', compact('Store'));
    }
}