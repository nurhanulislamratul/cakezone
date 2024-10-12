<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Tailwind Custom Config -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        yellowMain: '#F59E0B',
                        blackMain: '#000000',
                        grayMain: '#F5F5F5',
                        whiteMain: '#FFFFFF',
                    },
                }
            }
        }
    </script>

    <!-- Include Alpine.js for Dropdown functionality -->
    <script defer src="https://unpkg.com/alpinejs@3.2.2"></script>
</head>

<body class="flex bg-grayMain font-sans text-gray-900">

    <!-- Sidebar with black background and yellow accents -->
    <aside class="sidebar mt-12 bg-blackMain text-yellowMain min-h-screen w-64 p-6 shadow-lg">
        <div class="mb-8">
            <h1 class="text-3xl font-bold text-yellowMain bg-blackMain p-4 rounded-lg shadow-md">
                User Dashboard
            </h1>
        </div>

        <ul class="space-y-6">
            <!-- Back to Home Link -->
            <li>
                <a href="/" class="flex items-center p-3 rounded-lg bg-gray-200 hover:bg-gray-300 shadow-md transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-arrow-left text-blackMain mr-3"></i>
                    <span class="text-blackMain font-medium">Back to Home</span>
                </a>
            </li>

            <!-- Home Link -->
            <li>
                <a href="{{ route('dashboard') }}" class="flex items-center p-3 rounded-lg bg-yellowMain hover:bg-yellow-600 shadow-md transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-home text-blackMain mr-3"></i>
                    <span class="text-blackMain font-medium">Dashboard</span>
                </a>
            </li>

            <!-- My Order List -->
            <li>
                <a href="{{ route('dashboard.showorder') }}" class="flex items-center p-3 rounded-lg bg-yellowMain hover:bg-yellow-600 shadow-md transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-user-circle text-blackMain mr-3"></i>
                    <span class="text-blackMain font-medium">My Order List</span>
                </a>
            </li>
        </ul>
    </aside>
</body>

</html>