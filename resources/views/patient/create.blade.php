@extends('layouts.app')

@section('content')
    {{-- @dd($patients) --}}
    <div>
        <h1>Create Patients page</h1>

        <form action="{{ route('patient.store') }}" method="post">
            <div class="row">

                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="">first name</label>
                        <input value="{{ old('fname') }}" type="text" class="form-control" name="fname" id="" aria-describedby="helpId"
                            placeholder="ex: John">
                        <small id="helpId" class="form-text text-danger">
                            @error('fname')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="">last name</label>
                        <input value="{{ old('lname') }}"  type="text" class="form-control" name="lname" id="" aria-describedby="helpId"
                            placeholder="ex: Mereweneza">
                        <small id="helpId" class="form-text text-danger">
                            @error('lname')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                </div>

                <div class="col-md-12 mt-2">
                    <div class="form-group">
                        <label for="">Email</label>
                        <input value="{{ old('email') }}"  type="text" class="form-control" name="email" id="" aria-describedby="helpId"
                            placeholder="ex: john@doe.com">
                        <small id="helpId" class="form-text text-danger">
                            @error('email')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="">Telephone</label>
                        <input value="{{ old('telephone') }}"  type="text" class="form-control" name="telephone" id="" aria-describedby="helpId"
                            placeholder="ex: 0788888">
                        <small id="helpId" class="form-text text-danger">
                            @error('telephone')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                </div>

                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="">Insurance id</label>
                        <input value="{{ old('insurance') }}"  type="text" class="form-control" name="insurance" id="" aria-describedby="helpId"
                            placeholder="ex: 234567">
                        <small id="helpId" class="form-text text-danger">
                            @error('insurance')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary w-100">Save</button>
                </div>
                @csrf

            </div>
        </form>

    </div>
@endsection
