@extends('layouts.app')

@section('content')
    @include('particles.banner',["banners" => $banners ])

@endsection

