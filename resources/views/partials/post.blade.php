<div class="content">
    <a href="{{ route('posts.show', [$post->id]) }}">
        <h1 class="title">{{ $post->title }}</h1>
    </a>
    <p><b>Posted:</b> {{ $post->created_at->diffForHumans() }} <b>By:</b> {{ $post->user->name }}</p>
    <p>{!! nl2br(e($post->body)) !!}</p>

    <form method="post" action="{{ route('posts.destroy', [$post->id]) }}">
        @csrf @method('delete')
        <div class="field is-grouped">
            <div class="control">
                <a href="{{ route('posts.edit', [$post->id])}}" class="button is-info is-outlined">
                    Edit
                </a>
            </div>
            <div class="control">
                <button type="submit" class="button is-danger is-outlined">
                    Delete
                </button>
            </div>
        </div>
    </form>
</div>
