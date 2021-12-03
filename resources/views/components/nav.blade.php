<nav class="md:flex md:justify-between md:items-center">
    <div>
        <a href="/">
            <img src="/images/logo.svg" alt="Laracasts Logo" width="165" height="16">
        </a>
    </div>

    <div class="mt-8 md:mt-0 flex items-center">
        @auth
            <x-dropdown>
                <x-slot name="trigger">
                    <div class="flex">
                        <button class="text-xs font-bold uppercase mr-2">Welcome, {{ auth()->user()->name}}!</button>
                        <img src="https://i.pravatar.cc/60?u={{auth()->user()->id}}" alt="Avatar" width="60" height="60" class="rounded-xl">
                    </div>
                </x-slot>

                <x-dropdown-item href="/{{auth()->user()->username}}/profile" :active="request()->is('{{auth()->user()->username}}/profile')">Profile</x-dropdown-item>
                @admin
                    <x-dropdown-item href="/admin/posts" :active="request()->is('admin/posts')">All Posts</x-dropdown-item>
                    <x-dropdown-item href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post</x-dropdown-item>
                @endadmin
                <x-dropdown-item href="#" x-data="{}" @click.prevent="document.querySelector('#logout-form').submit()">Logout</x-dropdown-item>

                <form id="logout-form" action="/logout" method="POST" class="hidden">
                    @csrf
                </form>
            </x-dropdown>


        @else
            <a href="/register" class="text-xs font-bold uppercase">Register</a>
            <a href="/login" class="ml-6 text-xs font-bold uppercase">Log in</a>
        @endauth
        @if(Route::current()->getName() != 'edit-profile' && auth()->user()?->username != 'ziontavera')
            <a href="#newsletter"
            class="bg-blue-500 ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-5">
                Subscribe for Updates
            </a>
        @endif
    </div>
</nav>