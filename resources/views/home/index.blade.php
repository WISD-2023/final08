@extends('layouts.master')

@section('page-title', '首頁')

@section('page-style')
    <!-- Core theme CSS (includes Bootstrap)-->
    <link href="{{ asset('css/home-styles.css') }}" rel="stylesheet"/>
@endsection

@section('page-content')

    @include('home.shared.header')

    <!-- Page Content-->

@endsection
