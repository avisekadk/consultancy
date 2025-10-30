@extends('layout.frontend.master')
@section('title', 'Home - Educational Consultancy')

@section('content')
<!-- Hero Section -->
<section class="relative min-h-screen flex items-center overflow-hidden">
<div class="absolute inset-0 gradient-primary opacity-95"></div>
<div class="absolute inset-0 overflow-hidden">
<div class="absolute -top-10 -left-20 w-40 h-40 md:w-72 md:h-72 bg-purple-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob"></div>
<div class="absolute top-20 -right-20 w-40 h-40 md:w-72 md:h-72 bg-pink-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-2000"></div>
<div class="absolute bottom-10 left-1/4 w-40 h-40 md:w-72 md:h-72 bg-blue-300 rounded-full mix-blend-multiply filter blur-3xl opacity-20 animate-blob animation-delay-4000"></div>
</div>
<div class="relative w-full mx-auto px-4 sm:px-6 lg:px-8 py-12 md:py-20">
<div class="max-w-7xl mx-auto">
<div class="grid lg:grid-cols-2 gap-8 md:gap-12 items-center">
<div class="text-white space-y-4 md:space-y-8">
<div class="inline-block px-3 py-1.5 md:px-4 md:py-2 bg-white bg-opacity-20 rounded-full text-xs md:text-sm font-semibold backdrop-blur-sm">
<i class="fas fa-star text-yellow-300 mr-1 md:mr-2"></i>98% Success Rate
</div>
<h1 class="text-3xl sm:text-4xl md:text-5xl lg:text-6xl xl:text-7xl font-bold leading-tight">Your Gateway to <span class="text-transparent bg-clip-text bg-gradient-to-r from-yellow-200 to-pink-300 block sm:inline">Global Education</span></h1>
<p class="text-sm sm:text-base md:text-lg lg:text-xl text-gray-100 leading-relaxed">Expert guidance for students aspiring to study abroad. Transform your dreams into reality with our professional consultancy services.</p>
<div class="flex flex-col sm:flex-row gap-3 md:gap-4">
<a href="/courses" class="px-6 md:px-8 py-3 md:py-4 bg-white text-purple-600 rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 text-center text-sm md:text-base">
<i class="fas fa-book-open mr-2"></i>Explore Courses
</a>
<a href="/contact" class="px-6 md:px-8 py-3 md:py-4 bg-transparent border-2 border-white text-white rounded-xl font-bold hover:bg-white hover:text-purple-600 transition-all duration-300 text-center text-sm md:text-base">
<i class="fas fa-phone mr-2"></i>Free Consultation
</a>
</div>
<div class="grid grid-cols-3 gap-3 md:gap-6 pt-4 md:pt-8">
<div class="text-center">
<div class="text-2xl sm:text-3xl md:text-4xl font-bold mb-1">5000+</div>
<div class="text-xs md:text-sm text-gray-200">Students</div>
</div>
<div class="text-center">
<div class="text-2xl sm:text-3xl md:text-4xl font-bold mb-1">25+</div>
<div class="text-xs md:text-sm text-gray-200">Countries</div>
</div>
<div class="text-center">
<div class="text-2xl sm:text-3xl md:text-4xl font-bold mb-1">500+</div>
<div class="text-xs md:text-sm text-gray-200">Universities</div>
</div>
</div>
</div>
<div class="hidden lg:block">
<div class="relative">
<img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=800" alt="Students" class="rounded-3xl shadow-2xl transform hover:scale-105 transition-transform duration-500 w-full">
<div class="absolute -bottom-4 -left-4 xl:-bottom-6 xl:-left-6 w-36 h-36 xl:w-48 xl:h-48 glass-effect rounded-2xl p-4 xl:p-6 text-white">
<i class="fas fa-award text-4xl xl:text-5xl text-yellow-300 mb-2 xl:mb-3"></i>
<div class="text-xl xl:text-2xl font-bold">98%</div>
<div class="text-xs xl:text-sm">Visa Success</div>
</div>
</div>
</div>
</div>
</div>
</div>
<div class="absolute bottom-10 left-1/2 transform -translate-x-1/2 text-white animate-bounce hidden md:block">
<i class="fas fa-chevron-down text-2xl md:text-3xl"></i>
</div>
</section>

<!-- Stats Section -->
<section class="py-12 md:py-20 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
<div class="text-center group">
<div class="w-16 h-16 md:w-20 md:h-20 gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-3 md:mb-4 transform group-hover:scale-110 transition-transform duration-300">
<i class="fas fa-users text-white text-2xl md:text-3xl"></i>
</div>
<h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-1 md:mb-2">5000+</h3>
<p class="text-xs md:text-sm lg:text-base text-gray-600 font-medium">Students Counseled</p>
</div>
<div class="text-center group">
<div class="w-16 h-16 md:w-20 md:h-20 gradient-accent rounded-2xl flex items-center justify-center mx-auto mb-3 md:mb-4 transform group-hover:scale-110 transition-transform duration-300">
<i class="fas fa-graduation-cap text-white text-2xl md:text-3xl"></i>
</div>
<h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-1 md:mb-2">98%</h3>
<p class="text-xs md:text-sm lg:text-base text-gray-600 font-medium">Success Rate</p>
</div>
<div class="text-center group">
<div class="w-16 h-16 md:w-20 md:h-20 gradient-success rounded-2xl flex items-center justify-center mx-auto mb-3 md:mb-4 transform group-hover:scale-110 transition-transform duration-300">
<i class="fas fa-globe text-white text-2xl md:text-3xl"></i>
</div>
<h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-1 md:mb-2">25+</h3>
<p class="text-xs md:text-sm lg:text-base text-gray-600 font-medium">Countries</p>
</div>
<div class="text-center group">
<div class="w-16 h-16 md:w-20 md:h-20 gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-3 md:mb-4 transform group-hover:scale-110 transition-transform duration-300">
<i class="fas fa-university text-white text-2xl md:text-3xl"></i>
</div>
<h3 class="text-2xl md:text-3xl lg:text-4xl font-bold text-gray-900 mb-1 md:mb-2">500+</h3>
<p class="text-xs md:text-sm lg:text-base text-gray-600 font-medium">Partner Universities</p>
</div>
</div>
</div>
</section>

<!-- About Section -->
@if(isset($aboutPage))
<section class="py-12 md:py-20 bg-gradient-to-br from-purple-50 to-pink-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="grid lg:grid-cols-2 gap-8 md:gap-12 items-center">
<div class="order-2 lg:order-1">
<div class="inline-block px-3 py-1.5 md:px-4 md:py-2 bg-purple-100 text-purple-600 rounded-full text-xs md:text-sm font-semibold mb-4 md:mb-6">
<i class="fas fa-info-circle mr-2"></i>About Us
</div>
<h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-4 md:mb-6">{{ $aboutPage->title }}</h2>
<p class="text-base md:text-lg lg:text-xl text-gray-600 mb-4 md:mb-6 leading-relaxed">{{ $aboutPage->short_description }}</p>
<p class="text-sm md:text-base text-gray-600 mb-6 md:mb-8 leading-relaxed">{{ Str::limit($aboutPage->description, 300) }}</p>
<a href="/about" class="inline-flex items-center px-6 md:px-8 py-3 md:py-4 gradient-primary text-white rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 text-sm md:text-base">
Learn More <i class="fas fa-arrow-right ml-2"></i>
</a>
</div>
<div class="order-1 lg:order-2">
<div class="relative">
<img src="{{ $aboutPage->image_1 ?? 'https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800' }}" alt="About Us" class="rounded-2xl md:rounded-3xl shadow-2xl w-full">
<div class="absolute -bottom-4 -right-4 md:-bottom-6 md:-right-6 w-24 h-24 md:w-32 md:h-32 gradient-accent rounded-2xl"></div>
<div class="absolute -top-4 -left-4 md:-top-6 md:-left-6 w-24 h-24 md:w-32 md:h-32 gradient-success rounded-2xl"></div>
</div>
</div>
</div>
</div>
</section>
@endif

<!-- Courses Section -->
<section class="py-12 md:py-20 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-8 md:mb-16">
<div class="inline-block px-3 py-1.5 md:px-4 md:py-2 bg-purple-100 text-purple-600 rounded-full text-xs md:text-sm font-semibold mb-3 md:mb-4">
<i class="fas fa-book-open mr-2"></i>Our Courses
</div>
<h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 md:mb-4">Popular Courses</h2>
<p class="text-sm md:text-base lg:text-xl text-gray-600 max-w-2xl mx-auto px-4">Explore our wide range of courses designed for your success</p>
</div>

<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
@forelse($courses as $course)
@if($course->status == 1)
<div class="group bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
<div class="relative overflow-hidden h-48 md:h-64">
@if($course->image)
<img src="{{ asset('storage/' . $course->image) }}" alt="{{ $course->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
@else
<img src="https://images.unsplash.com/photo-1456513080510-7bf3a84b82f8?w=400" alt="{{ $course->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
@endif
<div class="absolute inset-0 bg-gradient-to-t from-black/60 to-transparent"></div>
</div>
<div class="p-4 md:p-6">
<h3 class="text-lg md:text-xl font-bold text-gray-900 mb-2 md:mb-3 group-hover:text-purple-600 transition-colors duration-300 line-clamp-2">{{ $course->title }}</h3>
<p class="text-sm md:text-base text-gray-600 mb-3 md:mb-4 line-clamp-2">{{ Str::limit($course->short_description, 100) }}</p>
<a href="/courses/{{ $course->slug }}" class="inline-flex items-center text-sm md:text-base text-purple-600 font-semibold group-hover:text-purple-700">
View Details <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-300"></i>
</a>
</div>
</div>
@endif
@empty
<div class="col-span-full text-center py-12">
<i class="fas fa-book-open text-4xl md:text-6xl text-gray-300 mb-4"></i>
<p class="text-gray-500 text-base md:text-lg">No courses available at the moment.</p>
</div>
@endforelse
</div>

@if(count($courses) > 0)
<div class="text-center mt-8 md:mt-12">
<a href="/courses" class="inline-flex items-center px-6 md:px-8 py-3 md:py-4 gradient-accent text-white rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 text-sm md:text-base">
View All Courses <i class="fas fa-arrow-right ml-2"></i>
</a>
</div>
@endif
</div>
</section>

<!-- Services Section -->
<section class="py-12 md:py-20 gradient-primary relative overflow-hidden">
<div class="absolute inset-0 opacity-10 overflow-hidden">
<div class="absolute -top-20 -left-20 w-64 h-64 md:w-96 md:h-96 bg-white rounded-full blur-3xl"></div>
<div class="absolute -bottom-20 -right-20 w-64 h-64 md:w-96 md:h-96 bg-white rounded-full blur-3xl"></div>
</div>
<div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-8 md:mb-16 text-white">
<div class="inline-block px-3 py-1.5 md:px-4 md:py-2 bg-white bg-opacity-20 rounded-full text-xs md:text-sm font-semibold mb-3 md:mb-4 backdrop-blur-sm">
<i class="fas fa-concierge-bell mr-2"></i>Our Services
</div>
<h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-3 md:mb-4">Comprehensive Support</h2>
<p class="text-sm md:text-base lg:text-xl text-gray-100 max-w-2xl mx-auto px-4">Everything you need for your educational journey</p>
</div>

<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
@forelse($services->take(6) as $service)
@if($service->status == 1)
<div class="bg-white rounded-2xl p-6 md:p-8 hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
@if($service->image)
<div class="relative mb-4 md:mb-6">
<img src="{{ asset('storage/' . $service->image) }}" alt="{{ $service->title }}" class="w-full h-32 md:h-40 object-cover rounded-xl">
</div>
@else
<div class="w-14 h-14 md:w-16 md:h-16 gradient-accent rounded-xl flex items-center justify-center mb-4 md:mb-6 group-hover:scale-110 transition-transform duration-300">
<i class="fas fa-check-circle text-white text-xl md:text-2xl"></i>
</div>
@endif
<h3 class="text-lg md:text-xl font-bold text-gray-900 mb-2 md:mb-3 line-clamp-2">{{ $service->title }}</h3>
<p class="text-sm md:text-base text-gray-600 mb-4 md:mb-6 line-clamp-3">{{ Str::limit($service->short_description, 120) }}</p>
<a href="/services/{{ $service->slug }}" class="inline-flex items-center text-sm md:text-base text-purple-600 font-semibold group-hover:text-purple-700">
Learn More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-300"></i>
</a>
</div>
@endif
@empty
<div class="col-span-full text-center py-12 text-white">
<i class="fas fa-concierge-bell text-4xl md:text-6xl text-white/30 mb-4"></i>
<p class="text-base md:text-lg">No services available at the moment.</p>
</div>
@endforelse
</div>
</div>
</section>

<!-- Countries Section -->
<section class="py-12 md:py-20 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-8 md:mb-16">
<div class="inline-block px-3 py-1.5 md:px-4 md:py-2 bg-purple-100 text-purple-600 rounded-full text-xs md:text-sm font-semibold mb-3 md:mb-4">
<i class="fas fa-globe mr-2"></i>Study Destinations
</div>
<h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 md:mb-4">Top Study Destinations</h2>
<p class="text-sm md:text-base lg:text-xl text-gray-600 max-w-2xl mx-auto px-4">Choose from top study destinations around the world</p>
</div>

<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
@forelse($countries->take(6) as $country)
@if($country->status == 1)
<div class="group relative overflow-hidden rounded-2xl shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
<div class="relative h-64 md:h-80">
@if($country->image)
<img src="{{ asset('storage/' . $country->image) }}" alt="{{ $country->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
@else
<img src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?w=400" alt="{{ $country->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
@endif
<div class="absolute inset-0 bg-gradient-to-t from-black/80 via-black/40 to-transparent"></div>
<div class="absolute bottom-0 left-0 right-0 p-4 md:p-6 text-white">
<h3 class="text-xl md:text-2xl font-bold mb-2">{{ $country->title }}</h3>
<p class="text-sm md:text-base text-gray-200 mb-3 md:mb-4 line-clamp-2">{{ Str::limit($country->short_description, 100) }}</p>
<a href="/countries/{{ $country->slug }}" class="inline-flex items-center px-4 md:px-6 py-2 md:py-3 bg-white text-purple-600 rounded-lg font-semibold hover:bg-purple-600 hover:text-white transition-all duration-300 text-sm md:text-base">
Explore <i class="fas fa-arrow-right ml-2"></i>
</a>
</div>
</div>
</div>
@endif
@empty
<div class="col-span-full text-center py-12">
<i class="fas fa-globe text-4xl md:text-6xl text-gray-300 mb-4"></i>
<p class="text-gray-500 text-base md:text-lg">No countries available at the moment.</p>
</div>
@endforelse
</div>
</div>
</section>

<!-- Why Choose Us -->
<section class="py-12 md:py-20 bg-gradient-to-br from-purple-50 to-pink-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-8 md:mb-16">
<div class="inline-block px-3 py-1.5 md:px-4 md:py-2 bg-purple-100 text-purple-600 rounded-full text-xs md:text-sm font-semibold mb-3 md:mb-4">
<i class="fas fa-star mr-2"></i>Why Choose Us
</div>
<h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 md:mb-4">Your Success is Our Priority</h2>
<p class="text-sm md:text-base lg:text-xl text-gray-600 max-w-2xl mx-auto px-4">We provide end-to-end support for your educational journey</p>
</div>

<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
<div class="text-center group">
<div class="w-16 h-16 md:w-20 md:h-20 gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-4 md:mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
<i class="fas fa-user-tie text-white text-2xl md:text-3xl"></i>
</div>
<h3 class="text-base md:text-lg lg:text-xl font-bold text-gray-900 mb-2 md:mb-3">Expert Counselors</h3>
<p class="text-xs md:text-sm lg:text-base text-gray-600">Experienced professionals guiding you</p>
</div>
<div class="text-center group">
<div class="w-16 h-16 md:w-20 md:h-20 gradient-accent rounded-2xl flex items-center justify-center mx-auto mb-4 md:mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
<i class="fas fa-hand-holding-usd text-white text-2xl md:text-3xl"></i>
</div>
<h3 class="text-base md:text-lg lg:text-xl font-bold text-gray-900 mb-2 md:mb-3">Free Consultation</h3>
<p class="text-xs md:text-sm lg:text-base text-gray-600">No hidden charges, transparent</p>
</div>
<div class="text-center group">
<div class="w-16 h-16 md:w-20 md:h-20 gradient-success rounded-2xl flex items-center justify-center mx-auto mb-4 md:mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
<i class="fas fa-passport text-white text-2xl md:text-3xl"></i>
</div>
<h3 class="text-base md:text-lg lg:text-xl font-bold text-gray-900 mb-2 md:mb-3">High Visa Success</h3>
<p class="text-xs md:text-sm lg:text-base text-gray-600">98% visa approval rate</p>
</div>
<div class="text-center group">
<div class="w-16 h-16 md:w-20 md:h-20 gradient-primary rounded-2xl flex items-center justify-center mx-auto mb-4 md:mb-6 transform group-hover:scale-110 group-hover:rotate-6 transition-all duration-300">
<i class="fas fa-headset text-white text-2xl md:text-3xl"></i>
</div>
<h3 class="text-base md:text-lg lg:text-xl font-bold text-gray-900 mb-2 md:mb-3">24/7 Support</h3>
<p class="text-xs md:text-sm lg:text-base text-gray-600">Post-landing assistance included</p>
</div>
</div>
</div>
</section>

<!-- Blogs Section -->
<section class="py-12 md:py-20 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-8 md:mb-16">
<div class="inline-block px-3 py-1.5 md:px-4 md:py-2 bg-purple-100 text-purple-600 rounded-full text-xs md:text-sm font-semibold mb-3 md:mb-4">
<i class="fas fa-newspaper mr-2"></i>Latest Updates
</div>
<h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 md:mb-4">Recent Articles & News</h2>
<p class="text-sm md:text-base lg:text-xl text-gray-600 max-w-2xl mx-auto px-4">Stay informed with our latest articles and news</p>
</div>

<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
@forelse($blogs->take(3) as $blog)
@if($blog->status == 1)
<div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
<div class="relative h-48 md:h-56 overflow-hidden">
@if($blog->image)
<img src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
@else
<img src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?w=400" alt="{{ $blog->title }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
@endif
</div>
<div class="p-4 md:p-6">
<div class="flex items-center gap-3 md:gap-4 text-xs md:text-sm text-gray-500 mb-2 md:mb-3">
<span><i class="fas fa-calendar mr-1 md:mr-2"></i>{{ $blog->created_at->format('M d, Y') }}</span>
<span><i class="fas fa-eye mr-1 md:mr-2"></i>{{ $blog->views ?? 0 }} views</span>
</div>
<h3 class="text-base md:text-lg lg:text-xl font-bold text-gray-900 mb-2 md:mb-3 group-hover:text-purple-600 transition-colors duration-300 line-clamp-2">{{ $blog->title }}</h3>
<p class="text-sm md:text-base text-gray-600 mb-3 md:mb-4 line-clamp-2">{{ Str::limit($blog->short_description, 100) }}</p>
<a href="/blogs/{{ $blog->slug }}" class="inline-flex items-center text-sm md:text-base text-purple-600 font-semibold group-hover:text-purple-700">
Read More <i class="fas fa-arrow-right ml-2 group-hover:translate-x-2 transition-transform duration-300"></i>
</a>
</div>
</div>
@endif
@empty
<div class="col-span-full text-center py-12">
<i class="fas fa-newspaper text-4xl md:text-6xl text-gray-300 mb-4"></i>
<p class="text-gray-500 text-base md:text-lg">No blogs available at the moment.</p>
</div>
@endforelse
</div>

@if(count($blogs) > 0)
<div class="text-center mt-8 md:mt-12">
<a href="/blogs" class="inline-flex items-center px-6 md:px-8 py-3 md:py-4 gradient-accent text-white rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 text-sm md:text-base">
View All Blogs <i class="fas fa-arrow-right ml-2"></i>
</a>
</div>
@endif
</div>
</section>

<!-- Team Section -->
<section class="py-12 md:py-20 bg-gradient-to-br from-purple-50 to-pink-50">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-8 md:mb-16">
<div class="inline-block px-3 py-1.5 md:px-4 md:py-2 bg-purple-100 text-purple-600 rounded-full text-xs md:text-sm font-semibold mb-3 md:mb-4">
<i class="fas fa-users mr-2"></i>Our Team
</div>
<h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 md:mb-4">Meet Our Experts</h2>
<p class="text-sm md:text-base lg:text-xl text-gray-600 max-w-2xl mx-auto px-4">Dedicated professionals committed to your success</p>
</div>

<div class="grid grid-cols-2 lg:grid-cols-4 gap-4 md:gap-8">
@forelse($teams->take(4) as $team)
@if($team->status == 1)
<div class="bg-white rounded-2xl overflow-hidden shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2 group">
<div class="relative h-64 md:h-80 overflow-hidden">
@if($team->image)
<img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
@else
<div class="w-full h-full bg-gradient-to-br from-purple-400 to-pink-400 flex items-center justify-center">
<i class="fas fa-user text-white text-4xl md:text-6xl"></i>
</div>
@endif
</div>
<div class="p-4 md:p-6 text-center">
<h3 class="text-base md:text-lg lg:text-xl font-bold text-gray-900 mb-1 line-clamp-1">{{ $team->name }}</h3>
<p class="text-sm md:text-base text-purple-600 font-semibold mb-3 md:mb-4 line-clamp-1">{{ $team->position }}</p>
<div class="flex justify-center gap-2">
@if($team->facebook)
<a href="{{ $team->facebook }}" class="w-8 h-8 md:w-10 md:h-10 rounded-lg bg-gray-100 hover:bg-purple-600 hover:text-white flex items-center justify-center transition-all duration-300"><i class="fab fa-facebook-f text-sm md:text-base"></i></a>
@endif
@if($team->twitter)
<a href="{{ $team->twitter }}" class="w-8 h-8 md:w-10 md:h-10 rounded-lg bg-gray-100 hover:bg-purple-600 hover:text-white flex items-center justify-center transition-all duration-300"><i class="fab fa-twitter text-sm md:text-base"></i></a>
@endif
@if($team->instagram)
<a href="{{ $team->instagram }}" class="w-8 h-8 md:w-10 md:h-10 rounded-lg bg-gray-100 hover:bg-purple-600 hover:text-white flex items-center justify-center transition-all duration-300"><i class="fab fa-instagram text-sm md:text-base"></i></a>
@endif
@if($team->email)
<a href="mailto:{{ $team->email }}" class="w-8 h-8 md:w-10 md:h-10 rounded-lg bg-gray-100 hover:bg-purple-600 hover:text-white flex items-center justify-center transition-all duration-300"><i class="fas fa-envelope text-sm md:text-base"></i></a>
@endif
</div>
</div>
</div>
@endif
@empty
<div class="col-span-full text-center py-12">
<i class="fas fa-users text-4xl md:text-6xl text-gray-300 mb-4"></i>
<p class="text-gray-500 text-base md:text-lg">No team members available at the moment.</p>
</div>
@endforelse
</div>
</div>
</section>

<!-- Contact CTA Section - FIXED FORM -->
<section class="py-12 md:py-20 gradient-primary relative overflow-hidden">
    <div class="absolute inset-0 opacity-10 overflow-hidden">
        <div class="absolute -top-20 -left-20 w-64 h-64 md:w-96 md:h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute -bottom-20 -right-20 w-64 h-64 md:w-96 md:h-96 bg-white rounded-full blur-3xl"></div>
    </div>
    <div class="relative max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <div class="inline-block px-3 py-1.5 md:px-4 md:py-2 bg-white bg-opacity-20 rounded-full text-xs md:text-sm font-semibold mb-4 md:mb-6 backdrop-blur-sm">
            <i class="fas fa-phone mr-2"></i>Get Free Consultation
        </div>
        <h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold mb-4 md:mb-6">Ready to Start Your Journey?</h2>
        <p class="text-sm md:text-base lg:text-xl text-gray-100 mb-6 md:mb-8 max-w-2xl mx-auto">Fill out the form and our experts will get back to you within 24 hours</p>
        <div class="bg-white rounded-2xl p-6 md:p-8 lg:p-12 shadow-2xl">
            <form action="{{ route('contact.store') }}" method="POST" id="contactForm">
                @csrf
                <div class="grid md:grid-cols-2 gap-4 md:gap-6 mb-4 md:mb-6">
                    <input type="text" name="name" placeholder="Full Name *" class="w-full px-4 md:px-6 py-3 md:py-4 rounded-xl border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300 text-sm md:text-base text-gray-900 placeholder-gray-400" required>
                    <input type="email" name="email" placeholder="Email Address *" class="w-full px-4 md:px-6 py-3 md:py-4 rounded-xl border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300 text-sm md:text-base text-gray-900 placeholder-gray-400" required>
                    <input type="tel" name="phone" placeholder="Phone Number *" class="w-full px-4 md:px-6 py-3 md:py-4 rounded-xl border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300 text-sm md:text-base text-gray-900 placeholder-gray-400" required>
                    <input type="text" name="city" placeholder="Your City *" class="w-full px-4 md:px-6 py-3 md:py-4 rounded-xl border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300 text-sm md:text-base text-gray-900 placeholder-gray-400" required>
                </div>
                <select name="course" class="w-full px-4 md:px-6 py-3 md:py-4 rounded-xl border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300 mb-4 md:mb-6 text-sm md:text-base text-gray-900" required>
                    <option value="">Select a course</option>
                    @foreach($courses as $course)
                    @if($course->status == 1)
                    <option value="{{ $course->title }}">{{ $course->title }}</option>
                    @endif
                    @endforeach
                </select>
                <textarea name="message" placeholder="Your Message *" rows="4" class="w-full px-4 md:px-6 py-3 md:py-4 rounded-xl border-2 border-gray-200 focus:border-purple-600 focus:outline-none transition-colors duration-300 mb-4 md:mb-6 text-sm md:text-base text-gray-900 placeholder-gray-400" required></textarea>
                <button type="submit" class="w-full px-6 md:px-8 py-3 md:py-4 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300 text-sm md:text-base">
                    <i class="fas fa-paper-plane mr-2"></i>Submit Inquiry
                </button>
            </form>
        </div>
    </div>
</section>
<!-- Branches Section -->
@if($branches->count() > 0)
<section class="py-12 md:py-20 bg-white">
<div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
<div class="text-center mb-8 md:mb-16">
<div class="inline-block px-3 py-1.5 md:px-4 md:py-2 bg-purple-100 text-purple-600 rounded-full text-xs md:text-sm font-semibold mb-3 md:mb-4">
<i class="fas fa-map-marker-alt mr-2"></i>Our Locations
</div>
<h2 class="text-2xl sm:text-3xl md:text-4xl lg:text-5xl font-bold text-gray-900 mb-3 md:mb-4">Visit Our Branches</h2>
<p class="text-sm md:text-base lg:text-xl text-gray-600 max-w-2xl mx-auto px-4">We're located at convenient locations to serve you better</p>
</div>

<div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-6 md:gap-8">
@foreach($branches->take(3) as $branch)
@if($branch->status == 1)
<div class="bg-white rounded-2xl p-6 md:p-8 shadow-lg hover:shadow-2xl transition-all duration-300 transform hover:-translate-y-2">
<div class="w-14 h-14 md:w-16 md:h-16 gradient-primary rounded-xl flex items-center justify-center mb-4 md:mb-6">
<i class="fas fa-building text-white text-xl md:text-2xl"></i>
</div>
<h3 class="text-lg md:text-xl lg:text-2xl font-bold text-gray-900 mb-3 md:mb-4 line-clamp-2">{{ $branch->title }}</h3>
@if($branch->location)
<p class="text-sm md:text-base text-gray-600 mb-2 md:mb-3 flex items-start gap-2 md:gap-3">
<i class="fas fa-map-marker-alt text-purple-600 mt-1 flex-shrink-0"></i>
<span class="break-words">{{ $branch->location }}</span>
</p>
@endif
<p class="text-sm md:text-base text-gray-600 mb-2 md:mb-3 flex items-center gap-2 md:gap-3">
<i class="fas fa-phone text-purple-600 flex-shrink-0"></i>
<a href="tel:{{ $branch->phone }}" class="hover:text-purple-600 transition-colors duration-300 break-words">{{ $branch->phone }}</a>
</p>
<p class="text-sm md:text-base text-gray-600 mb-4 md:mb-6 flex items-center gap-2 md:gap-3">
<i class="fas fa-envelope text-purple-600 flex-shrink-0"></i>
<a href="mailto:{{ $branch->email }}" class="hover:text-purple-600 transition-colors duration-300 break-words">{{ $branch->email }}</a>
</p>
@if($branch->short_description)
<p class="text-sm md:text-base text-gray-600 mb-4 md:mb-6 line-clamp-3">{{ Str::limit($branch->short_description, 100) }}</p>
@endif
<a href="/branches" class="inline-flex items-center text-sm md:text-base text-purple-600 font-semibold hover:text-purple-700">
View Details <i class="fas fa-arrow-right ml-2"></i>
</a>
</div>
@endif
@endforeach
</div>
</div>
</section>
@endif
@endsection

@section('styles')
<style>
@keyframes blob {
0%, 100% { transform: translate(0, 0) scale(1); }
33% { transform: translate(30px, -50px) scale(1.1); }
66% { transform: translate(-20px, 20px) scale(0.9); }
}
.animate-blob {
animation: blob 7s infinite;
}
.animation-delay-2000 {
animation-delay: 2s;
}
.animation-delay-4000 {
animation-delay: 4s;
}
</style>
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