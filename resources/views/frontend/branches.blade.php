@extends('layout.frontend.master')
@section('title', 'Our Branches')

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
<li class="text-gray-200">Branches</li>
</ol>
</nav>
<h1 class="text-5xl md:text-6xl font-bold mb-4">Our Branches</h1>
<p class="text-xl text-gray-100 max-w-2xl mx-auto">Visit us at our convenient locations</p>
</div>
</section>

<!-- Branches Grid -->
<section class="py-20 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
@if($branches->count() > 0)
<div class="grid md:grid-cols-2 gap-8">
@foreach($branches as $branch)
<div class="bg-white rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 overflow-hidden">
<div class="p-8">
<div class="flex items-start gap-4 mb-6">
<div class="w-16 h-16 gradient-primary rounded-xl flex items-center justify-center flex-shrink-0">
<i class="fas fa-building text-white text-2xl"></i>
</div>
<div>
<h3 class="text-2xl font-bold text-gray-900 mb-2">{{ $branch->title }}</h3>
@if($branch->short_description)
<p class="text-gray-600">{{ $branch->short_description }}</p>
@endif
</div>
</div>

<div class="space-y-4 mb-6">
@if($branch->location)
<div class="flex items-start gap-4">
<div class="w-10 h-10 rounded-lg bg-purple-50 flex items-center justify-center flex-shrink-0">
<i class="fas fa-map-marker-alt text-purple-600"></i>
</div>
<div>
<p class="font-semibold text-gray-900 mb-1">Address</p>
<p class="text-gray-600">{{ $branch->location }}</p>
</div>
</div>
@endif

<div class="flex items-start gap-4">
<div class="w-10 h-10 rounded-lg bg-purple-50 flex items-center justify-center flex-shrink-0">
<i class="fas fa-phone text-purple-600"></i>
</div>
<div>
<p class="font-semibold text-gray-900 mb-1">Phone</p>
<a href="tel:{{ $branch->phone }}" class="text-purple-600 hover:text-purple-700 transition-colors duration-300">{{ $branch->phone }}</a>
</div>
</div>

<div class="flex items-start gap-4">
<div class="w-10 h-10 rounded-lg bg-purple-50 flex items-center justify-center flex-shrink-0">
<i class="fas fa-envelope text-purple-600"></i>
</div>
<div>
<p class="font-semibold text-gray-900 mb-1">Email</p>
<a href="mailto:{{ $branch->email }}" class="text-purple-600 hover:text-purple-700 transition-colors duration-300">{{ $branch->email }}</a>
</div>
</div>
</div>

@if($branch->description)
<p class="text-gray-600 mb-6">{{ Str::limit($branch->description, 200) }}</p>
@endif

@if($branch->map)
<div class="mb-6 rounded-xl overflow-hidden">
<div class="aspect-video">
{!! $branch->map !!}
</div>
</div>
@endif

<a href="/contact" class="inline-flex items-center px-6 py-3 gradient-primary text-white rounded-xl font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
Contact This Branch <i class="fas fa-arrow-right ml-2"></i>
</a>
</div>
</div>
@endforeach
</div>
@else
<div class="text-center py-20">
<div class="w-32 h-32 gradient-primary rounded-full flex items-center justify-center mx-auto mb-6">
<i class="fas fa-building text-white text-5xl"></i>
</div>
<h3 class="text-2xl font-bold text-gray-900 mb-3">No Branches Available</h3>
<p class="text-gray-600 mb-6">We're currently expanding our network. Please contact us for more information.</p>
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
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Visit Us Today</h2>
<p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">Drop by any of our branches for a free consultation with our expert counselors</p>
<a href="/contact" class="inline-flex items-center px-8 py-4 gradient-accent text-white rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
Schedule a Visit <i class="fas fa-arrow-right ml-2"></i>
</a>
</div>
</section>
@endsection 