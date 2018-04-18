@extends('layouts.app')

@section('content')
    
    @include('admin.includes.error')

    <div class="card">
        <div class="card-header">Updating category: {{ $category->name }}</div>

        <div class="card-body">
            <form action="{{ route('category.update', ['id' => $category->id]) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" name="name" value="{{ $category->name }}" class="form-control">
                </div>                
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection