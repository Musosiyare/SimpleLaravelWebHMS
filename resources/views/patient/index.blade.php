@extends('layouts.app')

@section('content')
    {{-- @dd($patients) --}}
    <div>
        <h1>All patients Page</h1>

        <div class="my-2">
            @include('messages')
        </div>

        <div class="row">
            @foreach ($patients as $patient)
                <div class="col-md-6 my-2">
                    <div class="card">
                        <div class="card-body">
                            <h6 class="card-title">{{ strtoupper($patient->firstname) }} {{ ucfirst($patient->lastname) }}
                            </h6>
                            <p class="card-text my-0">Email: {{ $patient->email }}</p>
                            <p class="card-text my-0">Telephone: {{ $patient->telephone }}</p>
                            <p class="card-text my-0">Card Number: {{ $patient->insurance_id }}</p>
                            <p class="card-text my-0">Date Registered: {{ $patient->created_at->diffForHumans() }}</p>
                            <p class="card-text my-0">Registered by: {{ Auth::user()->name }}</p>
                        </div>
                        <div class="card-footer d-flex justify-content-between gap-3">
                            <a class="w-100" href="{{ route('patient.edit', $patient->id) }}">
                                <button class="btn btn-sm btn-success w-100">Edit</button>
                            </a>
                            <form class="w-100" action="{{ route('patient.destroy', $patient->id) }}" method="post">
                                @method('delete')
                                @csrf
                                <button type="submit" class="btn btn-sm btn-danger w-100">Remove</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection
