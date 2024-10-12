<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CakeZone - Cake Shop Login</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Local CSS File -->
    <style>
        body {
            background-color: #f9f9f9;
        }

        /* Center the icon in the input */
        .password-toggle {
            position: absolute;
            right: 1rem;
            /* Tailwind spacing utility */
            top: 50%;
            transform: translateY(-50%);
            color: #888;
            cursor: pointer;
        }
    </style>
</head>

<body>
    @include('sweetalert::alert')

    <!-- Login Form Start -->
    <div class="container mx-auto py-10">
        <div class="flex justify-center">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
                <h2 class="text-2xl font-semibold text-center text-orange-600 mb-6">Login</h2>
                <form action="{{ route('login.authenticate') }}" method="post">
                    @csrf
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-orange-600" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-4 relative">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-orange-600" id="password" name="password" placeholder="Enter your password" required>
                        <i class="fa fa-eye password-toggle mt-2" id="togglePassword" onclick="togglePasswordVisibility()"></i>
                    </div>
                    <div class="mb-4">
                        <div class="flex items-center">
                            <input type="checkbox" class="form-check-input" id="rememberMe" name="rememberMe">
                            <label class="ml-2 text-sm font-medium text-gray-700" for="rememberMe">Remember me</label>
                        </div>
                    </div>
                    <button type="submit" class="w-full bg-orange-600 text-white py-2 rounded-lg hover:bg-orange-500 transition duration-200">Login</button>
                    <p class="text-center mt-2 ">
                        <span class="text-gray-600">Don't have an account?</span>
                        <a href="{{ route('customer.register') }}" class="text-orange-600 hover:underline">Sign up</a>
                    </p>
                </form>
            </div>
        </div>
    </div>
    <!-- Login Form End -->

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>

    <!-- Toggle Password Visibility Script -->
    <script>
        function togglePasswordVisibility() {
            const passwordField = document.getElementById('password');
            const toggleIcon = document.getElementById('togglePassword');
            const isPasswordVisible = passwordField.type === 'password';
            passwordField.type = isPasswordVisible ? 'text' : 'password';
            toggleIcon.classList.toggle('fa-eye-slash', isPasswordVisible);
        }
    </script>
</body>

</html>