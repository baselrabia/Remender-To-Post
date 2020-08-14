@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    You are logged in!
                </div>
            </div>
            <br>
            <div class="card">

                <div class="card-body">


                    <div class="text-center">

                        Publish your new Post ...
                        <a href="{{ route('posts.create') }}" class="button btn btn-primary center">
                            <strong>New Post</strong>
                        </a>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
