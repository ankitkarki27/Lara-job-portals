<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobsNepal</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
   
    <!-- Correct CDN for Tailwind 3.x -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50">
   
    @include('partials.navbar')

    
    <!-- Main Content -->
    {{-- contents from jobs/index.balde --}}
    <main class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-16">
        @yield('content')
    </main>

    

  
    @include('partials.footer')
    <script>
        feather.replace();
    </script>
</body>
</html>
