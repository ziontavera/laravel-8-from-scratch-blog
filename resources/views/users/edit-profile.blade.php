<x-layout>

    <x-setting :heading="'Edit Profile: ' . $user->name">
        <form method="POST" action="/users/{{$user->id}}">
            @csrf
            @method("PATCH")
            <x-form.input name="name" :value="old('name', $user->name)"/>
            <x-form.input name="username" :value="old('username', $user->username)"/>
            <x-form.input name="email" type="email" :value="old('email', $user->email)"/>
            <x-form.input name="password" type="password" />

            <div class="flex">
                <x-form.draft-button class="hidden">
                    <a href="/{{$user->username}}/profile" class="bg-gray-400 text-white uppercase font-semibold text-xs py-2 px-2 rounded-2xl hover:bg-gray-500">Cancel</a>
                </x-form.draft-button>
                <x-form.submit-button>Save</x-form.submit-button>
            </div>
    </x-setting>


</x-layout>