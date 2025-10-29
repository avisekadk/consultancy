@extends('layout.admin.master')
@section('title','Edit Branch')
@section('main')
<style>i{color: red;}</style>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h3 class="text-center">Edit Branch</h3></div>
                <div class="card-body">
                    <form action="{{route('admin.branches.update',$edit->id)}}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="order" class="form-label">Order</label>
                                <input type="number" value="{{old('order', $edit->order)}}" name="order" class="form-control" id="order">
                                @error('order')<i>{{$message}}</i>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-select" id="status">
                                    <option value="1" {{ old('status', $edit->status)=='1' ? 'selected' : '' }}>Active</option>
                                    <option value="0" {{ old('status', $edit->status)=='0' ? 'selected' : '' }}>Inactive</option>
                                </select>
                                @error('status')<i>{{$message}}</i>@enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" value="{{old('title', $edit->title)}}" name="title" class="form-control" id="title">
                            @error('title')<i>{{$message}}</i>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" value="{{old('email', $edit->email)}}" name="email" class="form-control" id="email">
                            @error('email')<i>{{$message}}</i>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" value="{{old('phone', $edit->phone)}}" name="phone" class="form-control" id="phone">
                            @error('phone')<i>{{$message}}</i>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="location" class="form-label">Location</label>
                            <input type="text" value="{{old('location', $edit->location)}}" name="location" class="form-control" id="location">
                        </div>
                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea class="form-control" name="short_description" id="short_description" rows="3">{{old('short_description', $edit->short_description)}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="5">{{old('description', $edit->description)}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="map" class="form-label">Map Embed Code</label>
                            <textarea class="form-control" name="map" id="map" rows="3">{{old('map', $edit->map)}}</textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Branch</button>
                            <a href="{{ route('admin.branches.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection