<div class="min-h-screen flex items-center justify-center bg-gradient-to-r from-gray-200 via-gray-300 to-gray-400">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center mb-4">Register</h2>
        <form method="POST" action="{{ route('register') }}">
            @csrf
            <div class="mb-4">
                <input class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                       type="text" name="name" placeholder="Full Name" required>
            </div>
            <div class="mb-4">
                <input class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                       type="email" name="email" placeholder="Email" required>
            </div>
            <div class="mb-4">
                <input class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                       type="password" name="password" placeholder="Password" required>
            </div>
            <div class="mb-4">
                <input class="w-full p-3 border border-gray-300 rounded focus:outline-none focus:ring-2 focus:ring-green-400"
                       type="password" name="password_confirmation" placeholder="Confirm Password" required>
            </div>
            <button class="w-full bg-green-500 text-white p-3 rounded hover:opacity-90 transition">
                Register
            </button>
        </form>
    </div>
</div>
