<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JobsNepal</title>
    <!-- Font Awesome CDN -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
   
    <!-- Correct CDN for Tailwind 3.x -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-white">
   
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
