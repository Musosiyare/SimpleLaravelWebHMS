@extends('layouts.app')

@section('content')
    <div class="d-flex gap-5 flex-column justify-content-center align-items-center" style="height:80vh">

        <h1 class="text-secondary fw-bold">Welcome To Students Registration System</h1>
        <p class="">
            The student registration system is an essential component of educational institutions that streamlines the process of enrolling students into courses and programs. It serves as a centralized platform for managing student information, course availability, and academic records. This system simplifies and automates various tasks related to student registration, making it more efficient and convenient for both students and administrators.

            With a student registration system, students can easily browse available courses, select their desired classes, and register for them online. The system provides up-to-date information about course schedules, prerequisites, and availability, enabling students to make informed decisions during the registration process. It eliminates the need for manual paperwork, long queues, and potential errors that often occur with traditional registration methods.
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
