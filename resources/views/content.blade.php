@extends('master')

@section('contents')
    <!-- Navbar -->
    @include('contents.nav')
    <!-- Banner -->
    @include("contents.banner")
    <!-- About -->
    @include('contents.about')
    <!-- User Guide -->
    @include('contents.guide')
    <!-- Features -->
    @include('contents.features')
    <!-- FaQ -->
    @include('contents.faq')
    <!-- Download -->
    @include('contents.download')
@endsection