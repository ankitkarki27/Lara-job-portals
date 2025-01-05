<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Portal - Find Your Dream Job</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
<style>

body {
    font-family: 'Poppins', sans-serif;
}
</style>
</head>

<body class="bg-white">
<!-- Navigation -->
<nav class="bg-white shadow-lg fixed w-full top-0 z-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between items-center h-16">
            <a href="/" class="flex items-center">
                <img src="/images/image.png" alt="Logo" class="h-10">
            </a>
            <!-- Hamburger Icon for Mobile -->
            <div class="md:hidden flex items-center">
                <button id="hamburger" class="text-gray-900 focus:outline-none">
                    <i class="fas fa-bars text-2xl"></i>
                </button>
            </div>
            <!-- Navigation Links (Hidden on mobile) -->
            <div class="hidden md:flex items-center space-x-6">
                <a href="#home" class="text-gray-900 hover:text-blue-500 font-semibold">Home</a>
                <a href="{{ route('login') }}"  class="text-gray-900 hover:text-blue-500 font-semibold">Login</a>
                <a href="{{ route('register') }}"  class="text-gray-900 hover:text-blue-500 font-semibold">Register</a>
            </div>
        </div>
    </div>
    <!-- Mobile Menu (Initially Hidden) -->
    <div id="mobileMenu" class="md:hidden hidden bg-white p-4">
        <div class="flex flex-col items-center space-y-6">
            <a href="#home" class="text-gray-900 hover:text-blue-500 font-semibold">Home</a>
            <a href="{{ route('login') }}"  class="text-gray-900 hover:text-blue-500 font-semibold">Login</a>
            <a href="{{ route('register') }}"  class="text-gray-900 hover:text-blue-500 font-semibold">Register</a>
            
        </div>
    </div>
</nav>

    <!-- Hero Section -->
    <section id="home" class="bg-white text-black pt-20">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-20 text-center md:text-left">
            <div class="grid grid-cols-1 md:grid-cols-2 items-center gap-8">
                <!-- Text Section -->
                <div class="order-last md:order-first">
                    <h1 class="text-4xl text-left md:text-5xl font-bold leading-right">
                        Find Your Perfect Job Today and Start Your Career Journey.
                    </h1>
                    <p class="text-lg mt-4 text-left">
                        Join thousands of job seekers and top companies on the most reliable platform for opportunities.
                    </p>
                    <div class="mt-8 flex flex-wrap gap-4 justify-left md:justify-start">
                        <button class="bg-gray-900 hover:bg-gray-900 text-white font-semibold px-6 py-3 rounded-lg">
                           Find Jobs
                        </button>
                        <button class="bg-white border border-black text-black hover:bg-gray-300 hover:text-black font-semibold px-6 py-3 rounded-lg">
                            Post New Jobs
                        </button>
                    </div>
                </div>

                <!-- Image Section -->
                <div>
                    <img src="/images/landing-hero.png" alt="Job Search" class="rounded-lg mx-auto">
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8">
                <div>
                    <h3 class="text-white font-semibold mb-4">For Job Seekers</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Browse Jobs</a></li>
                        <li><a href="#" class="hover:text-white">Career Advice</a></li>
                        <li><a href="#" class="hover:text-white">Resume Builder</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-4">For Employers</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">Post a Job</a></li>
                        <li><a href="#" class="hover:text-white">Browse Candidates</a></li>
                        <li><a href="#" class="hover:text-white">Pricing</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-4">Company</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-white">About Us</a></li>
                        <li><a href="#" class="hover:text-white">Contact</a></li>
                        <li><a href="#" class="hover:text-white">Privacy Policy</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-white font-semibold mb-4">Connect</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-3xl hover:text-white"><i class="fa-brands fa-square-facebook"></i></a>
                        <a href="#" class="text-3xl hover:text-white"><i class="fa-brands fa-square-twitter"></i></a>
                        <a href="#" class="text-3xl hover:text-white"><i class="fa-brands fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p>&copy; 2024 jobsNepal. All rights reserved.</p>
            </div>
        </div>
    </footer>

<!-- JavaScript to handle the menu toggle -->
    <script>
        const hamburger = document.getElementById('hamburger');
        const mobileMenu = document.getElementById('mobileMenu');
    
        // Toggle mobile menu on hamburger click
        hamburger.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');  // Toggle the visibility of the menu
        });
    </script>
    
</body>
</html>
