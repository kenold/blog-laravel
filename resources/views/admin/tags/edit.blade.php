@extends('layouts.app')

@section('content')
    
    @include('admin.includes.error')

    <div class="card">
        <div class="card-header">Updating tag: {{ $tag->tag }}</div>

        <div class="card-body">
            <form action="{{ route('tag.update', ['id' => $tag->id]) }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Tag Name</label>
                    <input type="text" name="tag" value="{{ $tag->tag }}" class="form-control">
                </div>                
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update</button>
                </div>
            </form>
        </div>
    </div>
@endsection