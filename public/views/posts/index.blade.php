<x-layouts.base title="Create new post">
    <div class="card card-primary">
        <div class="card-header">
        <h1>Hello, post</h1>
    </div>
    <div class="card-body">
        <a href="/posts/create">Add post</a>
        @foreach ($posts as $post)
            <h2>{{$post->title}}</h2>
            <em>{{$post->created_at}}</em>
            <a href="/posts/{{$post->id}}">more...</a>
            <hr>
        @endforeach
    </div>
    </div>
</x-layouts.base>
