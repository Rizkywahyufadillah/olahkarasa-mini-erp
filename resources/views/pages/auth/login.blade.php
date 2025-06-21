@extends('mainNoHeader')

@push('styleGlobal')
    <style>

    </style>
@endpush

@section('content')
    <div class="flex items-center justify-center min-h-screen">
        <div class="w-full max-w-sm">
            <div class="flex justify-center mb-6">
                <img src="{{ asset('assets/images/srapp-logo.png') }}" alt="SRAPP Logo" class="h-12">
            </div>
            <div class="w-full max-w-sm bg-white p-6 rounded-lg shadow-lg border-t-[2px] border-primary">

                <h2 class="text-xl font-semibold text-primary mb-12">Login</h2>

                @if (session('error'))
                    <div class="text-red-500 mb-4 text-center text-sm">
                        {{ session('error') }}
                    </div>
                @endif

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="mb-6">
                        <label for="email" class="block mb-1 text-sm font-medium text-gray-700">Email</label>
                        <input type="email" name="email" id="email"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-primary focus:outline-none"
                            placeholder="example@gmail.com" required value="{{ old('email') }}">
                        @error('email')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="mb-8">
                        <label for="password" class="block mb-1 text-sm font-medium text-gray-700">Password</label>
                        <input type="password" name="password" id="password"
                            class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:ring-2 focus:ring-primary focus:outline-none"
                            placeholder="Your password" required>
                        @error('password')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <button type="submit"
                        class="w-full py-2.5 text-white text-sm font-semibold bg-primary hover:bg-primary-600 rounded-md shadow transition duration-150">
                        Login
                    </button>
                </form>

            </div>
            <div class="mt-6 text-center text-l text-gray-500">
                Copyright © SRAPP 2025
            </div>
        </div>
    </div>
@endsection
