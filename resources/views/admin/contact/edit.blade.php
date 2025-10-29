@extends('layout.admin.master')
@section('title','Edit Contact')
@section('main')
<style>
i{
    color: red;
}
</style>
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    <h3 class="text-center">Edit Contact</h3>
                </div>
                <div class="card-body">
                    <form action="{{route('admin.contact.update',$edit->id)}}" method="POST">
                        @csrf
                        @if (session('success'))
                        <span class="text-success">{{ session('success')}}</span>
                        @endif
                        <div class="mb-3">
                            <label for="name" class="form-label">Full Name</label>
                            <input type="text" value="{{old('name', $edit->name)}}" name="name" class="form-control" id="name">
                            @error('name')
                            <i>{{$message}}</i>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email Address</label>
                            <input type="text" value="{{old('email', $edit->email)}}" name="email" class="form-control" id="email">
                            @error('email')
                            <i>{{$message}}</i>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="phone" class="form-label">Phone</label>
                            <input type="text" value="{{old('phone', $edit->phone)}}" name="phone" class="form-control" id="phone">
                            @error('phone')
                            <i>{{$message}}</i>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="city" class="form-label">City</label>
                            <input type="text" value="{{old('city', $edit->city)}}" name="city" class="form-control" id="city">
                            @error('city')
                            <i>{{$message}}</i>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="course" class="form-label">Course</label>
                            <input type="text" value="{{old('course', $edit->course)}}" name="course" class="form-control" id="course">
                            @error('course')
                            <i>{{$message}}</i>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Message</label>
                            <textarea class="form-control" name="message" id="message" rows="5">{{old('message', $edit->message)}}</textarea>
                            @error('message')
                            <i>{{$message}}</i>
                            @enderror
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Update Contact</button>
                            <a href="{{ route('admin.contact.index') }}" class="btn btn-secondary">Cancel</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection