@extends('layouts.app')

@section('content')

    @include('admin.includes.error')

    <div class="card">
        <div class="card-header">Create a new tag</div>

        <div class="card-body">
            <form action="{{ route('tag.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Tag Name</label>
                    <input type="text" name="tag" class="form-control">
                </div>                
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection