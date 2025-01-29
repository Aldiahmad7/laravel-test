<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-purple-400 via-blue-500 to-purple-600">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center">Login Form</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input class="w-full p-2 border rounded mt-2" type="email" name="email" placeholder="Email or Phone">
            <input class="w-full p-2 border rounded mt-2" type="password" name="password" placeholder="Password">
            <div class="flex justify-between items-center mt-2">
                <a href="#" class="text-blue-500 text-sm">Forgot Password?</a>
            </div>
            <button class="w-full bg-gradient-to-r from-blue-500 to-purple-500 text-white p-2 rounded mt-4">LOGIN</button>
        </form>
        <div class="text-center mt-4">
            <p class="text-sm">Not a member? <a href="{{ route('register') }}" class="text-blue-500">Signup now</a></p>
        </div>
    </div>
</div>
