@extends('layout.app')

@section('title')
    Course Homepage
@endsection

@section('content-1')
@include('landingPages.components.Home.hero')
@endsection

@section('content-2')
{{-- @include('landingPages.components.Home.sponsor') --}}
@endsection

@section('content-3')
@include('landingPages.components.Home.tools')
@endsection

@section('content-4')
@include('landingPages.components.Home.trusted')
@endsection

@section('content-5')
@include('landingPages.components.Home.testimoni')
@endsection

@section('content-6')
{{-- @include('landingPages.components.Home.designed') --}}
@endsection

@section('content-7')
@include('landingPages.components.Home.ask')
@endsection

@section('content-8')
@include('landingPages.components.Home.startFree')
@endsection



