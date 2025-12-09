@extends('auth')

@section('content')
    <div class="flex justify-center items-center min-h-screen bg-gray-100">

        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-md">

            <h2 class="text-2xl font-bold text-center mb-6">Login</h2>

            @if ($errors->any())
                <div class="mb-4 p-3 bg-red-200 text-red-800 rounded">
                    <ul class="list-disc pl-4">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form method="POST" action="{{ route('login.perform') }}">
                @csrf

                <div class="mb-4">
                    <label class="block mb-1 font-semibold">Email</label>
                    <input type="email" name="email" class="w-full p-2 border rounded" required>
                </div>

                <div class="mb-4">
                    <label class="block mb-1 font-semibold">Password</label>
                    <input type="password" name="password" class="w-full p-2 border rounded" required>
                </div>

                <button class="w-full bg-blue-600 text-white py-2 rounded hover:bg-blue-700 transition">
                    Accedi
                </button>
            </form>

        </div>

    </div>
@endsection
