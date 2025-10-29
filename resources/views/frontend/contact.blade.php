@extends('layout.frontend.master')
@section('title', 'Contact Us')

@section('content')
<!-- Page Header -->
<section class="relative py-20 gradient-primary overflow-hidden">
<div class="absolute inset-0 opacity-10">
<div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
<div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
</div>
<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
<nav class="flex justify-center mb-6">
<ol class="flex items-center space-x-2 text-sm">
<li><a href="/" class="hover:text-gray-200 transition-colors duration-300">Home</a></li>
<li><i class="fas fa-chevron-right text-xs"></i></li>
<li class="text-gray-200">Contact</li>
</ol>
</nav>
<h1 class="text-5xl md:text-6xl font-bold mb-4">Contact Us</h1>
<p class="text-xl text-gray-100 max-w-2xl mx-auto">Get in touch with our expert counselors</p>
</div>
</section>

<!-- Contact Section -->
<section class="py-20 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
@if(session('success'))
<div class="mb-8 bg-green-50 border-l-4 border-green-500 p-6 rounded-xl flex items-start gap-4">
<div class="w-10 h-10 rounded-lg bg-green-500 flex items-center justify-center flex-shrink-0">
<i class="fas fa-check text-white"></i>
</div>
<div>
<h4 class="font-bold text-green-900 mb-1">Success!</h4>
<p class="text-green-700">{{ session('success') }}</p>
</div>
<button type="button" class="ml-auto text-green-700 hover:text-green-900" onclick="this.parentElement.remove()">
<i class="fas fa-times"></i>
</button>
</div>
@endif

<div class="grid lg:grid-cols-3 gap-12">
<!-- Contact Form -->
<div class="lg:col-span-2">
<div class="bg-white rounded-2xl shadow-xl p-8 md:p-12">
<h2 class="text-3xl font-bold text-gray-900 mb-2">Send Us a Message</h2>
<p class="text-gray-600 mb-8">Fill out the form and we'll get back to you within 24 hours</p>

<form action="{{ route('contact.store') }}" method="POST" id="contactForm">
@csrf
<div class="grid md:grid-cols-2 gap-6 mb-6">
<div>
<label class="block text-sm font-semibold text-gray-700 mb-2">Full Name *</label>
<input type="text" name="name" value="{{ old('name') }}" class="w-full px-4 py-3 rounded-xl border-2 focus:border-purple-600 focus:outline-none transition-colors duration-300 @error('name') border-red-500 @enderror" required>
@error('name')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>
<div>
<label class="block text-sm font-semibold text-gray-700 mb-2">Email Address *</label>
<input type="email" name="email" value="{{ old('email') }}" class="w-full px-4 py-3 rounded-xl border-2 focus:border-purple-600 focus:outline-none transition-colors duration-300 @error('email') border-red-500 @enderror" required>
@error('email')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>
<div>
<label class="block text-sm font-semibold text-gray-700 mb-2">Phone Number *</label>
<input type="tel" name="phone" value="{{ old('phone') }}" class="w-full px-4 py-3 rounded-xl border-2  focus:border-purple-600 focus:outline-none transition-colors duration-300 @error('phone') border-red-500 @enderror" required>
@error('phone')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>
<div>
<label class="block text-sm font-semibold text-gray-700 mb-2">City *</label>
<input type="text" name="city" value="{{ old('city') }}" class="w-full px-4 py-3 rounded-xl border-2  focus:border-purple-600 focus:outline-none transition-colors duration-300 @error('city') border-red-500 @enderror" required>
@error('city')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>
</div>

<div class="mb-6">
<label class="block text-sm font-semibold text-gray-700 mb-2">Course of Interest *</label>
<select name="course" class="w-full px-4 py-3 rounded-xl border-2 focus:border-purple-600 focus:outline-none transition-colors duration-300 @error('course') border-red-500 @enderror" required>
<option value="">Select a course</option>
@foreach($courses as $course)
@if($course->status == 1)
<option value="{{ $course->title }}" {{ old('course') == $course->title ? 'selected' : '' }}>{{ $course->title }}</option>
@endif
@endforeach
<option value="General Inquiry" {{ old('course') == 'General Inquiry' ? 'selected' : '' }}>General Inquiry</option>
</select>
@error('course')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>

<div class="mb-8">
<label class="block text-sm font-semibold text-gray-700 mb-2">Message *</label>
<textarea name="message" rows="6" class="w-full px-4 py-3 rounded-xl border-2 focus:border-purple-600 focus:outline-none transition-colors duration-300 @error('message') border-red-500 @enderror" required>{{ old('message') }}</textarea>
@error('message')
<p class="text-red-500 text-sm mt-1">{{ $message }}</p>
@enderror
</div>

<button type="submit" class="w-full px-8 py-4 gradient-accent text-white rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
<i class="fas fa-paper-plane mr-2"></i>Send Message
</button>
</form>
</div>
</div>

<!-- Contact Info -->
<div class="lg:col-span-1 space-y-6">
<!-- Contact Details -->
<div class="bg-white rounded-2xl shadow-xl p-8">
<h3 class="text-2xl font-bold text-gray-900 mb-6">Get in Touch</h3>

<div class="space-y-6">
<div class="flex items-start gap-4">
<div class="w-12 h-12 gradient-primary rounded-xl flex items-center justify-center flex-shrink-0">
<i class="fas fa-map-marker-alt text-white"></i>
</div>
<div>
<p class="font-semibold text-gray-900 mb-1">Visit Us</p>
<p class="text-gray-600">123 Education Street, City</p>
</div>
</div>

<div class="flex items-start gap-4">
<div class="w-12 h-12 gradient-accent rounded-xl flex items-center justify-center flex-shrink-0">
<i class="fas fa-phone text-white"></i>
</div>
<div>
<p class="font-semibold text-gray-900 mb-1">Call Us</p>
<a href="tel:+1234567890" class="text-purple-600 hover:text-purple-700 transition-colors duration-300">+1 234 567 8900</a>
</div>
</div>

<div class="flex items-start gap-4">
<div class="w-12 h-12 gradient-success rounded-xl flex items-center justify-center flex-shrink-0">
<i class="fas fa-envelope text-white"></i>
</div>
<div>
<p class="font-semibold text-gray-900 mb-1">Email Us</p>
<a href="mailto:info@educonsult.com" class="text-purple-600 hover:text-purple-700 transition-colors duration-300">info@educonsult.com</a>
</div>
</div>
</div>

<div class="mt-8 pt-8 border-t border-gray-200">
<h4 class="font-bold text-gray-900 mb-4">Follow Us</h4>
<div class="flex gap-3">
<a href="#" class="w-12 h-12 rounded-xl bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1">
<i class="fab fa-facebook-f"></i>
</a>
<a href="#" class="w-12 h-12 rounded-xl bg-sky-500 hover:bg-sky-600 text-white flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1">
<i class="fab fa-twitter"></i>
</a>
<a href="#" class="w-12 h-12 rounded-xl bg-red-500 hover:bg-red-600 text-white flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1">
<i class="fab fa-instagram"></i>
</a>
<a href="#" class="w-12 h-12 rounded-xl bg-blue-700 hover:bg-blue-800 text-white flex items-center justify-center transition-all duration-300 transform hover:-translate-y-1">
<i class="fab fa-linkedin-in"></i>
</a>
</div>
</div>
</div>

<!-- Office Hours -->
<div class="bg-white rounded-2xl shadow-xl overflow-hidden">
<div class="gradient-primary p-8 text-white">
<div class="w-16 h-16 bg-white bg-opacity-20 backdrop-blur-sm rounded-xl flex items-center justify-center mb-4">
<i class="fas fa-clock text-3xl"></i>
</div>
<h3 class="text-2xl font-bold mb-6">Office Hours</h3>
<div class="space-y-3">
<div class="flex justify-between">
<span class="font-semibold">Monday - Friday</span>
<span>9:00 AM - 6:00 PM</span>
</div>
<div class="flex justify-between">
<span class="font-semibold">Saturday</span>
<span>10:00 AM - 4:00 PM</span>
</div>
<div class="flex justify-between">
<span class="font-semibold">Sunday</span>
<span>Closed</span>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</section>

<!-- Branches Section -->
@if($branches->count() > 0)
<section class="py-20 bg-gradient-to-br from-purple-50 to-pink-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-16">
<div class="inline-block px-4 py-2 bg-purple-100 text-purple-600 rounded-full text-sm font-semibold mb-4">
<i class="fas fa-map-marker-alt mr-2"></i>Our Locations
</div>
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Visit Our Branches</h2>
<p class="text-xl text-gray-600 max-w-2xl mx-auto">We're located at convenient locations to serve you better</p>
</div>

<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
@foreach($branches->take(3) as $branch)
@if($branch->status == 1)
<div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
<div class="w-16 h-16 gradient-primary rounded-xl flex items-center justify-center mb-6">
<i class="fas fa-building text-white text-2xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-900 mb-4">{{ $branch->title }}</h3>
@if($branch->location)
<p class="text-gray-600 mb-3 flex items-start gap-3">
<i class="fas fa-map-marker-alt text-purple-600 mt-1 flex-shrink-0"></i>
<span>{{ $branch->location }}</span>
</p>
@endif
<p class="text-gray-600 mb-3 flex items-center gap-3">
<i class="fas fa-phone text-purple-600 flex-shrink-0"></i>
<span>{{ $branch->phone }}</span>
</p>
<p class="text-gray-600 mb-6 flex items-center gap-3">
<i class="fas fa-envelope text-purple-600 flex-shrink-0"></i>
<span class="truncate">{{ $branch->email }}</span>
</p>
<a href="/branches" class="inline-flex items-center text-purple-600 font-semibold hover:text-purple-700">
Get Directions <i class="fas fa-arrow-right ml-2"></i>
</a>
</div>
@endif
@endforeach
</div>
</div>
</section>
@endif
@endsection

@section('scripts')
<script>
document.getElementById('contactForm').addEventListener('submit', function(e) {
const phone = this.querySelector('[name="phone"]').value;
if (!/^\+?[\d\s-()]+$/.test(phone)) {
e.preventDefault();
alert('Please enter a valid phone number');
}
});
</script>
@endsection