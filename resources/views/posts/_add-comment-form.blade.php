@auth
    <x-panel>
        <form action="/posts/{{$post->slug}}/comments" method="POST">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/60?u={{ auth()->id()}}" alt="User" width="40" height="40" class="rounded-full">
                <h2 class="ml-4">Want to participate?</h2>
            </header>

            <div class="mt-5">
                <textarea
                    name="body"
                    rows="5"
                    class="w-full text-sm focus:outline-none focus:ring"
                    placeholder="Type comment here."
                    required></textarea>
                <x-form.error name="body"/>
            </div>

            <div class="flex justify-end mt-5">
                <x-form.submit-button>Post</x-form.submit-button>
            </div>

        </form>
    </x-panel>

@else
    <p class="font-semibold">
        <a href="/register" class="hover:underline text-blue-600">Register</a> or <a href="/login" class="hover:underline text-blue-600">Login</a> to leave a comment.
    </p>
@endauth