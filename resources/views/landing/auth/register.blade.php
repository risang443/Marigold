<!DOCTYPE html>
<html lang="en">
<head>
    @include('landing.head')
    <title>Register</title>
</head>
<body class="bg-grey min-h-screen flex items-center justify-center font-poppins">
    <div class="absolute left-0 top-0 p-5">
        <a href="/" class="flex items-center space-x-2">
            <i class="fi fi-rr-angle-left p-4 bg-purple rounded text-white font-bold"></i>
        </a>
    </div>
    <div class="w-full max-w-md p-6 bg-white rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center text-darkpurple mb-4">Register</h2>
        @if ($errors->any())
            <div class="mb-4">
                <ul class="text-red-600">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{ route('register') }}" method="POST">
            @csrf
            <div class="mb-4">
                <label for="username" class="block text-sm font-medium text-gray-700">Username</label>
                <input type="text" id="username" name="username" value="{{ old('username') }}"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple focus:border-purple" required>
            </div>
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" value="{{ old('email') }}"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple focus:border-purple" required>
            </div>
            <div class="mb-4">
                <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                <input type="password" id="password" name="password"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple focus:border-purple" required>
            </div>
            <div class="mb-4">
                <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                <input type="password" id="password_confirmation" name="password_confirmation"
                    class="mt-1 block w-full p-2 border border-gray-300 rounded-md shadow-sm focus:ring-purple focus:border-purple" required>
            </div>
            <button type="submit"
                class="w-full bg-purple text-white py-2 px-4 rounded-md hover:bg-darkpurple focus:ring-4 focus:ring-purple transition">
                Register
            </button>
        </form>
        <p class="text-sm text-center text-gray-600 mt-4">
            Already have an account? <a href="{{ route('login') }}" class="text-purple hover:underline">Login here</a>.
        </p>
    </div>
</body>
</html>
