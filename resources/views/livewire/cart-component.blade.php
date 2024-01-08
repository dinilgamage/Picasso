<div>
    <table class="table table-hover">
        <thead>
            <tr>
                <th>Artwork</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            @foreach($cartItems as $cartItem)
            <tr>
                <td>{{ $cartItem->artwork->title }}</td>
                <td>{{ $cartItem->artwork->price }}</td>
                <td>{{ $cartItem->quantity }}</td>
                <td>{{ $cartItem->artwork->price * $cartItem->quantity }}</td>
                <td>
                    <button wire:click="removeFromCart({{ $cartItem->id }})" class="btn btn-danger">Remove</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div class="d-flex justify-content-end">
        <h4>Total: {{ $total }}</h4>
    </div>
    <div class="d-flex justify-content-end mt-3">
        <div class="me-2">
            <a href="#" class="btn btn-success">Go to Checkout</a>
        </div>
        
        <a href="{{ url()->previous() }}" class="btn btn-danger">Back</a>
    </div>
</div>