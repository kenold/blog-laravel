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
        <div class="card-header">Update Post</div>

        <div class="card-body">
            <form action="{{ route('post.update', ['id' => $post->id]) }}" method="POST" enctype="multipart/form-data">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" value="{{ $post->title }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="featured">Feautured Image</label>
                    <input type="file" name="featured" class="form-control">
                </div>
                <div class="form-group">
                    <label for="category">Select a Category</label>
                    <select name="category_id" id="category" class="form-control">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}"                                
                                @if($post->category->id == $category->id)
                                    selected
                                @endif                                
                            >
                            {{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="category">Select post tags</label>
                    @foreach($tags as $tag)
                        <div class="checkbox">
                        <label for="tag"><input type="checkbox" name="tags[]" value="{{ $tag->id }}"
                            @foreach($post->tags as $t)
                                @if($tag->id == $t->id)
                                    checked
                                @endif
                            @endforeach                            
                        >
                        {{ $tag->tag }}</label>
                    </div>
                    @endforeach                    
                </div>
                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" id="content" cols="5" rows="5" class="form-control">{{ $post->content }}</textarea>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Submit</button>
                </div>
            </form>
        </div>
    </div>
@endsection