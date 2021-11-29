@props(['name'])

@error($name)
        <p class="text-red-500 text-xs mt-4">{{$message}}</p>
@enderror