@extends('layouts.master')

@section('content')
    <div class="container">
        <a href="{{ url('users') }}">Kembali</a>

        <div class="row mb-4">
            <div class="col-md-6">
                <div class="mb-2">
                    <label for="name" class="form-label">Nama</label>
                    <input type="text" class="form-control" value="{{ $user->name }}" disabled>

                </div>
                <div class="mb-2">
                    <label for="email" class="form-label">Email</label>
                    <input type="text" class="form-control" value="{{ $user->email }}" disabled>

                </div>
            </div>

        </div>

        <div>

        </div>
    </div>
@endsection
