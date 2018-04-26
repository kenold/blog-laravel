@extends('layouts.app')

@section('content')

    @include('admin.includes.error')

    <div class="card">
        <div class="card-header">Create a new user</div>

        <div class="card-body">
            <form action="{{ route('user.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">User Name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Email</label>
                    <input type="email" name="email" class="form-control">
                </div>              
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Add User</button>
                </div>
            </form>
        </div>
    </div>
@endsection