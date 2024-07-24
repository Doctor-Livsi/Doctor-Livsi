<x-layouts.base title="Create new category">
    <div class="card card-primary">
        <div class="card-header">
        </div>
        <div class="card-body">
            <a href="{{route('post.index')}}">back</a>
        <form method="POST" action="{{route('post.store')}}">
            @csrf
            Title--: <input type="text" name="title" /><br />
            Content: <textarea name="content"></textarea><br />
            <button>Send</button>
        </form>
        </div>
    </div>
</x-layouts.base>
