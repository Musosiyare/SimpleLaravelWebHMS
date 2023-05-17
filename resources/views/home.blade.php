@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header fs-4">{{ __('Dashboard') }}</div>

                <div class="card-body fs-5 bg-secondary text-white">
                    @if (session('status'))
                        <div class="alert alert-success fw-bold" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in! Please Click on Top right drop down to make any operation') }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
