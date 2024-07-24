<x-layouts.base title="Create new category">
    <div class="card card-primary">
        <div class="card-header">
            <h1>Add Category</h1>
            <a href="{{route('categories.index')}}">back</a>
        </div>
        <div class="card-body">
            <form method="POST" action="{{route('categories.store')}}">
                @csrf
                <x-controls.input name="slug" label="Short url" id="category-slug" />
                <x-controls.input name="title" label="Title" />
                Description: <textarea name="description" class="form-control" rows="2">{{old('description')}}</textarea><br />
                <button class="btn btn-success">Сохранить</button>
            </form>
        </div>
    </div>
</x-layouts.base>
