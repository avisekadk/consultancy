@extends('layout.admin.master')
@section('title','Create Team Member')
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
                    <h3 class="text-center">Add New Team Member</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.teams.store')}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="order" class="form-label">Order</label>
                                <input type="number" value="{{old('order')}}" name="order" class="form-control" id="order">
                                @error('order')
                                <i>{{$message}}</i>
                                @enderror
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="status" class="form-label">Status</label>
                                <select name="status" class="form-select" id="status">
                                    <option value="">Select Status</option>
                                    <option value="1">Active</option>
                                    <option value="0">Inactive</option>
                                </select>
                                @error('status')
                                <i>{{$message}}</i>
                                @enderror
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" value="{{old('name')}}" name="name" class="form-control" id="name">
                            @error('name')
                            <i>{{$message}}</i>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="position" class="form-label">Position</label>
                            <input type="text" value="{{old('position')}}" name="position" class="form-control" id="position">
                            @error('position')
                            <i>{{$message}}</i>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" value="{{old('email')}}" name="email" class="form-control" id="email">
                            @error('email')
                            <i>{{$message}}</i>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="description" class="form-label">Description</label>
                            <textarea class="form-control" name="description" id="description" rows="5">{{old('description')}}</textarea>
                        </div>
                        <div class="mb-3">
                            <label for="image" class="form-label">Image</label>
                            <input type="file" value="{{old('image')}}" name="image" class="form-control" id="image">
                            @error('image')
                            <i>{{$message}}</i>
                            @enderror
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="facebook" class="form-label">Facebook URL</label>
                                <input type="text" value="{{old('facebook')}}" name="facebook" class="form-control" id="facebook">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="twitter" class="form-label">Twitter URL</label>
                                <input type="text" value="{{old('twitter')}}" name="twitter" class="form-control" id="twitter">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="instagram" class="form-label">Instagram URL</label>
                                <input type="text" value="{{old('instagram')}}" name="instagram" class="form-control" id="instagram">
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="whatsapp" class="form-label">WhatsApp URL</label>
                                <input type="text" value="{{old('whatsapp')}}" name="whatsapp" class="form-control" id="whatsapp">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Create Team Member</button>
                            <a href="{{ route('admin.teams.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection