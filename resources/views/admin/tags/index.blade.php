@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Tags</div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Tag Name</th>
                    <th colspan="2">Actions</th>            
                </thead>
                <tbody>
                    @foreach($tags as $tag)
                        <tr>
                            <td>{{ $tag->tag }}</td>
                            <td><a href="{{ route('tag.edit', ['id' => $tag->id]) }}">Edit</a></td>
                            <td><a href="{{ route('tag.delete', ['id' => $tag->id]) }}">Delete</a></td>
                        </tr>                
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>    
@endsection