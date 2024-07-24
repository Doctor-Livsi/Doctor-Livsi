<x-layouts.base title="Create new category">
    <div class="card card-primary">
        <div class="card-header">
            <h1>{{$category->title}}</h1>
        </div>
        <div class="card-body">
            <a href="{{route('categories.index')}}">back</a>
            <hr>
            <em>{{$category->created_at}}</em>
            <div>{{$category->description}}</div>
            <hr>
            <a href="{{route('categories.edit',[$category->id])}}">Edit</a>

            <form method="post" action="{{ route('categories.destroy', [$category->id]) }}">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger mb-1">Delete record</button>
            </form>
        </div>
    </div>
</x-layouts.base>
