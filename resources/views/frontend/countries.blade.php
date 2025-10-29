@extends('layout.frontend.master')
@section('title', 'Study Abroad Destinations')

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
<li class="text-gray-200">Countries</li>
</ol>
</nav>
<h1 class="text-5xl md:text-6xl font-bold mb-4">Study Abroad Destinations</h1>
<p class="text-xl text-gray-100 max-w-2xl mx-auto">Choose from top study destinations around the world</p>
</div>
</section>

<!-- Countries Grid -->
<section class="py-20 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
@if($countries->count() > 0)
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
@foreach($countries as $country)
<div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
<div class="relative h-96">
@if($country->image)
<img src="{{ asset('storage/' . $country->image) }}" alt="{{ $country->title }} image" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500 image">
@else
<img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=400" alt="{{ $country->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
@endif
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
<div class="absolute bottom-0 left-0 right-0 p-6 text-white">
<h3 class="text-2xl font-bold mb-2">{{ $country->title }}</h3>
<p class="text-gray-200 mb-4 line-clamp-2">{{ Str::limit($country->short_description, 120) }}</p>
<a href="/countries/{{ $country->slug }}" class="inline-flex items-center px-6 py-3 bg-white text-purple-600 rounded-lg font-semibold hover:bg-purple-600 hover:text-white transition-all duration-300">
Explore <i class="fas fa-arrow-right ml-2"></i>
</a>
</div>
</div>
</div>
@endforeach
</div>
@else
<div class="text-center py-20">
<div class="w-32 h-32 gradient-primary rounded-full flex items-center justify-center mx-auto mb-6">
<i class="fas fa-globe text-white text-5xl"></i>
</div>
<h3 class="text-2xl font-bold text-gray-900 mb-3">No Destinations Available</h3>
<p class="text-gray-600 mb-6">We're currently updating our study destinations. Please check back soon!</p>
<a href="/contact" class="inline-flex items-center px-6 py-3 gradient-accent text-white rounded-xl font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
Contact Us
</a>
</div>
@endif
</div>
</section>

<!-- Benefits Section -->
<section class="py-20 bg-gradient-to-br from-purple-50 to-pink-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-16">
<div class="inline-block px-4 py-2 bg-purple-100 text-purple-600 rounded-full text-sm font-semibold mb-4">
<i class="fas fa-star mr-2"></i>Benefits
</div>
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-4">Why Study Abroad?</h2>
<p class="text-xl text-gray-600 max-w-2xl mx-auto">Transform your future with global education</p>
</div>

<div class="grid md:grid-cols-2 lg:grid-cols-4 gap-8">
<div class="text-center group">
<div class="w-20 h-20 gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
<i class="fas fa-globe-americas text-white text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-900 mb-3">Global Exposure</h3>
<p class="text-gray-600">Experience diverse cultures and perspectives</p>
</div>
<div class="text-center group">
<div class="w-20 h-20 gradient-accent rounded-2xl flex items-center justify-center mx-auto mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
<i class="fas fa-university text-white text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-900 mb-3">World-Class Education</h3>
<p class="text-gray-600">Study at top-ranked universities</p>
</div>
<div class="text-center group">
<div class="w-20 h-20 gradient-success rounded-2xl flex items-center justify-center mx-auto mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
<i class="fas fa-briefcase text-white text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-900 mb-3">Career Opportunities</h3>
<p class="text-gray-600">Access to international job markets</p>
</div>
<div class="text-center group">
<div class="w-20 h-20 gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
<i class="fas fa-user-graduate text-white text-3xl"></i>
</div>
<h3 class="text-xl font-bold text-gray-900 mb-3">Personal Growth</h3>
<p class="text-gray-600">Develop independence and confidence</p>
</div>
</div>
</div>
</section>

<!-- CTA Section -->
<section class="py-20 bg-white">
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Ready to Study Abroad?</h2>
<p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">Let our experts guide you to the perfect destination for your educational goals</p>
<a href="/contact" class="inline-flex items-center px-8 py-4 gradient-accent text-white rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
Get Free Counseling <i class="fas fa-arrow-right ml-2"></i>
</a>
</div>
</section>
@endsection