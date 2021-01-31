<form method="post" {{ $attributes }}>
    @csrf
    @method($method)
    <input type="hidden" name="x_origin_name" value="{{ $name }}">
    {{ $slot }}
</form>