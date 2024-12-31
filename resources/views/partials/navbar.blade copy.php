<nav class="bg-white border-b shadow-md">
    <div class="container mx-auto flex items-center justify-between px-4 sm:px-6 py-3">
        <!-- Logo -->
        <a href="/" class="flex items-center">
            <span class="text-2xl font-semibold text-indigo-600 whitespace-nowrap">LaraJobs</span>
        </a>

        <!-- Hamburger Menu Button -->
        <button 
            id="navbar-toggler" 
            type="button" 
            class="inline-flex items-center p-2 text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:ring-2 focus:ring-indigo-300 focus:outline-none">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
            </svg>
        </button>

        <!-- Navbar Links -->
        <div 
            id="navbar-menu" 
            class="hidden w-full md:flex md:w-auto items-center">
            <ul class="flex flex-col md:flex-row md:space-x-2 mt-4 md:mt-0 text-gray-900">
                <li>
                    <a href="/" class="block py-2 px-2 text-base font-medium rounded hover:bg-gray-100 hover:text-indigo-600 md:hover:bg-transparent md:hover:text-indigo-600">Home</a>
                </li>
                <li>
                    <a href="/jobs" class="block py-2 px-2 text-base font-medium rounded hover:bg-gray-100 hover:text-indigo-600 md:hover:bg-transparent md:hover:text-indigo-600">Jobs</a>
                </li>
                <li>
                    <a href="/about" class="block py-2 px-2 text-base font-medium rounded hover:bg-gray-100 hover:text-indigo-600 md:hover:bg-transparent md:hover:text-indigo-600">About</a>
                </li>
                <li>
                    <a href="/contact" class="block py-2 px-2 text-base font-medium rounded hover:bg-gray-100 hover:text-indigo-600 md:hover:bg-transparent md:hover:text-indigo-600">Contact</a>
                </li>
                <li>
                    <a href="/login" class="block px-5 py-2 text-sm font-medium text-black text-indigo-700 bg-white border border-indigo-700 rounded hover:bg-indigo-700 hover:text-white md:py-2 md:px-6 transition">
                        Log in
                    </a>
                </li>
                <li>
                    <a href="/register" class="block px-5 py-2 text-sm font-medium text-white bg-indigo-600 rounded hover:bg-indigo-700 md:py-2 md:px-6">
                        Sign in
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<!-- JavaScript for Hamburger Toggle -->
<script>
    document.getElementById('navbar-toggler').addEventListener('click', function () {
        const navbarMenu = document.getElementById('navbar-menu');
        navbarMenu.classList.toggle('hidden');
    });
</script>
