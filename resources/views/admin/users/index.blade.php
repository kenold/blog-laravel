@extends('layouts.app')

@section('content')
    <div class="card">
        <div class="card-header">Users</div>

        <div class="card-body">
            <table class="table table-hover">
                <thead>
                    <th>Image</th>
                    <th>Name</th>
                    <th colspan="2">Actions</th>            
                </thead>
                <tbody>
                    @foreach($users as $user)
                        <tr>
                            <td>
                                @if($user->profile->avatar)
                                    <img src="{{ asset($user->profile->avatar) }}" alt="{{ $user->name }}" width="60px">
                                @else
                                    <img src="{{ asset('uploads/avatars/no-avatar.jpg') }}" alt="{{ $user->name }}" width="60px">
                                @endif
                            </td>
                            <td>{{ $user->name }}</td>
                            <td>
                                @if($user->admin)
                                    <a href="{{ route('user.revoke', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Revoke Admin</a>
                                @else
                                    <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-success">Make Admin</a>
                                @endif
                            </td>
                            <td>
                                @if(Auth::id() !== $user->id)
                                    <a href="{{ route('user.delete', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Delete</a>
                                @endif
                            </td>
                        </tr>                
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>    
@endsection