@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-9">
              <h1>Order History</h1>
          </div>
          {{-- <div class="col-md-3">
            <form action="{{ route('orders.history') }}" method="GET">
               <select name="status" onchange="this.form.submit()" class="rounded" style="background-color: #933800; color: #FFBB07; font-weight:bold; height: 30px; width: 300px">
                   
                   <option value="all" {{ request('status') == 'all' ? 'selected' : '' }}>All orders</option>
                   <option value="accepted" {{ request('status') == 'accepted' ? 'selected' : '' }}>Accepted</option>
                   <option value="pending" {{ request('status') == 'pending' ? 'selected' : '' }}>Pending</option>
                   <option value="cancelled" {{ request('status') == 'cancelled' ? 'selected' : '' }}>Cancelled</option>
               </select>
            </form>
        </div> --}}
      </div>

      <div class="row">
          <div class="col-md-12">
              <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Artwork</th>
                        <th>Title</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Placed On</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($orderItems as $order)
                        @foreach($order->items as $item)
                            <tr>
                            <td><img src="{{ asset('images/' . $item->artwork->image) }}" alt="{{ $item->artwork->title }}" style="width: 100px"></td>
                               <td>{{ $item->artwork->title }}</td>
                               <td>{{ $item->price }}</td>
                               <td>{{ $order->status }}</td>
                               <td>{{ $order->created_at }}</td>
                               <td><a href="{{ route('arts.show', $item->artwork) }}" class="btn btn-primary">View Artwork</a></td>
                            </tr>
                        @endforeach
                    @endforeach
                </tbody>
              </table>
          </div>
      </div>
  </div>
@endsection