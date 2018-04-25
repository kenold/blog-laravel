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
                            <td><img src="{{ asset($user->profile->avatar) }}" alt="{{ $user->name }}" width="60px"></td>
                            <td>{{ $user->name }}</td>
                            <td>
                                @if($user->admin)
                                    <a href="{{ route('user.revoke', ['id' => $user->id]) }}" class="btn btn-sm btn-danger">Revoke Admin</a>
                                @else
                                    <a href="{{ route('user.admin', ['id' => $user->id]) }}" class="btn btn-sm btn-success">Made Admin</a>
                                @endif
                            </td>
                            <td>Delete</td>
                        </tr>                
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>    
@endsection