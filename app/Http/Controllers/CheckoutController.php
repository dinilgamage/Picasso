<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;

class CheckoutController extends Controller
{
  public function index()
  {
      $cartItems = Cart::where('user_id', auth()->id())->with('artwork')->get();
      $totalAmount = $cartItems->sum(function ($item) {
        return $item->artwork->price * $item->quantity;
    });
      return view('checkout.index', compact('cartItems', 'totalAmount'));
  }

  public function store(Request $request)
    {
        // dd($request->all()); 

        $request->validate([
            'delivery_address' => 'required',
            'payment_method' => 'required',
        ]);
        $cartItems = Cart::where('user_id', auth()->id())->get();
        $totalAmount = $cartItems->sum(function ($item) {
            return $item->artwork->price * $item->quantity;
        });

        $order = Order::create([
            'user_id' => auth()->id(),
            'total' => $totalAmount,
            'delivery_address' => $request->delivery_address,
            'payment_method' => $request->payment_method,
            'status' => 'pending',
        ]);


        foreach ($cartItems as $item) {
            OrderItem::create([
                'order_id' => $order->id,
                'artwork_id' => $item->artwork_id,
                'price' => $item->artwork->price,
            ]);
        }

        // Clear the cart
        Cart::where('user_id', auth()->id())->delete();

        return redirect()->route('home')->with('success', 'Order placed successfully!');
    }
}