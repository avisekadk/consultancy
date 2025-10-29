@extends('layout.admin.master')
@section('title', 'View Contact')
@section('main')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Contact Details</h4>
                    <a href="{{ route('admin.contact.index') }}" class="btn btn-light btn-sm">
                        <i class="bi bi-arrow-left"></i> Back to List
                    </a>
                </div>
                <div class="card-body">
                    <div class="text-center mb-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="currentColor" class="bi bi-person-circle text-secondary" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                        <h2 class="card-title mt-3">{{ $inquiry->name }}</h2>
                        <p class="text-muted">{{ $inquiry->email }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Full Name:</strong>
                            <span>{{ $inquiry->name }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Email Address:</strong>
                            <span>{{ $inquiry->email }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Phone:</strong>
                            <span>{{ $inquiry->phone }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>City:</strong>
                            <span>{{ $inquiry->city }}</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                            <strong>Course:</strong>
                            <span class="badge bg-primary rounded-pill">{{ $inquiry->course }}</span>
                        </li>
                    </ul>
                    <div class="mt-4">
                        <h5>Message:</h5>
                        <div class="card bg-light">
                            <div class="card-body" style="white-space: pre-wrap;">{{ $inquiry->message }}</div>
                        </div>
                    </div>
                </div>
                <div class="card-footer text-muted text-center">
                    Inquiry received on: {{ $inquiry->created_at->format('M d, Y \a\t h:i A') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection