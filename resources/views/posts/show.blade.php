<x-layouts.base title="Create new category">
    <div class="card card-primary">
        <div class="card-header">
            <h1>{{$post->title}}</h1>
        </div>
        <div class="card-body">
            <a href="{{route('post.index')}}">back</a>
            <hr>
            <em>{{$post->created_at}}</em>
            <div>{{$post->content}}</div>
        </div>
    </div>
</x-layouts.base>
