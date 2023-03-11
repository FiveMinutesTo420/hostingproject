<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ItemController extends Controller
{
    public function show(Product $item)
    {
        return view("item", compact('item'));
    }
}
