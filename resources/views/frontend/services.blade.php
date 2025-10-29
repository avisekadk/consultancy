@extends('layout.frontend.master')
@section('title', 'Our Services')

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
<li class="text-gray-200">Services</li>
</ol>
</nav>
<h1 class="text-5xl md:text-6xl font-bold mb-4">Our Services</h1>
<p class="text-xl text-gray-100 max-w-2xl mx-auto">Comprehensive support for your educational journey</p>
</div>
</section>

<!-- Services Grid -->
<section class="py-20 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
@if($services->count() > 0)
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
@foreach($services as $service)
<div class="bg-white rounded-2xl p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
<div class="relative mb-6">
@if($service->image)
<img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="w-full h-48 object-cover rounded-xl">
@else
<div class="w-full h-48 gradient-primary rounded-xl flex items-center justify-center">
<i class="fas fa-concierge-bell text-white text-5xl"></i>
</div>
@endif
</div>
<h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors duration-300">{{ $service->title }}</h3>
<p class="text-gray-600 mb-6">{{ Str::limit($service->short_description, 120) }}</p>
<a href="/services/{{ $service->slug }}" class="inline-flex items-center text-purple-600 font-semibold group-hover:text-purple-700">
Learn More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-300"></i>
</a>
</div>
@endforeach
</div>
@else
<div class="text-center py-20">
<div class="w-32 h-32 gradient-primary rounded-full flex items-center justify-center mx-auto mb-6">
<i class="fas fa-concierge-bell text-white text-5xl"></i>
</div>
<h3 class="text-2xl font-bold text-gray-900 mb-3">No Services Available</h3>
<p class="text-gray-600 mb-6">We're currently updating our services. Please check back soon!</p>
<a href="/contact" class="inline-flex items-center px-6 py-3 gradient-accent text-white rounded-xl font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
Contact Us
</a>
</div>
@endif
</div>
</section>

<!-- Why Choose Our Services -->
<section class="py-20 bg-gradient-to-br from-purple-50 to-pink-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-16">
<div class="inline-block px-4 py-2 bg-purple-100 text-purple-600 rounded-full text-sm font-semibold mb-4">
<i class="fas fa-star mr-2"></i>Why Choose Us
</div>
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why Choose Our Services</h2>
<p class="text-xl text-gray-600 max-w-2xl mx-auto">Comprehensive support throughout your educational journey</p>
</div>

<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
<div class="text-center group">
<div class="w-20 h-20 gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
<i class="fas fa-award text-white text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-900 mb-3">Proven Track Record</h3>
<p class="text-gray-600">10+ years of excellence in education consultancy</p>
</div>
<div class="text-center group">
<div class="w-20 h-20 gradient-accent rounded-2xl flex items-center justify-center mx-auto mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
<i class="fas fa-users text-white text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-900 mb-3">Expert Team</h3>
<p class="text-gray-600">Certified counselors with global experience</p>
</div>
<div class="text-center group">
<div class="w-20 h-20 gradient-success rounded-2xl flex items-center justify-center mx-auto mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
<i class="fas fa-handshake text-white text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-900 mb-3">Personalized Approach</h3>
<p class="text-gray-600">Tailored solutions for every student</p>
</div>
<div class="text-center group">
<div class="w-20 h-20 gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
<i class="fas fa-clock text-white text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-900 mb-3">Fast Processing</h3>
<p class="text-gray-600">Quick turnaround on all applications</p>
</div>
</div>
</div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Ready to Start Your Journey?</h2>
<p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">Contact us today for a free consultation and take the first step towards your dream education</p>
<a href="/contact" class="inline-flex items-center px-8 py-4 gradient-accent text-white rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
Get Started Now <i class="fas fa-arrow-right ml-2"></i>
</a>
</div>
</section>
@endsection