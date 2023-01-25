@extends('layouts.master')

@prepend('styles')
    @vite(['resources/sass/app.scss'])
@endprepend

@section('app')
    @include('partials.app_header')
    @include('partials.main_app')
@endsection

@prepend('scripts')
    @vite(['resources/js/app.js'])
@endprepend
