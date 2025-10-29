@extends('layout.admin.master')
@section('title', 'View Branch')
@section('main')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card shadow-sm">
                <div class="card-header bg-dark text-white d-flex justify-content-between align-items-center">
                    <h4 class="mb-0">Branch Details</h4>
                    <a href="{{ route('admin.branches.index') }}" class="btn btn-light btn-sm"><i class="bi bi-arrow-left"></i> Back</a>
                </div>
                <div class="card-body">
                    <h2 class="card-title mb-4">{{ $branch->title }}</h2>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between"><strong>Email:</strong><span>{{ $branch->email }}</span></li>
                        <li class="list-group-item d-flex justify-content-between"><strong>Phone:</strong><span>{{ $branch->phone }}</span></li>
                        <li class="list-group-item d-flex justify-content-between"><strong>Location:</strong><span>{{ $branch->location }}</span></li>
                        <li class="list-group-item d-flex justify-content-between"><strong>Status:</strong>
                            @if($branch->status == 1)<span class="badge bg-success">Active</span>@else<span class="badge bg-danger">Inactive</span>@endif
                        </li>
                    </ul>
                    <div class="mt-4"><h5>Description:</h5><div class="card bg-light"><div class="card-body">{{ $branch->description }}</div></div></div>
                </div>
                <div class="card-footer text-muted text-center">Created: {{ $branch->created_at->format('M d, Y \a\t h:i A') }}</div>
            </div>
        </div>
    </div>
</div>
@endsection