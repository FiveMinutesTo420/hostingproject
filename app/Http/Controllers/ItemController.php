<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Cart;
use Illuminate\Support\Facades\Redirect;

class ItemController extends Controller
{
    public function show(Product $item)
    {
        return view("item", compact('item'));
    }
    public function addToCart(Request $request, Product $item)
    {
        if ($row = Cart::where('item_id', $item->id)->first()) {
            $row->count = $row->count + $request->count;
            $row->save();
            return Redirect::back()->withSuccess("Корзина обновлена!");
        } else {
            Cart::create([
                "user_id" => auth()->user()->id,
                "item_id" => $item->id,
                "count" => $request->count,
            ]);

            return Redirect::back()->withSuccess("Товар добавлен в корзину");
        }
    }
    public function search(Request $request)
    {
        $items = Product::where('name', 'like', '%' . $request->text . '%')->get();
        if ($items) {
            if (count($items) != 0) {
                $url = route("search_p", $request->text);
                $response = array("message" => "good", "products" => $items->take(5), 'amount' => count($items), 'url' => $url);
            } else {
                $response = array("message" => "not_found", 'amount' => '0');
            }
        } else {
            $response = array("message" => "bad");
        }
        return json_encode($response);
    }
    public function search_p(Request $request)
    {
        dd($request->q);
    }
}
