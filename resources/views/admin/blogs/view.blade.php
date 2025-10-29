@extends('layout.admin.master')
@section('title', 'View Blog')
@section('main')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Blog Details</h4>
                    <a href="{{ route('admin.blogs.index') }}" class="btn btn-light btn-sm">
                        <i class="bi bi-arrow-left"></i> Back to List
                    </a>
                </div>
                <div class="card-body">
                    <h2 class="card-title mb-4">{{ $blog->title }}</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Order:</strong>
                            <span>{{ $blog->order }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Slug:</strong>
                            <span>{{ $blog->slug }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Views:</strong>
                            <span>{{ $blog->views }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Status:</strong>
                            @if($blog->status == 1)
                            <span class="badge bg-success">Active</span>
                            @else
                            <span class="badge bg-danger">Inactive</span>
                            @endif
                        </li>
                    </ul>
                    <div class="mt-4">
                        <h5>Short Description:</h5>
                        <p>{{ $blog->short_description }}</p>
                    </div>
                    <div class="mt-4">
                        <h5>Description:</h5>
                        <div class="card bg-light">
                            <div class="card-body" style="white-space: pre-wrap;">{{ $blog->description }}</div>
                        </div>
                    </div>
                    
                    <!-- Images Section -->
                    <div class="mt-4">
                        <h5>Images:</h5>
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <strong>Main Image:</strong>
                                @if($blog->image)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $blog->image) }}" alt="Blog Image" class="img-fluid img-thumbnail" style="max-height: 300px;">
                                </div>
                                @else
                                <p class="text-muted">No image uploaded</p>
                                @endif
                            </div>
                            <div class="col-md-4 mb-3">
                                <strong>Featured Image 1:</strong>
                                @if($blog->featured_image_1)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $blog->featured_image_1) }}" alt="Featured Image 1" class="img-fluid img-thumbnail" style="max-height: 300px;">
                                </div>
                                @else
                                <p class="text-muted">No image uploaded</p>
                                @endif
                            </div>
                            <div class="col-md-4 mb-3">
                                <strong>Featured Image 2:</strong>
                                @if($blog->featured_image_2)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $blog->featured_image_2) }}" alt="Featured Image 2" class="img-fluid img-thumbnail" style="max-height: 300px;">
                                </div>
                                @else
                                <p class="text-muted">No image uploaded</p>
                                @endif
                            </div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h5>SEO Information:</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <strong>SEO Title:</strong>
                                <span>{{ $blog->seo_title }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <strong>Meta Keywords:</strong>
                                <span>{{ $blog->meta_keywords }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <strong>Meta Description:</strong>
                                <span>{{ $blog->meta_description }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer text-muted text-center">
                    Created on: {{ $blog->created_at->format('M d, Y \a\t h:i A') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection