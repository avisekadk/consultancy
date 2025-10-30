@extends('layout.frontend.master')
@section('title', $blog->seo_title ?? $blog->title)
@section('meta_description', $blog->meta_description)
@section('meta_keywords', $blog->meta_keywords)

@section('content')
<!-- Page Header -->
<section class="relative py-16 gradient-primary overflow-hidden">
<div class="absolute inset-0 opacity-10">
<div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
<div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
</div>
<div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
<nav class="flex justify-center mb-4">
<ol class="flex items-center space-x-2 text-sm">
<li><a href="/" class="hover:text-gray-200 transition-colors duration-300">Home</a></li>
<li><i class="fas fa-chevron-right text-xs"></i></li>
<li><a href="/blogs" class="hover:text-gray-200 transition-colors duration-300">Blogs</a></li>
<li><i class="fas fa-chevron-right text-xs"></i></li>
<li class="text-gray-200">Article</li>
</ol>
</nav>
<h1 class="text-3xl md:text-4xl font-bold mb-4 text-center">{{ $blog->title }}</h1>
<div class="flex items-center justify-center gap-6 text-sm">
<span><i class="fas fa-calendar mr-2"></i>{{ $blog->created_at->format('M d, Y') }}</span>
<span><i class="fas fa-eye mr-2"></i>{{ $blog->views }} views</span>
</div>
</div>
</section>

<!-- Blog Content -->
<section class="py-16 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid lg:grid-cols-3 gap-8">
<!-- Main Content -->
<div class="lg:col-span-2">
@if($blog->image)
<img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-[400px] object-cover rounded-2xl shadow-lg mb-6">
@endif

@if($blog->short_description)
<div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-5 mb-6 border-l-4 border-purple-600">
<p class="text-base text-gray-700 leading-relaxed font-semibold">{{ $blog->short_description }}</p>
</div>
@endif

<div class="prose prose-base max-w-none text-gray-600 leading-relaxed mb-6">
{!! nl2br(e($blog->description)) !!}
</div>

@if($blog->featured_image_1)
<div class="mb-6">
<img src="{{ asset('storage/' . $blog->featured_image_1) }}" alt="{{ $blog->title }}" class="w-full h-[350px] object-cover rounded-xl shadow-md">
</div>
@endif

@if($blog->featured_image_2)
<div class="mb-6">
<img src="{{ asset('storage/' . $blog->featured_image_2) }}" alt="{{ $blog->title }}" class="w-full h-[350px] object-cover rounded-xl shadow-md">
</div>
@endif

<!-- Share Section -->
<div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-5">
<h3 class="text-lg font-bold text-gray-900 mb-3">Share this article</h3>
<div class="flex flex-wrap gap-2">
<a href="#" class="w-10 h-10 rounded-lg bg-blue-600 hover:bg-blue-700 text-white flex items-center justify-center transition-all duration-300 transform hover:-translate-y-0.5">
<i class="fab fa-facebook-f text-sm"></i>
</a>
<a href="#" class="w-10 h-10 rounded-lg bg-sky-500 hover:bg-sky-600 text-white flex items-center justify-center transition-all duration-300 transform hover:-translate-y-0.5">
<i class="fab fa-twitter text-sm"></i>
</a>
<a href="#" class="w-10 h-10 rounded-lg bg-green-600 hover:bg-green-700 text-white flex items-center justify-center transition-all duration-300 transform hover:-translate-y-0.5">
<i class="fab fa-whatsapp text-sm"></i>
</a>
<a href="#" class="w-10 h-10 rounded-lg bg-red-600 hover:bg-red-700 text-white flex items-center justify-center transition-all duration-300 transform hover:-translate-y-0.5">
<i class="fab fa-pinterest text-sm"></i>
</a>
<a href="#" class="w-10 h-10 rounded-lg bg-blue-500 hover:bg-blue-600 text-white flex items-center justify-center transition-all duration-300 transform hover:-translate-y-0.5">
<i class="fab fa-linkedin-in text-sm"></i>
</a>
</div>
</div>
</div>

<!-- Sidebar -->
<div class="lg:col-span-1">
<!-- Recent Posts -->
@if($recentBlogs->count() > 0)
<div class="bg-white rounded-xl shadow-lg p-6 mb-6 sticky top-24">
<h3 class="text-xl font-bold text-gray-900 mb-4">Recent Posts</h3>
<div class="space-y-4">
@foreach($recentBlogs as $recent)
<div class="group">
<h4 class="font-semibold text-gray-900 mb-1 group-hover:text-purple-600 transition-colors duration-300 line-clamp-2 text-sm">
<a href="/blogs/{{ $recent->slug }}">{{ $recent->title }}</a>
</h4>
<p class="text-xs text-gray-500">
<i class="fas fa-calendar mr-1"></i>{{ $recent->created_at->format('M d, Y') }}
</p>
</div>
@if(!$loop->last)
<hr class="border-gray-200">
@endif
@endforeach
</div>
</div>
@endif

<!-- CTA Card -->
<div class="bg-white rounded-xl shadow-lg overflow-hidden">
<div class="gradient-primary p-6 text-white text-center">
<div class="w-14 h-14 bg-white bg-opacity-20 backdrop-blur-sm rounded-lg flex items-center justify-center mx-auto mb-3">
<i class="fas fa-graduation-cap text-2xl"></i>
</div>
<h3 class="text-xl font-bold mb-2">Ready to Start Your Journey?</h3>
<p class="mb-4 text-gray-100 text-sm">Get expert guidance from our counselors</p>
<a href="/contact" class="inline-flex items-center px-5 py-2.5 bg-white text-purple-600 rounded-lg font-bold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 text-sm">
Contact Us <i class="fas fa-arrow-right ml-2 text-xs"></i>
</a>
</div>
</div>
</div>
</div>
</div>
</section>
@endsection