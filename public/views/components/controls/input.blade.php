@props([
    'name',
    'label',
    'type' => 'text',
    'id' => null
])

@php
// не совсем круто, можно добавить помимо шаблона класс компонента
if($id === null){
    $id = "field-$name";
    //$id = $name . '-' . bin2hex(random_bytes(8));
}
@endphp

<label for="{{ $id }}" class="form-label">{{ $label }}</label>
<input
    type="{{ $type }}"
    class="form-control @error($name) is-invalid @enderror"
    id="{{ $id }}"
    name="{{ $name }}"
    value="{{ old($name) }}"
>
@error($name)
    <div class="invalid-feedback">{{ $message }}</div>
@enderror
