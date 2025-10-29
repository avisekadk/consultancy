@extends('layout.admin.master')
@section('title', 'Team Members')
@section('main')
<div class="container mt-5">
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h1>Team Members</h1>
        <a href="{{ route('admin.teams.create') }}" class="btn btn-primary">
            <i class="bi bi-plus-circle"></i> Add New Member
        </a>
    </div>
    
    @if(session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif
    
    @if($teams->count() > 0)
    <div class="table-responsive">
        <table class="table table-striped table-hover align-middle">
            <thead class="table-dark">
                <tr>
                    <th>#</th>
                    <th>Order</th>
                    <th>Name</th>
                    <th>Position</th>
                    <th>Email</th>
                    <th>Status</th>
                    <th class="text-center">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach($teams as $item)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $item->order }}</td>
                    <td>{{ $item->name }}</td>
                    <td>{{ $item->position }}</td>
                    <td>{{ $item->email }}</td>
                    <td>
                        @if($item->status == 1)
                        <span class="badge bg-success">Active</span>
                        @else
                        <span class="badge bg-danger">Inactive</span>
                        @endif
                    </td>
                    <td class="text-center">
                        <div class="d-inline-flex">
                            <a href="{{ route('admin.teams.view', $item->id) }}" class="btn btn-sm btn-outline-primary me-2">
                                <i class="bi bi-eye"></i> View
                            </a>
                            <a href="{{ route('admin.teams.edit', $item->id) }}" class="btn btn-sm btn-outline-success me-2">
                                <i class="bi bi-pencil"></i> Edit
                            </a>
                            <form action="{{ route('admin.teams.delete', $item->id) }}" method="POST">
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
        No team members found.
    </div>
    @endif
</div>
@endsection