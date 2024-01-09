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
        $cartItemsCollection = collect($this->cartItems);

        return view('livewire.cart-component', [
            'cartItems' => $this->cartItems,
            'total' => $cartItemsCollection->sum(function($cartItem) {
                return $cartItem->artwork->price * $cartItem->quantity;
            })
        ]);
    }
   

    public function clearCart()
    {
        Cart::where('user_id', auth()->id())->delete();
        $this->cartItems = [];
        $this->total = 0;
        
        session()->flash('success', 'Your cart has been cleared.');
    }
}