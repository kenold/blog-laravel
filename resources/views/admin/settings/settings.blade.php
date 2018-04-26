@extends('layouts.app')

@section('content')

    @include('admin.includes.error')

    <div class="card">
        <div class="card-header">Edit Blog Settings</div>

        <div class="card-body">
            <form action="{{ route('settings.update') }}">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="title">Site Name</label>
                    <input type="text" name="site_name" value="{{ $settings->site_name }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Address</label>
                    <input type="text" name="address" value="{{ $settings->address }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Contact Phone</label>
                    <input type="text" name="contact_number" value="{{ $settings->contact_number }}" class="form-control">
                </div>
                <div class="form-group">
                    <label for="title">Contact Number</label>
                    <input type="text" name="contact_email" value="{{ $settings->contact_email }}" class="form-control">
                </div>
                            
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Update Settings</button>
                </div>
            </form>
        </div>
    </div>
@endsection