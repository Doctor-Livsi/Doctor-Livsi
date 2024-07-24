Hello, post

@if ($rand > 5)
    <div>rand: {{ $rand }}</div>
@else
    <div>time: {{ $time }}</div>
@endif
<hr>
@foreach ($items as $item)
    <div>{{$item}}</div>
@endforeach
