<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vehicle Booking System</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .gradient-bg {
            background: linear-gradient(135deg, #1a365d 0%, #2d3748 100%);
        }
        .card-hover {
            transition: all 0.3s ease;
        }
        .card-hover:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.2);
        }
        .hero-pattern {
            background-image: url('data:image/svg+xml,%3Csvg width="20" height="20" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"%3E%3Cg fill="%239C92AC" fill-opacity="0.05"%3E%3Cpath d="M0 0h20L0 20z"/%3E%3C/g%3E%3C/svg%3E');
        }
    </style>
</head>
<body class="min-h-screen flex flex-col">
    <!-- Navbar -->
    <nav class="bg-gray-900 shadow-lg fixed w-full z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex justify-between h-16">
                <div class="flex items-center">
                    <i class="fas fa-car-side text-blue-500 text-2xl mr-2"></i>
                    <span class="text-white font-bold text-xl">VehicleBook</span>
                </div>
                
                <!-- Desktop Menu -->
                <div class="hidden md:flex items-center space-x-8">
                    <a href="index.php" class="text-gray-300 hover:text-white hover:bg-gray-700 px-3 py-2 rounded-md transition duration-300">Home</a>
                    <div class="relative group">
                        <button class="text-gray-300 hover:text-white px-3 py-2 rounded-md transition duration-300">
                            Admin
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="absolute hidden group-hover:block w-48 bg-gray-800 rounded-md shadow-lg py-1">
                            <a href="admin_login.php" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Login</a>
                            <a href="admin_register.php" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Register</a>
                        </div>
                    </div>
                    <div class="relative group">
                        <button class="text-gray-300 hover:text-white px-3 py-2 rounded-md transition duration-300">
                            User
                            <i class="fas fa-chevron-down ml-1 text-xs"></i>
                        </button>
                        <div class="absolute hidden group-hover:block w-48 bg-gray-800 rounded-md shadow-lg py-1">
                            <a href="user_login.php" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Login</a>
                            <a href="user_register.php" class="block px-4 py-2 text-gray-300 hover:bg-gray-700">Register</a>
                        </div>
                    </div>
                </div>

                <!-- Mobile menu button -->
                <div class="md:hidden flex items-center">
                    <button id="mobile-menu-button" class="text-gray-300 hover:text-white">
                        <i class="fas fa-bars text-xl"></i>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile menu -->
        <div id="mobile-menu" class="hidden md:hidden bg-gray-800">
            <div class="px-2 pt-2 pb-3 space-y-1">
                <a href="index.php" class="block px-3 py-2 text-gray-300 hover:bg-gray-700 rounded-md">Home</a>
                <a href="admin_login.php" class="block px-3 py-2 text-gray-300 hover:bg-gray-700 rounded-md">Admin Login</a>
                <a href="admin_register.php" class="block px-3 py-2 text-gray-300 hover:bg-gray-700 rounded-md">Admin Register</a>
                <a href="user_login.php" class="block px-3 py-2 text-gray-300 hover:bg-gray-700 rounded-md">User Login</a>
                <a href="user_register.php" class="block px-3 py-2 text-gray-300 hover:bg-gray-700 rounded-md">User Register</a>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <main class="flex-grow">
        <div class="relative bg-gray-900 hero-pattern min-h-screen flex items-center">
            <div class="absolute inset-0 bg-gradient-to-r from-blue-900/90 to-gray-900/90"></div>
            <div class="container mx-auto px-4 py-32 relative z-10">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="text-center md:text-left">
                        <h1 class="text-4xl md:text-6xl font-bold text-white mb-6">
                            Book Your Perfect <span class="text-blue-500">Ride</span>
                        </h1>
                        <p class="text-xl text-gray-300 mb-8">
                            Experience hassle-free vehicle booking with our advanced booking system. 
                            Choose from a wide range of vehicles and book in minutes.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                            <a href="user_register.php" class="inline-flex items-center justify-center px-8 py-3 border border-transparent text-base font-medium rounded-md text-white bg-blue-600 hover:bg-blue-700 transition duration-300">
                                Get Started
                                <i class="fas fa-arrow-right ml-2"></i>
                            </a>
                            <a href="#features" class="inline-flex items-center justify-center px-8 py-3 border border-gray-300 text-base font-medium rounded-md text-gray-300 hover:bg-gray-800 transition duration-300">
                                Learn More
                                <i class="fas fa-info-circle ml-2"></i>
                            </a>
                        </div>
                    </div>
                    <div class="hidden md:block">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="card-hover bg-gray-800 p-6 rounded-lg">
                                <i class="fas fa-car text-blue-500 text-3xl mb-4"></i>
                                <h3 class="text-xl font-semibold text-white mb-2">Wide Selection</h3>
                                <p class="text-gray-400">Choose from various vehicle types</p>
                            </div>
                            <div class="card-hover bg-gray-800 p-6 rounded-lg mt-8">
                                <i class="fas fa-clock text-blue-500 text-3xl mb-4"></i>
                                <h3 class="text-xl font-semibold text-white mb-2">Quick Booking</h3>
                                <p class="text-gray-400">Book in minutes, not hours</p>
                            </div>
                            <div class="card-hover bg-gray-800 p-6 rounded-lg">
                                <i class="fas fa-shield-alt text-blue-500 text-3xl mb-4"></i>
                                <h3 class="text-xl font-semibold text-white mb-2">Secure System</h3>
                                <p class="text-gray-400">Safe and secure transactions</p>
                            </div>
                            <div class="card-hover bg-gray-800 p-6 rounded-lg mt-8">
                                <i class="fas fa-headset text-blue-500 text-3xl mb-4"></i>
                                <h3 class="text-xl font-semibold text-white mb-2">24/7 Support</h3>
                                <p class="text-gray-400">Always here to help you</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-900 text-gray-300 py-8">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-3 gap-8">
                <div>
                    <h3 class="text-lg font-semibold mb-4">About Us</h3>
                    <p class="text-gray-400">We provide an efficient and reliable vehicle booking system for all your transportation needs.</p>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Quick Links</h3>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-white">Terms of Service</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Privacy Policy</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-white">Contact Us</a></li>
                    </ul>
                </div>
                <div>
                    <h3 class="text-lg font-semibold mb-4">Connect With Us</h3>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-white"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="border-t border-gray-800 mt-8 pt-8 text-center">
                <p>&copy; <?php echo date('Y'); ?> Vehicle Booking System. All rights reserved.</p>
            </div>
        </div>
    </footer>

    <script>
        // Mobile menu toggle
        const mobileMenuButton = document.getElementById('mobile-menu-button');
        const mobileMenu = document.getElementById('mobile-menu');

        mobileMenuButton.addEventListener('click', () => {
            mobileMenu.classList.toggle('hidden');
        });

        // Close mobile menu when clicking outside
        document.addEventListener('click', (e) => {
            if (!mobileMenuButton.contains(e.target) && !mobileMenu.contains(e.target)) {
                mobileMenu.classList.add('hidden');
            }
        });
    </script>
</body>
</html>