<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CakeZone - Cake Shop Signup</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Cake shop signup form" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Font Awesome CDN -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Local CSS -->
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
    <!-- Registration Form Start -->
    <div class="container mx-auto py-10">
        <div class="flex justify-center">
            <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
                <h2 class="text-2xl font-semibold text-center text-orange-600 mb-6">Register at CakeZone</h2>
                <form action="{{ route('customer.create') }}" method="POST">
                    @csrf
                    <div class="mb-4">
                        <label for="name" class="block text-sm font-medium text-gray-700">Full Name</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-orange-600" id="name" name="name" placeholder="Enter your full name" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="block text-sm font-medium text-gray-700">Email Address</label>
                        <input type="email" class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-orange-600" id="email" name="email" placeholder="Enter your email" required>
                    </div>
                    <div class="mb-4">
                        <label for="phone" class="block text-sm font-medium text-gray-700">Phone Number</label>
                        <input type="text" class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-orange-600" id="phone" name="phone" placeholder="Enter your phone number" required>
                    </div>
                    <div class="mb-4 relative">
                        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                        <input type="password" class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-orange-600" id="password" name="password" placeholder="Enter your password" required>
                        <i class="fa fa-eye password-toggle mt-2" id="togglePassword" onclick="togglePasswordVisibility()"></i>
                    </div>
                    <div class="mb-4 relative">
                        <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm Password</label>
                        <input type="password" class="mt-1 block w-full border border-gray-300 rounded-lg p-2 focus:ring-2 focus:ring-orange-600" id="password_confirmation" name="password_confirmation" placeholder="Confirm your password" required>
                        <i class="fa fa-eye password-toggle mt-2" id="toggleConfirmPassword" onclick="toggleConfirmPasswordVisibility()"></i>
                    </div>
                    <button type="submit" class="w-full bg-orange-600 text-white py-2 rounded-lg hover:bg-orange-500 transition duration-200">Register</button>
                </form>
            </div>
        </div>
    </div>
    <!-- Registration Form End -->

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

        function toggleConfirmPasswordVisibility() {
            const confirmPasswordField = document.getElementById('password_confirmation');
            const toggleIcon = document.getElementById('toggleConfirmPassword');
            const isPasswordVisible = confirmPasswordField.type === 'password';
            confirmPasswordField.type = isPasswordVisible ? 'text' : 'password';
            toggleIcon.classList.toggle('fa-eye-slash', isPasswordVisible);
        }
    </script>
</body>

</html>