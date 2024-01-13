@extends('layouts.app')

@section('content')
 <div class="container">
   <div class="row">
     <div class="col-md-8 offset-md-2">
       <div class="card">
         <div style="background-color: #933800" class="card-header text-white">
           <h1>Checkout</h1>
         </div>
         <div class="card-body">
           <ul class="list-group list-group-flush">
               @foreach ($cartItems as $item)
                  <li class="list-group-item">{{ $item->artwork->title }} - {{ $item->artwork->price }}</li>
               @endforeach
           </ul>
           <p class="mt-3">Total Amount: {{ $totalAmount }}</p>
           <form action="{{ route('checkout.store') }}" method="post" class="mt-3">
               @csrf
               <div class="mb-3">
                <label for="deliveryAddress" class="form-label">Delivery Address</label>
                <input type="text" class="form-control" id="deliveryAddress" name="delivery_address" placeholder="Delivery Address">
               </div>
               <div class="mb-3">
                <label for="paymentMethod" class="form-label">Payment Method</label>
                <select class="form-select" id="paymentMethod" name="payment_method">
                    <option value="credit card">Credit Card</option>
                    <option value="paypal">PayPal</option>
                    <option value="cash on delivery">Cash on Delivery</option>
                </select>
               </div>
               <button type="submit" class="btn btn-primary">Place Order</button>
           </form>
         </div>
       </div>
     </div>
   </div>
 </div>
@endsection