@extends('layout.admin.master')
@section('title','Edit Team Member')
@section('main')
<style>i{color: red;}</style>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">
                <div class="card-header"><h3 class="text-center">Edit Team Member</h3></div>
                <div class="card-body">
                    <form action="{{route('admin.teams.update',$edit->id)}}" method="POST" enctype="multipart/form-data">
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
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" value="{{old('name', $edit->name)}}" name="name" class="form-control" id="name">
                            @error('name')<i>{{$message}}</i>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" value="{{old('position', $edit->position)}}" name="position" class="form-control" id="position">
                            @error('position')<i>{{$message}}</i>@enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" value="{{old('email', $edit->email)}}" name="email" class="form-control" id="email">
                            @error('email')<i>{{$message}}</i>@enderror
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
                                <img src="{{ asset('storage/' . $edit->image) }}" alt="Team Member Image" class="img-thumbnail" style="max-height: 100px;">
                            </div>
                            @endif
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="facebook" class="form-label">Facebook URL</label>
                                <input type="text" value="{{old('facebook', $edit->facebook)}}" name="facebook" class="form-control" id="facebook">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="twitter" class="form-label">Twitter URL</label>
                                <input type="text" value="{{old('twitter', $edit->twitter)}}" name="twitter" class="form-control" id="twitter">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="instagram" class="form-label">Instagram URL</label>
                                <input type="text" value="{{old('instagram', $edit->instagram)}}" name="instagram" class="form-control" id="instagram">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="whatsapp" class="form-label">WhatsApp URL</label>
                                <input type="text" value="{{old('whatsapp', $edit->whatsapp)}}" name="whatsapp" class="form-control" id="whatsapp">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Team Member</button>
                            <a href="{{ route('admin.teams.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection