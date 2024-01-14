@extends('layouts.app')

@section('content')
  <h1>Order Details</h1>
  <p>Status: {{ $order->status }}</p>
  <form action="{{ route('orders.accept', $order) }}" method="POST">
      @csrf
      @method('PUT')
      <button type="submit">Accept Order</button>
  </form>
  <form action="{{ route('orders.deny', $order) }}" method="POST">
      @csrf
      @method('PUT')
      <button type="submit">Deny Order</button>
  </form>
@endsection