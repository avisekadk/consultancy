@extends('layout.frontend.master')
@section('title', $page->seo_title ?? 'About Us')
@section('meta_description', $page->meta_description ?? '')
@section('meta_keywords', $page->meta_keywords ?? '')

@section('content')
<!-- Page Header -->
<section class="relative py-16 overflow-hidden @if(!$page->banner_image) gradient-primary @endif">
    @if($page->banner_image)
    <div class="absolute inset-0">
        <img src="{{ asset('storage/' . $page->banner_image) }}" alt="{{ $page->title }}" class="w-full h-full object-cover">
        <div class="absolute inset-0 bg-gradient-to-r from-purple-900/85 to-pink-900/85"></div>
    </div>
    @else
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>
    @endif
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <nav class="flex justify-center mb-4">
            <ol class="flex items-center space-x-2 text-sm">
                <li><a href="/" class="hover:text-gray-200 transition-colors duration-300">Home</a></li>
                <li><i class="fas fa-chevron-right text-xs"></i></li>
                <li class="text-gray-200">About Us</li>
            </ol>
        </nav>
        <h1 class="text-4xl md:text-5xl font-bold mb-3">{{ $page->title }}</h1>
    </div>
</section>

<!-- Main Content -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-8 items-center mb-16">
            <div class="order-2 lg:order-1">
                @if($page->short_description)
                <div class="inline-block px-4 py-2 bg-purple-100 text-purple-600 rounded-full text-sm font-semibold mb-4">
                    <i class="fas fa-info-circle mr-2"></i>Who We Are
                </div>
                <p class="text-xl text-purple-600 font-semibold mb-4 leading-relaxed">{{ $page->short_description }}</p>
                @endif
                <div class="prose prose-base text-gray-600 leading-relaxed">
                    {!! nl2br(e($page->description)) !!}
                </div>
            </div>
            <div class="order-1 lg:order-2">
                @if($page->image_1)
                <img src="{{ asset('storage/' . $page->image_1) }}" alt="{{ $page->title }}" class="w-full h-[300px] md:h-[350px] object-cover rounded-2xl shadow-lg">
                @else
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?w=800" alt="About Us" class="w-full h-[300px] md:h-[350px] object-cover rounded-2xl shadow-lg">
                @endif
            </div>
        </div>

        @if($page->image_2)
        <div class="mb-16">
            <img src="{{ asset('storage/' . $page->image_2) }}" alt="{{ $page->title }}" class="w-full h-[300px] md:h-[400px] object-cover rounded-2xl shadow-lg">
        </div>
        @endif
    </div>
</section>

<!-- Stats Section -->
<section class="py-16 gradient-primary relative overflow-hidden">
    <div class="absolute inset-0 opacity-10">
        <div class="absolute top-0 left-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-white rounded-full blur-3xl"></div>
    </div>
    <div class="relative max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-6 text-center text-white">
            <div class="group">
                <div class="w-16 h-16 bg-white bg-opacity-20 backdrop-blur-sm rounded-xl flex items-center justify-center mx-auto mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-users text-3xl"></i>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold mb-2">5000+</h3>
                <p class="text-sm md:text-base text-gray-100">Students Counseled</p>
            </div>
            <div class="group">
                <div class="w-16 h-16 bg-white bg-opacity-20 backdrop-blur-sm rounded-xl flex items-center justify-center mx-auto mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-graduation-cap text-3xl"></i>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold mb-2">98%</h3>
                <p class="text-sm md:text-base text-gray-100">Success Rate</p>
            </div>
            <div class="group">
                <div class="w-16 h-16 bg-white bg-opacity-20 backdrop-blur-sm rounded-xl flex items-center justify-center mx-auto mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-globe text-3xl"></i>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold mb-2">25+</h3>
                <p class="text-sm md:text-base text-gray-100">Countries</p>
            </div>
            <div class="group">
                <div class="w-16 h-16 bg-white bg-opacity-20 backdrop-blur-sm rounded-xl flex items-center justify-center mx-auto mb-4 transform group-hover:scale-110 transition-transform duration-300">
                    <i class="fas fa-university text-3xl"></i>
                </div>
                <h3 class="text-3xl md:text-4xl font-bold mb-2">500+</h3>
                <p class="text-sm md:text-base text-gray-100">Partner Universities</p>
            </div>
        </div>
    </div>
</section>

<!-- Mission & Vision -->
<section class="py-16 bg-white">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid lg:grid-cols-2 gap-6">
            <div class="bg-gradient-to-br from-purple-50 to-pink-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-14 h-14 bg-gradient-to-r from-purple-600 to-pink-600 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-bullseye text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Our Mission</h3>
                <p class="text-gray-600 leading-relaxed">To empower students with expert guidance and comprehensive support in achieving their dreams of studying abroad, ensuring they make informed decisions for a successful future.</p>
            </div>
            <div class="bg-gradient-to-br from-blue-50 to-purple-50 rounded-2xl p-8 hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1">
                <div class="w-14 h-14 bg-gradient-to-r from-blue-600 to-purple-600 rounded-xl flex items-center justify-center mb-4">
                    <i class="fas fa-eye text-white text-2xl"></i>
                </div>
                <h3 class="text-2xl font-bold text-gray-900 mb-3">Our Vision</h3>
                <p class="text-gray-600 leading-relaxed">To be the most trusted educational consultancy, recognized globally for excellence in student counseling and commitment to transforming lives through quality education.</p>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
@if($teams->count() > 0)
<section class="py-16 bg-gradient-to-br from-purple-50 to-pink-50">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center mb-12">
            <div class="inline-block px-4 py-2 bg-purple-100 text-purple-600 rounded-full text-sm font-semibold mb-3">
                <i class="fas fa-users mr-2"></i>Our Team
            </div>
            <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-3">Meet Our Expert Team</h2>
            <p class="text-lg text-gray-600 max-w-2xl mx-auto">Dedicated professionals committed to your success</p>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4 md:gap-6">
            @foreach($teams as $team)
            @if($team->status == 1)
            <div class="bg-white rounded-xl overflow-hidden shadow-lg hover:shadow-xl transition-all duration-300 transform hover:-translate-y-1 group">
                <div class="relative h-48 md:h-64 overflow-hidden">
                    @if($team->image)
                    <img src="{{ asset('storage/' . $team->image) }}" alt="{{ $team->name }}" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    @else
                    <div class="w-full h-full bg-gradient-to-br from-purple-400 to-pink-400 flex items-center justify-center">
                        <i class="fas fa-user text-white text-4xl md:text-5xl"></i>
                    </div>
                    @endif
                </div>
                <div class="p-4 text-center">
                    <h3 class="text-base md:text-lg font-bold text-gray-900 mb-1">{{ $team->name }}</h3>
                    <p class="text-purple-600 font-semibold mb-2 text-sm">{{ $team->position }}</p>
                    @if($team->description)
                    <p class="text-gray-600 text-xs mb-3 line-clamp-2">{{ Str::limit($team->description, 60) }}</p>
                    @endif
                    <div class="flex justify-center gap-2">
                        @if($team->facebook)
                        <a href="{{ $team->facebook }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-gray-100 hover:bg-purple-600 hover:text-white flex items-center justify-center transition-all duration-300 text-sm">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        @endif
                        @if($team->twitter)
                        <a href="{{ $team->twitter }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-gray-100 hover:bg-purple-600 hover:text-white flex items-center justify-center transition-all duration-300 text-sm">
                            <i class="fab fa-twitter"></i>
                        </a>
                        @endif
                        @if($team->instagram)
                        <a href="{{ $team->instagram }}" target="_blank" rel="noopener noreferrer" class="w-8 h-8 rounded-lg bg-gray-100 hover:bg-purple-600 hover:text-white flex items-center justify-center transition-all duration-300 text-sm">
                            <i class="fab fa-instagram"></i>
                        </a>
                        @endif
                        @if($team->email)
                        <a href="mailto:{{ $team->email }}" class="w-8 h-8 rounded-lg bg-gray-100 hover:bg-purple-600 hover:text-white flex items-center justify-center transition-all duration-300 text-sm">
                            <i class="fas fa-envelope"></i>
                        </a>
                        @endif
                    </div>
                </div>
            </div>
            @endif
            @endforeach
        </div>
    </div>
</section>
@endif

<!-- CTA Section -->
<section class="py-16 bg-white">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">Ready to Start Your Journey?</h2>
        <p class="text-lg text-gray-600 mb-6 max-w-2xl mx-auto">Join thousands of successful students who trusted us with their future</p>
        <a href="/contact" class="inline-flex items-center px-8 py-4 bg-gradient-to-r from-purple-600 to-pink-600 text-white rounded-xl font-bold hover:shadow-2xl transform hover:-translate-y-1 transition-all duration-300">
            Get Free Consultation <i class="fas fa-arrow-right ml-2"></i>
        </a>
    </div>
</section>
@endsection