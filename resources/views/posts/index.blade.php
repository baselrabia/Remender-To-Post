@section('title', 'Home')
@extends('posts.layout')

@section('content')

@foreach ($posts as $post)
@include('partials.post')
@endforeach

@endsection
