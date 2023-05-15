@extends('layouts.app')

@section('content')
    {{-- @dd($patients) --}}
    <div>
        <h1>Edit Patients page</h1>

        <form action="{{ route('patient.update',$patient->id) }}" method="post">
            @method('patch')
            @csrf
            <div class="row">

                <div class="col-md-6 mt-2">
                    <div class="form-group">
                        <label for="">first name</label>
                        <input value="{{ $patient->firstname }}" type="text" class="form-control" name="fname" id="" aria-describedby="helpId"
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
                        <input value="{{ $patient->lastname }}"  type="text" class="form-control" name="lname" id="" aria-describedby="helpId"
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
                        <input value="{{ $patient->email }}"  type="text" class="form-control" name="email" id="" aria-describedby="helpId"
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
                        <input value="{{ $patient->telephone }}"  type="text" class="form-control" name="telephone" id="" aria-describedby="helpId"
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
                        <input value="{{ $patient->insurance_id }}"  type="text" class="form-control" name="insurance" id="" aria-describedby="helpId"
                            placeholder="ex: 234567">
                        <small id="helpId" class="form-text text-danger">
                            @error('insurance')
                                {{ $message }}
                            @enderror
                        </small>
                    </div>
                </div>

                <div class="col-md-12 mt-3">
                    <button type="submit" class="btn btn-primary w-100">Save Changes</button>
                </div>
                @csrf

            </div>
        </form>

    </div>
@endsection
