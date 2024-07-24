<x-layouts.base title="Categories in TRASH">
    <div class="card card-primary">
        <div class="card-header">
            <h1>Categories in TRASH</h1>
        </div>
        <div class="card-body">
        <hr>
        <table class="table">
            <tbody>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>created_at</th>
                    <th>Restore</th>
                    <th>Delete</th>
                </tr>
                @foreach ($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->title}}</td>
                    <td>{{$category->created_at}}</td>
                    <td>
                        <form method="POST" action="{{ route('categories.restore',[$category->id]) }}">
                            @csrf
                            @method('PUT')
                            <button type="submit" class="btn btn-primary">Restore</button>
                        </form>
                    </td>
                    <td>
                        <form method="POST" action="{{ route('categories.remove',[$category->id]) }}">
                            @csrf
                            @method('DELETE')
                            <button  type="submit" class="btn btn-danger">Delete Forewer</button>
                        </form>
                    </td>
                </tr>
                @endforeach
        </tbody>
        </table>
        </div>
    </div>
    <script src="{{ asset( 'js/app.js') }}"></script>
</x-layouts.base>
