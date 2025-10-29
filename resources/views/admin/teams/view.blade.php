@extends('layout.admin.master')
@section('title', 'View Team Member')
@section('main')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Team Member Details</h4>
                    <a href="{{ route('admin.teams.index') }}" class="btn btn-light btn-sm">
                        <i class="bi bi-arrow-left"></i> Back to List
                    </a>
                </div>
                <div class="card-body">
                    <h2 class="card-title mb-4">{{ $team->name }}</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Order:</strong>
                            <span>{{ $team->order }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Position:</strong>
                            <span>{{ $team->position }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Email:</strong>
                            <span>{{ $team->email }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Status:</strong>
                            @if($team->status == 1)
                            <span class="badge bg-success">Active</span>
                            @else
                            <span class="badge bg-danger">Inactive</span>
                            @endif
                        </li>
                    </ul>
                    <div class="mt-4">
                        <h5>Description:</h5>
                        <div class="card bg-light">
                            <div class="card-body" style="white-space: pre-wrap;">{{ $team->description }}</div>
                        </div>
                    </div>
                    
                    <div class="mt-4">
                        <h5>Image:</h5>
                        @if($team->image)
                        <div class="mt-2">
                            <img src="{{ asset('storage/' . $team->image) }}" alt="Team Member Image" class="img-fluid img-thumbnail" style="max-height: 300px;">
                        </div>
                        @else
                        <p class="text-muted">No image uploaded</p>
                        @endif
                    </div>
                    
                    <div class="mt-4">
                        <h5>Social Media Links:</h5>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item d-flex justify-content-between">
                                <strong>Facebook:</strong>
                                <span>{{ $team->facebook ?? 'N/A' }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <strong>Twitter:</strong>
                                <span>{{ $team->twitter ?? 'N/A' }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <strong>Instagram:</strong>
                                <span>{{ $team->instagram ?? 'N/A' }}</span>
                            </li>
                            <li class="list-group-item d-flex justify-content-between">
                                <strong>WhatsApp:</strong>
                                <span>{{ $team->whatsapp ?? 'N/A' }}</span>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="card-footer text-muted text-center">
                    Created on: {{ $team->created_at->format('M d, Y \a\t h:i A') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection