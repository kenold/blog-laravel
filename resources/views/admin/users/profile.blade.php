@extends('layouts.app')

@section('content')

    @include('admin.includes.error')

    <div class="card">
        <div class="card-header">Edit your profile</div>

        <div class="card-body">
            <form action="{{ route('user.profile.update') }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="name">User Name</label>
                    <input type="text" name="name" value="{{ $user->name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" value="{{ $user->email }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control">
                </div>  
                <div class="form-group">
                    <label for="avatar">Upload new avatar</label>
                    <input type="file" name="avatar" class="form-control">
                </div>
                <div class="form-group">
                    <label for="facebook">Facebook Profile</label>
                    <input type="text" name="facebook" value="{{ $user->profile->facebook }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="youtube">YouTube Profile</label>
                    <input type="text" name="youtube" value="{{ $user->profile->youtube }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="facebook">About you</label>
                    <textarea name="about" id="about" cols="6" rows="6" class="form-control">{{ $user->profile->about }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update Profile</button>
                </div>
            </form>
        </div>
    </div>
@endsection