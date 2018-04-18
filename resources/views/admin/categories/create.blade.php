@extends('layouts.app')

@section('content')
    @if(count($errors) > 0)
        <ul class="list-group mb-2">
            @foreach($errors->all() as $error)
                <li class="list-group-item text-danger">
                    {{ $error }}
                </li>
            @endforeach
        </ul>
    @endif

    <div class="card">
        <div class="card-header">Create a new category</div>

        <div class="card-body">
            <form action="{{ route('category.store') }}" method="POST">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Name</label>
                    <input type="text" name="name" class="form-control">
                </div>                
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection