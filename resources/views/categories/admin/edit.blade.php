<x-layouts.base title="Edit category">
    <div class="card card-primary">
        <div class="card-header">
            <h1>Edit category</h1>
        </div>
        <div class="card-body">
            <form method="post" action="{{route('categories.update', [ $category->id ])}}">
                @csrf
                @method('PUT')
                Slug-------: <input type="text" name="slug" class="form-control form-control-lg" value="{{ old('slug') ?? $category->slug }}" /><br />
                @error('slug')</div>{{ $message }}<br></div>@enderror

                Title------: <input type="text" class="form-control form-control-lg" name="title" value="{{ old('title') ?? $category->title }}" /><br />
                Description: <textarea name="description" class="form-control" rows="4" >{{ $category->description }}</textarea><br />
                <button class="btn btn-quaternary">Update</button>
            </form>
        </div>
    </div>
</x-layouts.base>
