@extends('layout.admin.master')
@section('title', 'View Course')
@section('main')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Course Details</h4>
                    <a href="{{ route('admin.courses.index') }}" class="btn btn-light btn-sm">
                        <i class="bi bi-arrow-left"></i> Back to List
                    </a>
                </div>
                <div class="card-body">
                    <h2 class="card-title mb-4">{{ $course->title }}</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Order:</strong>
                            <span>{{ $course->order }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Slug:</strong>
                            <span>{{ $course->slug }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Status:</strong>
                            @if($course->status == 1)
                            <span class="badge bg-success">Active</span>
                            @else
                            <span class="badge bg-danger">Inactive</span>
                            @endif
                        </li>
                    </ul>
                    <div class="mt-4">
                        <h5>Short Description:</h5>
                        <p>{{ $course->short_description }}</p>
                    </div>
                    <div class="mt-4">
                        <h5>Description:</h5>
                        <div class="card bg-light">
                            <div class="card-body" style="white-space: pre-wrap;">{{ $course->description }}</div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h5>Image:</h5>
                        @if($course->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $course->image) }}" alt="Course Image" class="img-fluid img-thumbnail" style="max-height: 300px;">
                        </div>
                        @else
                        <p class="text-muted">No image uploaded</p>
                        @endif
                    </div>
                    
                    <div class="mt-4">
                        <h5>SEO Information:</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <strong>SEO Title:</strong>
                                <span>{{ $course->seo_title }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <strong>Meta Keywords:</strong>
                                <span>{{ $course->meta_keywords }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <strong>Meta Description:</strong>
                                <span>{{ $course->meta_description }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer text-muted text-center">
                    Created on: {{ $course->created_at->format('M d, Y \a\t h:i A') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection