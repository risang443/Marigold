<!DOCTYPE html>
<html lang="en">
<head>
    @include('landing.head')
    <title>Login</title>
</head>
<body class="bg-grey min-h-screen flex items-center justify-center font-poppins">
    <div class="absolute left-0 top-0 p-5">
        <a href="/" class="flex items-center space-x-2">
            <i class="fi fi-rr-angle-left p-4 bg-purple rounded text-white font-bold"></i>
        </a>
    </div>
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-darkpurple mb-4">Login</h2>
                @if (session('error'))
            <div class="alert alert-danger mb-4 text-red-600 bg-red-100 p-3 rounded">
                {{ session('error') }}
            </div>
                @endif

        @if (session('success'))
            <div class="mb-4">
                <p class="text-green-600">{{ session('success') }}</p>
            </div>
        @endif
        @if ($errors->any())
            <div class="mb-4">
                <ul class="text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="/login" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple focus:border-purple" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple focus:border-purple" required>
            </div>
            <button type="submit"
                class="w-full bg-purple text-white py-2 px-4 rounded-md hover:bg-darkpurple focus:ring-4 focus:ring-purple transition">
                Login
            </button>
        </form>
        <p class="text-sm text-center text-gray-600 mt-4">
            Don't have an account? <a href="{{ route('register') }}" class="text-purple hover:underline">Register here</a>.
        </p>
    </div>
</body>
</html>
