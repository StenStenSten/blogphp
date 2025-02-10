@extends('layouts.guest')

@section('content')
    <h2 class="text-center text-2xl font-semibold mb-4 text-white">Login</h2>

    <form method="POST" action="{{ route('login') }}">
        @csrf
        
        <!-- Email Input -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" 
                class="input-custom bg-white border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none w-full p-3" 
                required autofocus value="{{ old('email') }}" />

            @error('email')
                <p class="error-text">{{ $message }}</p>
            @enderror
        </div>

        <!-- Password Input -->
        <div class="mb-4">
            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
            <input type="password" name="password" id="password" 
                class="input-custom bg-white border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none w-full p-3" 
                required />

            @error('password')
                <p class="error-text">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="mt-4 flex justify-end">
            <button type="submit" class="btn-primary px-5 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-300">
                Login
            </button>
        </div>
    </form>

    <div class="mt-4 text-center">
        <a href="{{ route('register') }}" class="link-custom text-sm text-indigo-600 hover:text-indigo-900">
            Don't have an account? Register
        </a>
    </div>
@endsection
