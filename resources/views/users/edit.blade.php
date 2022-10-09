@extends('layouts.master')


@push('styles')
    @livewireStyles
@endpush

@push('scripts')
    @livewireScripts
@endpush

@section('content')
    <div class="container">
        <h1 class="mb-4">Edit Data</h1>
        <a href="{{ url('users') }}">Kembali</a>
        <div class="row mb-4">
            <div class="col-md-6">
                @livewire('user-edit', ['user' => $user])
            </div>

        </div>


    </div>
@endsection
