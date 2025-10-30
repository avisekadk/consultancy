@extends('layout.frontend.master')
@section('title', $course->seo_title ?? $course->title)
@section('meta_description', $course->meta_description)
@section('meta_keywords', $course->meta_keywords)

@section('content')
<!-- Page Header -->
<section class="relative py-16 gradient-primary overflow-hidden">
<div class="absolute inset-0 opacity-10">
<div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
<div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
</div>
<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-white">
<nav class="flex justify-center mb-4">
<ol class="flex items-center space-x-2 text-sm">
<li><a href="/" class="hover:text-gray-200 transition-colors duration-300">Home</a></li>
<li><i class="fas fa-chevron-right text-xs"></i></li>
<li><a href="/courses" class="hover:text-gray-200 transition-colors duration-300">Courses</a></li>
<li><i class="fas fa-chevron-right text-xs"></i></li>
<li class="text-gray-200">{{ $course->title }}</li>
</ol>
</nav>
<h1 class="text-3xl md:text-4xl font-bold text-center">{{ $course->title }}</h1>
</div>
</section>

<!-- Course Detail -->
<section class="py-16 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid lg:grid-cols-3 gap-8">
<!-- Main Content -->
<div class="lg:col-span-2">
@if($course->image)
<img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" class="w-full h-[400px] object-cover rounded-2xl shadow-lg mb-6">
@endif

@if($course->short_description)
<div class="bg-gradient-to-r from-purple-50 to-pink-50 rounded-xl p-5 mb-6 border-l-4 border-purple-600">
<div class="flex items-start gap-3">
<div class="w-10 h-10 gradient-primary rounded-lg flex items-center justify-center flex-shrink-0">
<i class="fas fa-info-circle text-white"></i>
</div>
<p class="text-base text-gray-700 leading-relaxed">{{ $course->short_description }}</p>
</div>
</div>
@endif

<div class="mb-6">
<h2 class="text-2xl font-bold text-gray-900 mb-4">Course Overview</h2>
<div class="prose prose-base max-w-none text-gray-600 leading-relaxed">
{!! nl2br(e($course->description)) !!}
</div>
</div>

<!-- CTA Box -->
<div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-xl p-6">
<h3 class="text-xl font-bold text-gray-900 mb-3">Interested in This Course?</h3>
<p class="text-gray-600 mb-4 text-sm">Get in touch with our counselors for detailed information and enrollment process.</p>
<a href="/contact" class="inline-flex items-center px-6 py-3 gradient-primary text-white rounded-lg font-bold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 text-sm">
Contact Us Now <i class="fas fa-arrow-right ml-2 text-xs"></i>
</a>
</div>
</div>

<!-- Sidebar -->
<div class="lg:col-span-1">
<!-- Quick Inquiry Form -->
<div class="bg-white rounded-xl shadow-lg p-6 mb-6 sticky top-24">
<h3 class="text-xl font-bold text-gray-900 mb-4">Quick Inquiry</h3>
<form action="{{ route('contact.store') }}" method="POST">
@csrf
<input type="hidden" name="course" value="{{ $course->title }}">
<div class="space-y-3">
<input type="text" name="name" placeholder="Your Name *" class="w-full px-4 py-2.5 text-sm rounded-lg border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300" required>
<input type="email" name="email" placeholder="Your Email *" class="w-full px-4 py-2.5 text-sm rounded-lg border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300" required>
<input type="tel" name="phone" placeholder="Phone Number *" class="w-full px-4 py-2.5 text-sm rounded-lg border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300" required>
<input type="text" name="city" placeholder="Your City *" class="w-full px-4 py-2.5 text-sm rounded-lg border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300" required>
<textarea name="message" rows="3" placeholder="Your Message *" class="w-full px-4 py-2.5 text-sm rounded-lg border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300" required></textarea>
<button type="submit" class="w-full px-5 py-3 gradient-accent text-white rounded-lg font-bold hover:shadow-lg transform hover:-translate-y-0.5 transition-all duration-300 text-sm">
<i class="fas fa-paper-plane mr-2"></i>Submit Inquiry
</button>
</div>
</form>
</div>

<!-- Related Courses -->
@if($relatedCourses->count() > 0)
<div class="bg-white rounded-xl shadow-lg p-6">
<h3 class="text-xl font-bold text-gray-900 mb-4">Related Courses</h3>
<div class="space-y-4">
@foreach($relatedCourses as $related)
<div class="group">
<h4 class="font-semibold text-gray-900 mb-1 group-hover:text-purple-600 transition-colors duration-300 text-sm">{{ $related->title }}</h4>
<p class="text-gray-600 text-xs mb-2">{{ Str::limit($related->short_description, 70) }}</p>
<a href="/courses/{{ $related->slug }}" class="inline-flex items-center text-purple-600 font-semibold text-xs group-hover:text-purple-700">
View Details <i class="fas fa-arrow-right ml-1 text-xs group-hover:translate-x-1 transition-transform duration-300"></i>
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