@extends('layouts.app')

@section('content')
    <div class="d-flex gap-5 flex-column justify-content-center align-items-center" style="height:80vh">

        <h1 class="text-secondary fw-bold">Welcome to laravel simple project</h1>
        <p class="">
            Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis neque, omnis itaque nemo distinctio odio
            nesciunt aspernatur culpa vel rerum autem sit sed nihil sunt accusamus maxime esse cupiditate eaque.
        </p>
        <p>
            <a href="{{ route('register') }}">
                <button class="btn btn-lg btn-outline-primary px-5 rounded-pill">
                    GET STARTED
                </button>
            </a>
        </p>
    </div>
@endsection
