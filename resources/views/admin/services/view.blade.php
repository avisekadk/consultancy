@extends('layout.admin.master')
@section('title', 'View Service')
@section('main')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Service Details</h4>
                    <a href="{{ route('admin.services.index') }}" class="btn btn-light btn-sm"><i class="bi bi-arrow-left"></i> Back</a>
                </div>
                <div class="card-body">
                    <h2 class="card-title mb-4">{{ $service->title }}</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between"><strong>Order:</strong><span>{{ $service->order }}</span></li>
                        <li class="list-group-item d-flex justify-content-between"><strong>Slug:</strong><span>{{ $service->slug }}</span></li>
                        <li class="list-group-item d-flex justify-content-between"><strong>Status:</strong>
                            @if($service->status == 1)<span class="badge bg-success">Active</span>@else<span class="badge bg-danger">Inactive</span>@endif
                        </li>
                    </ul>
                    <div class="mt-4"><h5>Short Description:</h5><p>{{ $service->short_description }}</p></div>
                    <div class="mt-4"><h5>Description:</h5><div class="card bg-light"><div class="card-body">{{ $service->description }}</div></div></div>
                    
                    <!-- Images Section -->
                    <div class="mt-4">
                        <h5>Images:</h5>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <strong>Image:</strong>
                                @if($service->image)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $service->image) }}" alt="Service Image" class="img-fluid img-thumbnail" style="max-height: 300px;">
                                </div>
                                @else
                                <p class="text-muted">No image uploaded</p>
                                @endif
                            </div>
                            <div class="col-md-6 mb-3">
                                <strong>Image 1:</strong>
                                @if($service->image_1)
                                <div class="mt-2">
                                    <img src="{{ asset('storage/' . $service->image_1) }}" alt="Service Image 1" class="img-fluid img-thumbnail" style="max-height: 300px;">
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
                            <li class="list-group-item d-flex justify-content-between"><strong>SEO Title:</strong><span>{{ $service->seo_title }}</span></li>
                            <li class="list-group-item d-flex justify-content-between"><strong>Meta Keywords:</strong><span>{{ $service->meta_keywords }}</span></li>
                            <li class="list-group-item d-flex justify-content-between"><strong>Meta Description:</strong><span>{{ $service->meta_description }}</span></li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer text-muted text-center">Created: {{ $service->created_at->format('M d, Y \a\t h:i A') }}</div>
            </div>
        </div>
    </div>
</div>
@endsection