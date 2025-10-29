@extends('layout.admin.master')
@section('title','Edit Course')
@section('main')
<style>i{color: red;}</style>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h3 class="text-center">Edit Course</h3></div>
                <div class="card-body">
                    <form action="{{route('admin.courses.update',$edit->id)}}" method="POST" enctype="multipart/form-data">
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
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" value="{{old('slug', $edit->slug)}}" name="slug" class="form-control" id="slug">
                            @error('slug')<i>{{$message}}</i>@enderror
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
                            <label for="image" class="form-label">Image</label>
                            <input type="file" value="{{old('image', $edit->image)}}" name="image" class="form-control" id="image">
                            @error('image')
                            <i>{{$message}}</i>
                            @enderror
                            @if($edit->image)
                            <div class="mt-2">
                                <img src="{{ asset('storage/' . $edit->image) }}" alt="Course Image" class="img-thumbnail" style="max-height: 100px;">
                            </div>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label for="seo_title" class="form-label">SEO Title</label>
                            <input type="text" value="{{old('seo_title', $edit->seo_title)}}" name="seo_title" class="form-control" id="seo_title">
                        </div>
                        <div class="mb-3">
                            <label for="meta_keywords" class="form-label">Meta Keywords</label>
                            <input type="text" value="{{old('meta_keywords', $edit->meta_keywords)}}" name="meta_keywords" class="form-control" id="meta_keywords">
                        </div>
                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea class="form-control" name="meta_description" id="meta_description" rows="3">{{old('meta_description', $edit->meta_description)}}</textarea>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Course</button>
                            <a href="{{ route('admin.courses.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection