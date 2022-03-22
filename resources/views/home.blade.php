@extends('layouts.app')
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                </div>
            </div>
            
            <a href="{{ route('general.index') }}" class="btn btn-sm btn-primary">General</a>
            <a href="{{ route('about.index') }}" class="btn btn-sm btn-primary">About</a>
            <a href="{{ route('contact.index') }}" class="btn btn-sm btn-primary">Contact</a>
        </div>
    </div>
</div>
@endsection
