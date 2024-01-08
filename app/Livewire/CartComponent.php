<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Cart;
use App\Models\Artwork;

class CartComponent extends Component
{
    public $cartItems = [];

    public function mount()
    {
        $this->cartItems = Cart::where('user_id', auth()->id())->get();
    }

    public function removeFromCart($cartItemId)
    {
        Cart::destroy($cartItemId);
        // $this->cartItems = Cart::where('user_id', auth()->id())->get();
        // $this->emit('cartUpdated');
    }

    public function render()
    {
        return view('livewire.cart-component', [
            'cartItems' => $this->cartItems,
            'total' => $this->cartItems->sum(function($cartItem) {
                return $cartItem->artwork->price * $cartItem->quantity;
            })
        ]);
    }
}