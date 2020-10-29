@extends('layouts.app')

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

                    <h2>Welcome to my cv builder</h2>
                        <a href="{{ route('user-detail.create') }}" role="button" class="btn btn-primary">Build Now</a>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
