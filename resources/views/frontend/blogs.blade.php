@extends('layout.frontend.master')
@section('title', 'Our Blogs')

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
<li class="text-gray-200">Blogs</li>
</ol>
</nav>
<h1 class="text-5xl md:text-6xl font-bold mb-4">Latest Blogs & News</h1>
<p class="text-xl text-gray-100 max-w-2xl mx-auto">Stay updated with the latest education news and insights</p>
</div>
</section>

<!-- Blogs Grid -->
<section class="py-20 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
@if($blogs->count() > 0)
<div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
@foreach($blogs as $blog)
<div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
<div class="relative h-56 overflow-hidden">
@if($blog->image)
<img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
@else
<img src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=400" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
@endif
</div>
<div class="p-6">
<div class="flex items-center gap-4 text-sm text-gray-500 mb-3">
<span><i class="fas fa-calendar mr-2"></i>{{ $blog->created_at->format('M d, Y') }}</span>
<span><i class="fas fa-eye mr-2"></i>{{ $blog->views ?? 0 }} views</span>
</div>
<h3 class="text-xl font-bold text-gray-900 mb-3 group-hover:text-purple-600 transition-colors duration-300 line-clamp-2">{{ $blog->title }}</h3>
<p class="text-gray-600 mb-4 line-clamp-2">{{ Str::limit($blog->short_description, 120) }}</p>
<a href="/blogs/{{ $blog->slug }}" class="inline-flex items-center text-purple-600 font-semibold group-hover:text-purple-700">
Read More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-300"></i>
</a>
</div>
</div>
@endforeach
</div>

<!-- Pagination -->
<div class="flex justify-center mt-12">
{{ $blogs->links('pagination::bootstrap-5') }}
</div>
@else
<div class="text-center py-20">
<div class="w-32 h-32 gradient-primary rounded-full flex items-center justify-center mx-auto mb-6">
<i class="fas fa-newspaper text-white text-5xl"></i>
</div>
<h3 class="text-2xl font-bold text-gray-900 mb-3">No Blogs Available</h3>
<p class="text-gray-600 mb-6">We're currently working on new content. Please check back soon!</p>
<a href="/contact" class="inline-flex items-center px-6 py-3 gradient-accent text-white rounded-xl font-semibold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
Contact Us
</a>
</div>
@endif
</div>
</section>

<!-- Newsletter Section -->
<section class="py-20 bg-gradient-to-br from-purple-50 to-pink-50">
<div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
<div class="inline-block px-4 py-2 bg-purple-100 text-purple-600 rounded-full text-sm font-semibold mb-6">
<i class="fas fa-envelope mr-2"></i>Newsletter
</div>
<h2 class="text-4xl md:text-5xl font-bold text-gray-900 mb-6">Stay Updated</h2>
<p class="text-xl text-gray-600 mb-8 max-w-2xl mx-auto">Subscribe to our newsletter for latest updates on education and study abroad</p>
<form class="flex flex-col sm:flex-row gap-4 max-w-xl mx-auto">
<input type="email" placeholder="Enter your email" class="flex-1 px-6 py-4 rounded-xl border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300">
<button type="submit" class="px-8 py-4 gradient-accent text-white rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 whitespace-nowrap">
Subscribe
</button>
</form>
</div>
</section>
@endsection