@props(['name'])
@error($name)
<small class="text-red-600">{{ $message }}</small>
@enderror