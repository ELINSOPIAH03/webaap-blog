<nav class="bg-white shadow-lg">
    <div class="max-w-6xl mx-auto px-4">
        <div class="flex justify-between">
            <div class="flex space-x-7">
                <div>
                    <!-- Website Logo -->
                    <a href="/" class="flex items-center py-4 px-2">
                        {{-- <img src="logo.png" alt="Logo" class="h-8 w-8 mr-2"> --}}
                        <span class="font-semibold text-gray-500 text-lg">Blog App</span>
                    </a>
                </div>
                <!-- Primary Navbar items -->
                <div class="hidden md:flex items-center space-x-1">
                    <a href="/" class="py-4 px-2 text-gray-500 {{ ($title === "Home") ? 'text-green-500 border-b-4 border-green-500' : ''}} font-semibold hover:text-green-500 transition duration-300">Home</a>
                    <a href="/about" class="py-4 px-2 text-gray-500 {{ ($title === "About") ? 'text-green-500 border-b-4 border-green-500' : ''}} font-semibold hover:text-green-500 transition duration-300">About</a>
                    <a href="/blog" class="py-4 px-2 text-gray-500 {{ ($title === "All Posts" ) || ( $title === "Single Post") || ( $title === "Post By Category : Friends") || ( $title === "Post By Category : Traveling") || ( $title === "Post By Category : Food") ? 'text-green-500 border-b-4 border-green-500' : ''}} font-semibold hover:text-green-500 transition duration-300">Blog</a>
                    <a href="/categories" class="py-4 px-2 text-gray-500 {{ ($title === "Post Categories") ? 'text-green-500 border-b-4 border-green-500' : ''}} font-semibold hover:text-green-500 transition duration-300">Categories</a>
                </div>
            </div>
            
            @auth
                <!-- Secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-3 ">
                    <div @click.away="open = false" class="relative" x-data="{ open: false }">
                        <p @click="open = !open" class="flex flex-row items-center w-full px-4 py-2 mt-2 font-semibold text-left bg-transparent rounded-lg hover:text-green-500 focus:text-gray-900 text-gray-500">
                            <span>Wellcome back, {{ auth()->user()->name }}</span>
                        </p>
                        <div x-show="open" x-transition:enter="transition ease-out duration-100" x-transition:enter-start="transform opacity-0 scale-95" x-transition:enter-end="transform opacity-100 scale-100" x-transition:leave="transition ease-in duration-75" x-transition:leave-start="transform opacity-100 scale-100" x-transition:leave-end="transform opacity-0 scale-95" class="absolute right-0 w-full mt-2 origin-top-right rounded-md shadow-lg md:w-48">
                            <div class="px-2 py-2 bg-white  shadow dark-mode:bg-gray-800">
                                <a class="block px-4 py-2 mt-2 font-semibold bg-transparent rounded-lg  hover:text-green-500 text-gray-500" href="/dashboard">My Dashboard</a>
                                <form action="/logout" method="post">
                                    @csrf
                                    <button type="submit" class="block px-4 py-2 mt-2 font-semibold bg-transparent rounded-lg hover:text-green-500 text-gray-500">Logout</button>
                                </form>
                            </div>
                        </div>
                    </div>   
                
                </div>
            @else
                <!-- Secondary Navbar items -->
                <div class="hidden md:flex items-center space-x-3 ">
                    <a href="/login" class="py-2 px-2 font-medium text-gray-500 {{ ($title === "Login") ? 'text-green-500 border-b-4 border-green-500' : ''}} rounded hover:bg-green-500 hover:text-white transition duration-300">Log In</a>
                    {{-- <a href="/register" class="py-2 px-2 font-medium text-white bg-green-500 rounded hover:bg-green-400 transition duration-300">Sign Up</a> --}}
                </div>
            @endauth
            
            <!-- Mobile menu button -->
            <div class="md:hidden flex items-center">
                <button class="outline-none mobile-menu-button">
                <svg class=" w-6 h-6 text-gray-500 hover:text-green-500 "
                    x-show="!showMenu"
                    fill="none"
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                >
                    <path d="M4 6h16M4 12h16M4 18h16"></path>
                </svg>
            </button>
            </div>
        </div>
    </div>
    <!-- mobile menu -->
    <div class="hidden mobile-menu">
        <ul class="">
            <li class=""><a href="/" class="block text-sm px-2 py-4 hover:text-white hover:bg-green-500 duration-300">Home</a></li>
            <li><a href="/about" class="block text-sm px-2 py-4 hover:text-white hover:bg-green-500 transition duration-300">About</a></li>
            <li><a href="/blog" class="block text-sm px-2 py-4 hover:text-white hover:bg-green-500 transition duration-300">Blog</a></li>
            <li><a href="/categories" class="block text-sm px-2 py-4 hover:text-white hover:bg-green-500 transition duration-300">Categories</a></li>
            @auth
                <li><a href="/dashboard" class="block text-sm px-2 py-4 hover:text-white hover:bg-green-500 transition duration-300">My Dashboard</a></li>
                <form action="/logout" method="post">
                    @csrf
                    <li><button type="submit" class="block text-sm px-2 py-4 hover:text-white hover:bg-green-500 transition duration-300">Logout</button></li>
                </form>
            @else
                <li><a href="/login" class="block text-sm px-2 py-4 hover:text-white hover:bg-green-500 transition duration-300">LogIn</a></li>
            @endauth
        </ul>
    </div>
    <script>
        const btn = document.querySelector("button.mobile-menu-button");
        const menu = document.querySelector(".mobile-menu");

        btn.addEventListener("click", () => {
            menu.classList.toggle("hidden");
        });
    </script>
</nav>