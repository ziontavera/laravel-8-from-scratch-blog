@props(['comment'])

<x-panel class="bg-gray-50">
    <article class="flex space-x-3">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/60?u={{$comment->user_id}}" alt="Avatar" width="60" height="60" class="rounded-xl">
        </div>
        <div>
            <header class="mb-4">
                <h3 class="font-bold">{{$comment->author->username}}</h3>
            </header>
            <p class="text-xs">
                Posted
                <time>{{$comment->created_at->format('F j, Y, g:i a')}}</time>
            </p>

            <p>
                {{$comment->body}}

            </p>
        </div>
    </article>
</x-panel>