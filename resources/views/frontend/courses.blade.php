@extends('layout.frontend.master')
@section('title', 'Our Courses')

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
<li class="text-gray-200">Courses</li>
</ol>
</nav>
<h1 class="text-5xl md:text-6xl font-bold mb-4">Our Courses</h1>
<p class="text-xl text-gray-100 max-w-2xl mx-auto">Explore our wide range of courses designed for your success</p>
</div>
</section>

<!-- Courses Grid -->
<section class="py-20 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
@if($courses->count() > 0)
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
@foreach($courses as $course)
<div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
<div class="relative overflow-hidden h-64">
@if($course->image)
<img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
@else
<img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=400" alt="{{ $course->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
@endif
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
</div>
<div class="p-6">
<h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors duration-300">{{ $course->title }}</h3>
<p class="text-gray-600 mb-4 line-clamp-3">{{ Str::limit($course->short_description, 120) }}</p>
<a href="/courses/{{ $course->slug }}" class="inline-flex items-center text-purple-600 font-semibold group-hover:text-purple-700">
View Details <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-300"></i>
</a>
</div>
</div>
@endforeach
</div>
@else
<div class="text-center py-20">
<div class="w-32 h-32 gradient-primary rounded-full flex items-center justify-center mx-auto mb-6">
<i class="fas fa-book-open text-white text-5xl"></i>
</div>
<h3 class="text-2xl font-bold text-gray-900 mb-3">No Courses Available</h3>
<p class="text-gray-600 mb-6">We're currently updating our course catalog. Please check back soon!</p>
<a href="/contact" class="inline-flex items-center px-6 py-3 gradient-accent text-white rounded-xl font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
Contact Us
</a>
</div>
@endif
</div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-gradient-to-br from-purple-50 to-pink-50">
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Can't Find What You're Looking For?</h2>
<p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">Contact our expert counselors for personalized course recommendations</p>
<a href="/contact" class="inline-flex items-center px-8 py-4 gradient-accent text-white rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
Get Free Consultation <i class="fas fa-arrow-right ml-2"></i>
</a>
</div>
</section>
@endsection