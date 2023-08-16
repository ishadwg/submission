    <!-- Navbar -->
    <nav class="bg-gray-500 p-4 shadow-lg">
        <div class="container mx-auto flex justify-between items-center">
            <a href="{{ config('app.url') }}" class="text-white font-semibold text-lg">
                {{ config('app.name') }}
                {{-- <img src="https://www.krakatausteel.com/images/reverselogo.png" class="scale-25" --}}
                {{-- alt="{{ config('app.name') }}"> --}}
            </a>
            <ul class="flex space-x-4">
                <li><a href="register" class="text-white hover:text-gray-400">Register</a></li>
                <li><a href="login" class="text-white hover:text-gray-400">Login</a></li>
            </ul>
        </div>
    </nav>
