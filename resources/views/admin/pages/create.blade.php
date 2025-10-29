@extends('layout.admin.master')
@section('title','Create Page')
@section('main')
<style>
i{
    color: red;
}
</style>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Add New Page</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.pages.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="order" class="form-label">Order</label>
                                <input type="number" value="{{old('order')}}" name="order" class="form-control" id="order">
                                @error('order')<i>{{$message}}</i>@enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-select" id="status">
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                @error('status')<i>{{$message}}</i>@enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="title" class="form-label">Title</label>
                            <input type="text" value="{{old('title')}}" name="title" class="form-control" id="title">
                            @error('title')<i>{{$message}}</i>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="slug" class="form-label">Slug</label>
                            <input type="text" value="{{old('slug')}}" name="slug" class="form-control" id="slug">
                             @error('slug')<i>{{$message}}</i>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="short_description" class="form-label">Short Description</label>
                            <textarea class="form-control" name="short_description" id="short_description" rows="3">{{old('short_description')}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="5">{{old('description')}}</textarea>
                        </div>

                         <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="image_1" class="form-label">Image 1</label>
                                <input type="file" value="{{old('image_1')}}" name="image_1" class="form-control" id="image_1">
                                @error('image_1')
                                <i>{{$message}}</i>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="image_2" class="form-label">Image 2</label>
                                <input type="file" value="{{old('image_2')}}" name="image_2" class="form-control" id="image_2">
                                @error('image_2')
                                <i>{{$message}}</i>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="banner_image" class="form-label">Banner Image</label>
                            <input type="file" value="{{old('banner_image')}}" name="banner_image" class="form-control" id="banner_image">
                            @error('banner_image')
                            <i>{{$message}}</i>
                            @enderror
                        </div>

                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="seo_title" class="form-label">SEO Title</label>
                                <input type="text" value="{{old('seo_title')}}" name="seo_title" class="form-control" id="seo_title">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="meta_keywords" class="form-label">Meta Keywords</label>
                                <input type="text" value="{{old('meta_keywords')}}" name="meta_keywords" class="form-control" id="meta_keywords">
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="meta_description" class="form-label">Meta Description</label>
                            <textarea class="form-control" name="meta_description" id="meta_description" rows="3">{{old('meta_description')}}</textarea>
                        </div>

                        <div class="mb-3">
                            <label for="seo_schema" class="form-label">SEO Schema</label>
                            <textarea class="form-control" name="seo_schema" id="seo_schema" rows="5">{{old('seo_schema')}}</textarea>
                        </div>

                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Create Page</button>
                            <a href="{{ route('admin.pages.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection