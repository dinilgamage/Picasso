@extends('layouts.admindash') 

@section('content')
<div class="container">
    <h1>Edit User</h1>

    <form action="{{ route('users.update', $user->id) }}" method="post">
        @csrf
        @method('PUT')
        
        <!-- Name input -->
        <div class="mb-3">
            <label for="name" class="form-label">Name</label>
            <input type="text" class="form-control" id="name" name="name" value="{{ $user->name }}" required>
        </div>

        <!-- Email input -->
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" required>
        </div>

        <!-- Password input -->
        <div class="mb-3">
            <label for="password" class="form-label">Password (leave blank to keep unchanged)</label>
            <input type="password" class="form-control" id="password" name="password">
        </div>

        <!-- Confirm Password input -->
        <div class="mb-3">
            <label for="password_confirmation" class="form-label">Confirm Password</label>
            <input type="password" class="form-control" id="password_confirmation" name="password_confirmation">
        </div>

        <!-- Phone input -->
        <div class="mb-3">
            <label for="phone" class="form-label">Phone</label>
            <input type="text" class="form-control" id="phone" name="phone" value="{{ $user->phone }}" required>
        </div>

        <!-- Address input -->
        <div class="mb-3">
            <label for="address" class="form-label">Address</label>
            <textarea class="form-control" id="address" name="address" rows="3" required>{{ $user->address }}</textarea>
        </div>

        <!-- Role input -->
        <div class="mb-3">
            <label for="role" class="form-label">Role</label>
            <select class="form-control" id="role" name="role">
                <option value="1" {{ $user->role == 1 ? 'selected' : '' }}>Admin</option>
                <option value="0" {{ $user->role == 2 ? 'selected' : '' }}>User</option>
               
            </select>
        </div>

        <button type="submit" class="btn btn-primary">Update User</button>
    </form>
</div>
@endsection
