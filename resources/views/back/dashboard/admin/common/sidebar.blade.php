<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Page Title</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!-- Optional Tailwind Configuration -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        yellowMain: '#F59E0B',
                        blackMain: '#000000',
                    },
                }
            }
        }
    </script>

    <!-- Include Alpine.js for Dropdown functionality (if necessary) -->
    <script defer src="https://unpkg.com/alpinejs@3.2.2" defer></script>
</head>

<body class="flex">
    <!-- Sidebar with black background and yellow accents -->
    <aside class="sidebar mt-12 bg-blackMain text-yellowMain min-h-screen w-64 p-4">
        <ul class="space-y-8">

            <!-- Sidebar Heading -->
            <li class="text-lg font-semibold text-yellowMain">Admin</li>

            <li>
                <a href="/" class="flex items-center p-2 rounded-lg bg-gray-200 hover:bg-gray-300 shadow-lg hover:shadow-gray-400 transition-all duration-300 transform hover:scale-105">
                    <i class="fas fa-arrow-left text-blackMain mr-3"></i>
                    <span class="text-blackMain font-medium">Back to Home</span>
                </a>
            </li>
            <!-- Add Cake Link -->
            <li>
                <a class="flex items-center p-2 rounded-lg bg-yellowMain hover:bg-yellow-600 shadow-lg hover:shadow-yellow-400 transition-all duration-300 transform hover:scale-105"
                    href="{{ route('addCake') }}">
                    <i class="fas fa-plus-circle text-blackMain mr-3"></i>
                    <span class="text-blackMain font-medium">Add Cake</span>
                </a>
            </li>

            <!-- All Cake Link -->
            <li class="mt-4">
                <a class="flex items-center p-2 rounded-lg bg-yellowMain hover:bg-yellow-600 shadow-lg hover:shadow-yellow-400 transition-all duration-300 transform hover:scale-105"
                    href="{{ route('allCake') }}">
                    <i class="fas fa-list-alt text-blackMain mr-3"></i>
                    <span class="text-blackMain ml-3 font-medium">All Cake</span>
                </a>
            </li>

            <!-- Contact Us Link -->
            <li class="mt-4">
                <a class="flex items-center p-2 rounded-lg bg-yellowMain hover:bg-yellow-600 shadow-lg hover:shadow-yellow-400 transition-all duration-300 transform hover:scale-105"
                    href="{{ route('allcontact') }}">
                    <i class="fas fa-envelope text-blackMain mr-3"></i>
                    <span class="text-blackMain ml-3 font-medium">Contact Us</span>
                </a>
            </li>

            <!-- Cake Order List -->
            <li class="mt-4">
                <a class="flex items-center p-2 rounded-lg bg-yellowMain hover:bg-yellow-600 shadow-lg hover:shadow-yellow-400 transition-all duration-300 transform hover:scale-105"
                    href="{{ route('order.list') }}">
                    <i class="fas fa-receipt text-blackMain mr-3"></i>
                    <span class="text-blackMain ml-3 font-medium">Cake Order List</span>
                </a>
            </li>

            <!-- Our Team Dropdown Menu -->
            <li class="relative mt-4" x-data="{ open: false }">
                <a @click="open = !open" class="flex items-center p-2 rounded-lg bg-yellowMain hover:bg-yellow-600 shadow-lg hover:shadow-yellow-400 transition-all duration-300 transform hover:scale-105 cursor-pointer">
                    <i class="fas fa-users text-blackMain mr-3"></i>
                    <span class="text-blackMain font-medium">Our Team</span>
                    <i class="fas fa-chevron-down text-blackMain ml-auto transition-transform duration-200" :class="open ? 'rotate-180' : ''"></i>
                </a>
                <ul x-show="open" @click.away="open = false" class="absolute left-0 mt-2 w-full bg-white text-gray-800 rounded-md shadow-lg z-20">
                    <li class="border-b">
                        <a href="{{ route('addmember') }}" class="flex items-center p-2 hover:bg-gray-100 rounded-t-md transition">
                            <i class="fas fa-user-plus text-yellowMain mr-3"></i>
                            <span>Add Member</span>
                        </a>
                    </li>
                    <li>
                        <a href="{{ route('allmember') }}" class="flex items-center p-2 hover:bg-gray-100 rounded-b-md transition">
                            <i class="fas fa-users text-yellowMain mr-3"></i>
                            <span>All Members</span>
                        </a>
                    </li>
                </ul>
            </li>
        </ul>
    </aside>

    <!-- Main Content Area -->
    <main class="flex-grow p-6">
        <button onclick="window.location.href='/'" class="flex items-center px-4 py-2 bg-yellowMain text-white rounded-lg hover:bg-yellow-600 transition duration-300">
            <i class="fas fa-arrow-left mr-2"></i>
            Back to Home
        </button>
    </main>
</body>