<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Larajobs</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.29.0/feather.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
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
