<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class HomeController extends Controller
{
    public function __invoke()
    {
        $recomm_products = Product::inRandomOrder()->limit(15)->get();
        return view("home", compact('recomm_products'));
    }
}
