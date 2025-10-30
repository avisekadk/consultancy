<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
<title>@yield('title', 'Educational Consultancy')</title>
<!-- SEO Meta Tags -->
<meta name="description" content="@yield('meta_description', 'Leading educational consultancy for study abroad')">
<meta name="keywords" content="@yield('meta_keywords', 'education, consultancy, study abroad')">
<!-- Tailwind CSS -->
<script src="https://cdn.tailwindcss.com"></script>
<!-- Font Awesome -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css">
<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&family=Sora:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
<style>
* {
margin: 0;
padding: 0;
box-sizing: border-box;
}
html, body {
overflow-x: hidden;
max-width: 100vw;
position: relative;
}
body {
font-family: 'Inter', sans-serif;
}
h1, h2, h3, h4, h5, h6 {
font-family: 'Sora', sans-serif;
word-wrap: break-word;
overflow-wrap: break-word;
}
.gradient-primary {
background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
}
.gradient-accent {
background: linear-gradient(135deg, #f093fb 0%, #f5576c 100%);
}
.gradient-success {
background: linear-gradient(135deg, #4facfe 0%, #00f2fe 100%);
}
.glass-effect {
background: rgba(255, 255, 255, 0.1);
backdrop-filter: blur(10px);
border: 1px solid rgba(255, 255, 255, 0.2);
}
</style>
@yield('styles')
</head>
<body class="antialiased bg-gray-50">
<!-- Navbar -->
<nav class="fixed w-full z-50 transition-all duration-300 bg-white shadow-lg" id="navbar">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="flex justify-between items-center h-16 md:h-20">
<!-- Logo -->
<a href="/" class="flex items-center space-x-2 md:space-x-3 group flex-shrink-0">
<div class="w-10 h-10 md:w-12 md:h-12 gradient-primary rounded-xl flex items-center justify-center transform group-hover:scale-110 transition-transform duration-300">
<i class="fas fa-graduation-cap text-white text-lg md:text-2xl"></i>
</div>
<span class="text-base md:text-2xl font-bold bg-gradient-to-r from-purple-600 to-pink-600 bg-clip-text text-transparent whitespace-nowrap">EduConsult</span>
</a>

<!-- Desktop Menu -->
<div class="hidden lg:flex items-center space-x-1 flex-shrink-0">
<a href="/" class="px-3 py-2 rounded-lg text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-all duration-300 font-medium text-sm whitespace-nowrap">Home</a>
<a href="/about" class="px-3 py-2 rounded-lg text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-all duration-300 font-medium text-sm whitespace-nowrap">About</a>
<a href="/courses" class="px-3 py-2 rounded-lg text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-all duration-300 font-medium text-sm whitespace-nowrap">Courses</a>
<a href="/services" class="px-3 py-2 rounded-lg text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-all duration-300 font-medium text-sm whitespace-nowrap">Services</a>
<a href="/countries" class="px-3 py-2 rounded-lg text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-all duration-300 font-medium text-sm whitespace-nowrap">Study Abroad</a>
<a href="/blogs" class="px-3 py-2 rounded-lg text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-all duration-300 font-medium text-sm whitespace-nowrap">Blogs</a>
<a href="/branches" class="px-3 py-2 rounded-lg text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-all duration-300 font-medium text-sm whitespace-nowrap">Branches</a>
<a href="/contact" class="ml-3 px-5 py-2.5 gradient-accent text-white rounded-xl font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 text-sm whitespace-nowrap">Free Consultation</a>
</div>

<!-- Mobile Menu Button -->
<button class="lg:hidden w-10 h-10 flex items-center justify-center text-gray-700 rounded-lg hover:bg-gray-100 flex-shrink-0" id="mobile-menu-btn">
<i class="fas fa-bars text-xl"></i>
</button>
</div>
</div>

<!-- Mobile Menu -->
<div class="lg:hidden hidden bg-white border-t" id="mobile-menu">
<div class="px-4 py-4 space-y-2 max-h-screen overflow-y-auto">
<a href="/" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-all duration-300 font-medium">Home</a>
<a href="/about" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-all duration-300 font-medium">About</a>
<a href="/courses" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-all duration-300 font-medium">Courses</a>
<a href="/services" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-all duration-300 font-medium">Services</a>
<a href="/countries" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-all duration-300 font-medium">Study Abroad</a>
<a href="/blogs" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-all duration-300 font-medium">Blogs</a>
<a href="/branches" class="block px-4 py-3 rounded-lg text-gray-700 hover:bg-purple-50 hover:text-purple-600 transition-all duration-300 font-medium">Branches</a>
<a href="/contact" class="block px-4 py-3 gradient-accent text-white rounded-xl font-semibold text-center">Free Consultation</a>
</div>
</div>
</nav>

<!-- Main Content -->
<main class="pt-16 md:pt-20">
@yield('content')
</main>

<!-- Footer -->
<footer class="bg-gray-900 text-gray-300">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-16">
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">
<!-- About -->
<div class="sm:col-span-2 lg:col-span-1">
<div class="flex items-center space-x-3 mb-6">
<div class="w-12 h-12 gradient-primary rounded-xl flex items-center justify-center flex-shrink-0">
<i class="fas fa-graduation-cap text-white text-2xl"></i>
</div>
<span class="text-xl md:text-2xl font-bold text-white">EduConsult</span>
</div>
<p class="text-gray-400 mb-6 leading-relaxed text-sm">Leading educational consultancy providing expert guidance for students aspiring to study abroad.</p>
<div class="flex flex-wrap gap-3">
<a href="#" class="w-10 h-10 rounded-lg bg-gray-800 hover:bg-purple-600 flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1"><i class="fab fa-facebook-f"></i></a>
<a href="#" class="w-10 h-10 rounded-lg bg-gray-800 hover:bg-purple-600 flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1"><i class="fab fa-twitter"></i></a>
<a href="#" class="w-10 h-10 rounded-lg bg-gray-800 hover:bg-purple-600 flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1"><i class="fab fa-instagram"></i></a>
<a href="#" class="w-10 h-10 rounded-lg bg-gray-800 hover:bg-purple-600 flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1"><i class="fab fa-linkedin-in"></i></a>
</div>
</div>

<!-- Quick Links -->
<div>
<h5 class="text-white font-bold text-base md:text-lg mb-4 md:mb-6">Quick Links</h5>
<ul class="space-y-2 text-sm">
<li><a href="/" class="hover:text-purple-400 transition-colors duration-300">Home</a></li>
<li><a href="/about" class="hover:text-purple-400 transition-colors duration-300">About Us</a></li>
<li><a href="/services" class="hover:text-purple-400 transition-colors duration-300">Services</a></li>
<li><a href="/contact" class="hover:text-purple-400 transition-colors duration-300">Contact</a></li>
</ul>
</div>

<!-- Services -->
<div>
<h5 class="text-white font-bold text-base md:text-lg mb-4 md:mb-6">Our Services</h5>
<ul class="space-y-2 text-sm">
<li><a href="/courses" class="hover:text-purple-400 transition-colors duration-300">Courses</a></li>
<li><a href="/countries" class="hover:text-purple-400 transition-colors duration-300">Study Abroad</a></li>
<li><a href="/blogs" class="hover:text-purple-400 transition-colors duration-300">Latest Blogs</a></li>
<li><a href="/branches" class="hover:text-purple-400 transition-colors duration-300">Our Branches</a></li>
</ul>
</div>

<!-- Contact -->
<div>
<h5 class="text-white font-bold text-base md:text-lg mb-4 md:mb-6">Contact Info</h5>
<ul class="space-y-3 text-sm">
<li class="flex items-start space-x-3">
<i class="fas fa-map-marker-alt text-purple-400 mt-1 flex-shrink-0"></i>
<span class="break-words">123 Education Street</span>
</li>
<li class="flex items-start space-x-3">
<i class="fas fa-phone text-purple-400 mt-1 flex-shrink-0"></i>
<span class="break-words">+1 234 567 8900</span>
</li>
<li class="flex items-start space-x-3">
<i class="fas fa-envelope text-purple-400 mt-1 flex-shrink-0"></i>
<span class="break-words">info@educonsult.com</span>
</li>
</ul>
</div>
</div>

<div class="border-t border-gray-800 mt-8 md:mt-12 pt-6 md:pt-8 text-center">
<p class="text-gray-400 text-sm">&copy; 2025 EduConsult. All Rights Reserved.</p>
</div>
</div>
</footer>

<script>
// Mobile menu toggle
document.getElementById('mobile-menu-btn').addEventListener('click', function() {
const menu = document.getElementById('mobile-menu');
const icon = this.querySelector('i');
menu.classList.toggle('hidden');
icon.classList.toggle('fa-bars');
icon.classList.toggle('fa-times');
});

// Navbar scroll effect
window.addEventListener('scroll', function() {
const navbar = document.getElementById('navbar');
if (window.scrollY > 50) {
navbar.classList.add('shadow-xl');
} else {
navbar.classList.remove('shadow-xl');
}
});
</script>
@yield('scripts')
</body>
</html>