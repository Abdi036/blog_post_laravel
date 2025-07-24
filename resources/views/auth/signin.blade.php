<x-layout>
    <div class="p-8 rounded-xl w-full max-w-md mx-auto min-h-[75vh]">
        <h1 class="text-3xl font-bold text-center text-black mb-6">SignIn to Your Account</h1>
        <form action={{ route('signin') }} method="POST" class="space-y-5">
            @csrf
            <div>
                <label class="block mb-1 text-gray-700 font-semibold" for="email">Email</label>
                <input type="email" name="email" id="email" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200" />
            </div>
            <div>
                <label class="block mb-1 text-gray-700 font-semibold" for="password">Password</label>
                <input type="password" name="password" id="password" required
                    class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:outline-none focus:ring-2 focus:ring-blue-500 transition duration-200" />
            </div>
            <button type="submit"
                class="w-full bg-black text-white font-bold py-2 rounded-lg shadow hover:bg-gray-800 focus:outline-none focus:ring-2 focus:ring-gray-400 transition duration-200">
                Sign In
            </button>
        </form>
        <p class="mt-6 text-center text-gray-600">
            Don't have an account?
            <a href="/signup" class="text-blue-500 font-semibold hover:underline">Sign Up</a>
        </p>
    </div>
</x-layout>