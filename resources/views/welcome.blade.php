@extends('layouts.app')

@section('content')
<div class="d-flex gap-5 flex-column justify-content-center align-items-center" style="height:80vh">

    <h1 class="text-secondary fw-bold">Welcome HCPRR</h1>
    <p class="fs-5">
        The system HCPRR in full is Health Center patient Registration Resolver i want to develop it for quick patient registration at a hospital will address the problem of
        time-consuming and manual patient registration processes. Here's a small description of how the system could
        work and the problem it will solve:

        The system will be a user-friendly software application accessible to hospital employees. When an employee needs
        to register a patient, they will launch the application on a computer or mobile device.
    </p>
    <p class="fs-5">
        
        By implementing this system, the hospital employee will be able to register patients quickly and accurately, reducing the time and effort required for manual paperwork. It will streamline the patient registration process, minimize errors, and improve the overall efficiency of the hospital's administrative tasks. Additionally, the centralized storage and easy retrieval of patient records will enhance data management and facilitate better coordination of patient care within the hospital.
    </p>
    <p>
        <a href="{{ route('register') }}">
            <button class="btn btn-lg btn-outline-success px-5 rounded-pill fw-bold">
                START
            </button>
        </a>
    </p>
</div>
@endsection