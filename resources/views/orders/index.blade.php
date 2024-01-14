@extends('layouts.app')

@section('content')
   <div class="container">
       <div class="row">
           <div class="col-md-9">
               <h1>Your Orders</h1>
           </div>
           <div class="col-md-3">
               <form action="{{ route('orders.index') }}" method="GET">
                  <select name="status" onchange="this.form.submit()" class="rounded" style="background-color: #933800; color: #FFBB07; font-weight:bold; height: 30px; width: 300px">
                      
                      <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>All orders</option>
                      <option value="accepted" {{ request('status') == 'accepted' ? 'selected' : '' }}>Accepted</option>
                      <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                      <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
                  </select>
               </form>
           </div>
       </div>
   </div>

   <div class="container">
       @if(session('error'))
           <div class="alert alert-danger">
               {{ session('error') }}
           </div>
       @endif
       <table class="table table-hover">
           <thead>
               <tr>
                  <th>Artwork</th>
                  <th>Price</th>
                  <th>Buyer Name</th>
                  <th>Buyer Email</th>
                  <th>Status</th>
                  <th>Placed on</th>
                  <th>Actions</th>
               </tr>
           </thead>
           <tbody>
               @foreach ($orderItems as $item)
                  <tr>
                      <td>{{ $item->artwork->title }}</td>
                      <td>{{ $item->artwork->price }}</td>
                      <td>{{ $item->order->user ? $item->order->user->name : 'N/A' }}</td>
                      <td>{{ $item->order->user ? $item->order->user->email : 'N/A' }}</td>
                      <td>{{ $item->order->status }}</td>
                      <td>{{ $item->order->created_at }}</td>
                      <td>
                          <div style="display: flex; gap: 10px;">
                              <form action="{{ route('orders.accept', $item->order) }}" method="POST">
                                 @csrf
                                 @method('PUT')
                                 <button type="submit" class="btn btn-success" {{ $item->order->status == 'cancelled' ? 'disabled' : '' }}>Accept</button>
                              </form>
                              <form action="{{ route('orders.deny', $item->order) }}" method="POST">
                                 @csrf
                                 @method('PUT')
                                 <button type="submit" class="btn btn-danger">Deny</button>
                              </form>
                          </div>
                      </td>
                  </tr>
               @endforeach
           </tbody>
       </table>
   </div>
@endsection