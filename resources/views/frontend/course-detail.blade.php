@extends('layout.frontend.master')
@section('title', $course->seo_title ?? $course->title)
@section('meta_description', $course->meta_description)
@section('meta_keywords', $course->meta_keywords)

@section('content')
<!-- Page Header -->
<section class="relative py-20 gradient-primary overflow-hidden">
<div class="absolute inset-0 opacity-10">
<div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
<div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
</div>
<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
<nav class="flex justify-center mb-6">
<ol class="flex items-center space-x-2 text-sm">
<li><a href="/" class="hover:text-gray-200 transition-colors duration-300">Home</a></li>
<li><i class="fas fa-chevron-right text-xs"></i></li>
<li><a href="/courses" class="hover:text-gray-200 transition-colors duration-300">Courses</a></li>
<li><i class="fas fa-chevron-right text-xs"></i></li>
<li class="text-gray-200">{{ $course->title }}</li>
</ol>
</nav>
<h1 class="text-4xl md:text-5xl font-bold text-center">{{ $course->title }}</h1>
</div>
</section>

<!-- Course Detail -->
<section class="py-20 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid lg:grid-cols-3 gap-12">
<!-- Main Content -->
<div class="lg:col-span-2">
@if($course->image)
<img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" class="w-full rounded-3xl shadow-2xl mb-8">
@endif

@if($course->short_description)
<div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-2xl p-6 mb-8 border-l-4 border-purple-600">
<div class="flex items-start gap-4">
<div class="w-12 h-12 gradient-primary rounded-xl flex items-center justify-center flex-shrink-0">
<i class="fas fa-info-circle text-white text-xl"></i>
</div>
<p class="text-lg text-gray-700 leading-relaxed">{{ $course->short_description }}</p>
</div>
</div>
@endif

<div class="mb-8">
<h2 class="text-3xl font-bold text-gray-900 mb-6">Course Overview</h2>
<div class="prose prose-lg max-w-none text-gray-600 leading-relaxed">
{!! nl2br(e($course->description)) !!}
</div>
</div>

<!-- CTA Box -->
<div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8">
<h3 class="text-2xl font-bold text-gray-900 mb-4">Interested in This Course?</h3>
<p class="text-gray-600 mb-6">Get in touch with our counselors for detailed information and enrollment process.</p>
<a href="/contact" class="inline-flex items-center px-8 py-4 gradient-primary text-white rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
Contact Us Now <i class="fas fa-arrow-right ml-2"></i>
</a>
</div>
</div>

<!-- Sidebar -->
<div class="lg:col-span-1">
<!-- Quick Inquiry Form -->
<div class="bg-white rounded-2xl shadow-xl p-8 mb-8 sticky top-24">
<h3 class="text-2xl font-bold text-gray-900 mb-6">Quick Inquiry</h3>
<form action="{{ route('contact.store') }}" method="POST">
@csrf
<input type="hidden" name="course" value="{{ $course->title }}">
<div class="space-y-4">
<input type="text" name="name" placeholder="Your Name *" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300" required>
<input type="email" name="email" placeholder="Your Email *" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300" required>
<input type="tel" name="phone" placeholder="Phone Number *" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300" required>
<input type="text" name="city" placeholder="Your City *" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300" required>
<textarea name="message" rows="4" placeholder="Your Message *" class="w-full px-4 py-3 rounded-xl border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300" required></textarea>
<button type="submit" class="w-full px-6 py-4 gradient-accent text-white rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
<i class="fas fa-paper-plane mr-2"></i>Submit Inquiry
</button>
</div>
</form>
</div>

<!-- Related Courses -->
@if($relatedCourses->count() > 0)
<div class="bg-white rounded-2xl shadow-xl p-8">
<h3 class="text-2xl font-bold text-gray-900 mb-6">Related Courses</h3>
<div class="space-y-6">
@foreach($relatedCourses as $related)
<div class="group">
<h4 class="font-bold text-gray-900 mb-2 group-hover:text-purple-600 transition-colors duration-300">{{ $related->title }}</h4>
<p class="text-gray-600 text-sm mb-3">{{ Str::limit($related->short_description, 80) }}</p>
<a href="/courses/{{ $related->slug }}" class="inline-flex items-center text-purple-600 font-semibold text-sm group-hover:text-purple-700">
View Details <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-300"></i>
</a>
</div>
@if(!$loop->last)
<hr class="border-gray-200">
@endif
@endforeach
</div>
</div>
@endif
</div>
</div>
</div>
</section>
@endsection