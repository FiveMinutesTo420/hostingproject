<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function __invoke()
    {
        return view('orders', ['orders' => auth()->user()->orders->sortByDesc('id')]);
    }
    public function create(Request $request)
    {
        $order = Order::create(['user_id' => auth()->user()->id]);

        foreach (auth()->user()->cart as $cart) {
            if ($cart->order_id == null) {
                $cart->order_id = $order->id;
                $cart->save();
            }
        }
        return back()->with('success', "Заказ успешно оформлен!");
    }
    public function cancel(Request $request, Order $order)
    {
        $order->status = "Отменен";
        $order->save();
        return back()->with('success', "Заказ отменен!");
    }
}
