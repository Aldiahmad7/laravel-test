
<div class="min-h-screen flex items-center justify-center bg-gray-100">
    <div class="w-full max-w-md bg-white p-6 rounded-lg shadow-md">
        <h2 class="text-2xl font-bold text-center">Login</h2>
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input class="w-full p-2 border rounded mt-2" type="email" name="email" placeholder="Email">
            <input class="w-full p-2 border rounded mt-2" type="password" name="password" placeholder="Password">
            <button class="w-full bg-blue-500 text-white p-2 rounded mt-4">Login</button>
        </form>
    </div>
</div>