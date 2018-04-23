@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Posts</div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Title</th>
                    <th>Image</th>
                    <th colspan="2">Actions</th>            
                </thead>
                <tbody>
                    @foreach($posts as $post)
                        <tr>
                            <td><img src="{{ $post->featured }}" alt="{{ $post->title }}" height="50px"></td>
                            <td>{{ $post->title }}</td>
                            <td><a href="">Edit</a></td>
                            <td><a href="{{ route('post.delete', ['id' => $post->id]) }}">Delete</a></td>
                        </tr>                
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>    
@endsection