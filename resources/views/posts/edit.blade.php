@section('title', 'Edit Post')
@section('action', route('posts.create'))
@extends('posts.layout')

@section('content')

<h1 class="title">Edit: {{ $post->title }}</h1>

<form method="post" action="{{ route('posts.update', [$post->id]) }}">

    @csrf
    @method('patch')
    @include('partials.errors')

    <div class="field">
        <label class="label">Title</label>
        <div class="control">
            <input type="text" name="title" value="{{ $post->title }}" class="input" placeholder="Title" minlength="5" maxlength="100" required />
        </div>
    </div>

    <div class="field">
        <label class="label">Content</label>
        <div class="control">
            <textarea name="body" class="textarea" placeholder="body" minlength="5" maxlength="2000" required rows="10">{{ $post->body }}</textarea>
        </div>
    </div>


    <div class="field">
        <div class="control">
            <button type="submit" class="button is-link is-outlined">Update</button>
        </div>
    </div>

</form>

@endsection
