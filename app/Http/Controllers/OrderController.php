<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\OrderItem;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function history()
    {
        $userId = auth()->id();
        $orderItems = Order::where('user_id', $userId)->with('items')->get();
        $orderItems = Order::orderBy('created_at', 'desc')->get();
        return view('orders.history', compact('orderItems'));
    }
    
    public function index()
    {
    $status = request('status');
    $orderItems = OrderItem::with('order', 'artwork')
        ->whereHas('artwork', function ($query) {
            $query->where('artist_id', Auth::id());
        })
        ->orderBy('created_at', 'desc');;

    if ($status && $status != 'all') {
        $orderItems = $orderItems->whereHas('order', function ($query) use ($status) {
            $query->where('status', $status);
        });
    }

    $orderItems = $orderItems->get();
    
    return view('orders.index', compact('orderItems'));
    }

  public function show(Order $order)
  {
      return view('orders.show', compact('order'));
  }

  public function accept(OrderItem $item)
    {
        if ($item->artwork->sold == 1) {
            return redirect()->back()->with('error', 'This artwork has already been sold.');
        }
        
        $item->artwork->update(['sold' => 1]);
        $item->update(['status' => 'accepted']);
        OrderItem::where('status', 'pending')
            ->where('artwork_id', $item->artwork_id)
            ->update(['status' => 'cancelled']);

        return redirect()->route('orders.index')->with('success', 'Order accepted successfully!');
    }

    public function deny(OrderItem $item)
    {
      if ($item->status == 'cancelled') {
          return redirect()->back()->with('error', 'This order has already been cancelled.');
      }
    
      $item->update(['status' => 'cancelled']);
    
      return redirect()->route('orders.index')->with('success', 'Order cancelled successfully!');
    }

    
}