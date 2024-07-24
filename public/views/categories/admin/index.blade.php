<x-layouts.base title="Create new category">
    <div class="card card-primary">
        <div class="card-header">
            <h1>Category</h1>
        <a href="{{route('categories.create') }}">Add category</a> |
        <a href="{{route('categories.trash') }}">Trash</a> |
        </div>
        <div class="card-body">
            @foreach ($categories as $category)
            <h2>{{$category->title}}</h2>
            <em>{{$category->created_at}}</em>
            <a href="{{route('categories.show',[$category->id]) }}">more...</a>
            <hr>
            @endforeach
            <script src="{{ asset( 'js/app.js') }}"></script>
        </div>
    </div>
</x-layouts.base>
