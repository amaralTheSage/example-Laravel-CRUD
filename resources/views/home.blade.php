@extends('layouts/layout')

@section('content')
    @include('components/form')

    @foreach ($posts as $post)
        @include('components/postCard')
    @endforeach
@endsection
