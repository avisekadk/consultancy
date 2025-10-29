@extends('layout.admin.master')
@section('title', 'Contact Inquiries')
@section('main')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Contact Inquiries</h1>
        <a href="{{ route('admin.contact.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Add New Inquiry
        </a>
    </div>
    
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    @if($contact->count() > 0)
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Full Name</th>
                    <th>Email</th>
                    <th>Phone</th>
                    <th>City</th>
                    <th>Course</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($contact as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->email }}</td>
                    <td>{{ $item->phone }}</td>
                    <td>{{ $item->city }}</td>
                    <td>{{ $item->course }}</td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="{{ route('admin.contact.view', $item->id) }}" class="btn btn-sm btn-outline-primary me-2">
                                <i class="bi bi-eye"></i> View
                            </a>
                            <a href="{{ route('admin.contact.edit', $item->id) }}" class="btn btn-sm btn-outline-success me-2">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="{{ route('admin.contact.delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-outline-danger" onclick="return confirm('Are you sure?')">
                                    <i class="bi bi-trash"></i> Delete
                                </button>
                            </form>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    @else
    <div class="alert alert-info text-center">
        No inquiries found.
    </div>
    @endif
</div>
@endsection