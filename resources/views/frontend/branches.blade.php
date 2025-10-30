@extends('layout.frontend.master')
@section('title', 'Our Branches')

@section('content')
<!-- Page Header -->
<section class="relative py-16 gradient-primary overflow-hidden">
<div class="absolute inset-0 opacity-10">
<div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
<div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
</div>
<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
<nav class="flex justify-center mb-4">
<ol class="flex items-center space-x-2 text-sm">
<li><a href="/" class="hover:text-gray-200 transition-colors duration-300">Home</a></li>
<li><i class="fas fa-chevron-right text-xs"></i></li>
<li class="text-gray-200">Branches</li>
</ol>
</nav>
<h1 class="text-4xl md:text-5xl font-bold mb-3">Our Branches</h1>
<p class="text-lg text-gray-100 max-w-2xl mx-auto">Visit us at our convenient locations</p>
</div>
</section>

<!-- Branches Grid -->
<section class="py-16 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
@if($branches->count() > 0)
<div class="grid md:grid-cols-2 gap-6">
@foreach($branches as $branch)
<div class="bg-white rounded-xl shadow-lg hover:shadow-xl transition-all duration-300 overflow-hidden">
<div class="p-6">
<div class="flex items-start gap-3 mb-4">
<div class="w-12 h-12 gradient-primary rounded-lg flex items-center justify-center flex-shrink-0">
<i class="fas fa-building text-white text-xl"></i>
</div>
<div>
<h3 class="text-xl font-bold text-gray-900 mb-1">{{ $branch->title }}</h3>
@if($branch->short_description)
<p class="text-gray-600 text-sm">{{ $branch->short_description }}</p>
@endif
</div>
</div>

<div class="space-y-3 mb-4">
@if($branch->location)
<div class="flex items-start gap-3">
<div class="w-8 h-8 rounded-lg bg-purple-50 flex items-center justify-center flex-shrink-0">
<i class="fas fa-map-marker-alt text-purple-600 text-sm"></i>
</div>
<div>
<p class="font-semibold text-gray-900 text-sm mb-0.5">Address</p>
<p class="text-gray-600 text-sm">{{ $branch->location }}</p>
</div>
</div>
@endif

<div class="flex items-start gap-3">
<div class="w-8 h-8 rounded-lg bg-purple-50 flex items-center justify-center flex-shrink-0">
<i class="fas fa-phone text-purple-600 text-sm"></i>
</div>
<div>
<p class="font-semibold text-gray-900 text-sm mb-0.5">Phone</p>
<a href="tel:{{ $branch->phone }}" class="text-purple-600 hover:text-purple-700 transition-colors duration-300 text-sm">{{ $branch->phone }}</a>
</div>
</div>

<div class="flex items-start gap-3">
<div class="w-8 h-8 rounded-lg bg-purple-50 flex items-center justify-center flex-shrink-0">
<i class="fas fa-envelope text-purple-600 text-sm"></i>
</div>
<div>
<p class="font-semibold text-gray-900 text-sm mb-0.5">Email</p>
<a href="mailto:{{ $branch->email }}" class="text-purple-600 hover:text-purple-700 transition-colors duration-300 text-sm">{{ $branch->email }}</a>
</div>
</div>
</div>

@if($branch->description)
<p class="text-gray-600 text-sm mb-4">{{ Str::limit($branch->description, 150) }}</p>
@endif

@if($branch->map)
<div class="mb-4 rounded-lg overflow-hidden">
<div class="h-48">
{!! $branch->map !!}
</div>
</div>
@endif

<a href="/contact" class="inline-flex items-center px-5 py-2.5 gradient-primary text-white rounded-lg font-semibold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 text-sm">
Contact This Branch <i class="fas fa-arrow-right ml-2 text-xs"></i>
</a>
</div>
</div>
@endforeach
</div>
@else
<div class="text-center py-16">
<div class="w-24 h-24 gradient-primary rounded-full flex items-center justify-center mx-auto mb-4">
<i class="fas fa-building text-white text-4xl"></i>
</div>
<h3 class="text-2xl font-bold text-gray-900 mb-2">No Branches Available</h3>
<p class="text-gray-600 mb-4">We're currently expanding our network. Please contact us for more information.</p>
<a href="/contact" class="inline-flex items-center px-6 py-3 gradient-accent text-white rounded-xl font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
Contact Us
</a>
</div>
@endif
</div>
</section>

<!-- CTA Section -->
<section class="py-16 bg-gradient-to-br from-purple-50 to-pink-50">
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
<h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Visit Us Today</h2>
<p class="text-lg text-gray-600 mb-6 max-w-2xl mx-auto">Drop by any of our branches for a free consultation with our expert counselors</p>
<a href="/contact" class="inline-flex items-center px-8 py-4 gradient-accent text-white rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
Schedule a Visit <i class="fas fa-arrow-right ml-2"></i>
</a>
</div>
</section>
@endsection