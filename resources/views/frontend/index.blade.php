@extends('layouts.app')

@section('title', 'Home Page')

@section('content')
    <div class="container text-center">
        <h1 class="my-4">Welcome to Our Website</h1>

        <!-- Login and Register Buttons -->
        @if (Route::has('login'))
        <div class="mt-4">
            @auth
                <!-- User is already logged in -->
                @if (Auth::user()->role === 'admin')
                    <a href="{{ route('admin.dashboard') }}" class="btn btn-primary">Admin Dashboard</a>
                @elseif (Auth::user()->role === 'user')
                    <a href="{{ route('user.dashboard') }}" class="btn btn-primary">User Dashboard</a>
                @endif
            @else
                <!-- Show Login and Register buttons for guests -->
                <a href="{{ route('login') }}" class="btn btn-primary">Login</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-secondary ms-2">Register</a>
                @endif
            @endauth
        </div>
    @endif

    </div>
@endsection
