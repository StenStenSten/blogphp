@extends('layouts.guest')

@section('content')
    <h2 class="text-center text-2xl font-semibold mb-4 text-white">Register</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf
        
        <!-- Name Input -->
        <div class="mb-4">
            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
            <input type="text" name="name" id="name" 
                class="input-custom bg-white border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none w-full p-3" 
                required value="{{ old('name') }}" />

            @error('name')
                <p class="error-text">{{ $message }}</p>
            @enderror
        </div>

        <!-- Email Input -->
        <div class="mb-4">
            <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
            <input type="email" name="email" id="email" 
                class="input-custom bg-white border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none w-full p-3" 
                required value="{{ old('email') }}" />

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

        <!-- Confirm Password Input -->
        <div class="mb-4">
            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation" id="password_confirmation" 
                class="input-custom bg-white border border-gray-300 text-gray-900 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 focus:outline-none w-full p-3" 
                required />

            @error('password_confirmation')
                <p class="error-text">{{ $message }}</p>
            @enderror
        </div>

        <!-- Submit Button -->
        <div class="mt-4 flex justify-end">
            <button type="submit" class="btn-primary px-5 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-300">
                Register
            </button>
        </div>
    </form>

    <div class="mt-4 text-center">
        <a href="{{ route('login') }}" class="link-custom text-sm text-indigo-600 hover:text-indigo-900">
            Already have an account? Login
        </a>
    </div>
@endsection
