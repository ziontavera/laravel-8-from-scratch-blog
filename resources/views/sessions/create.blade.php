<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-lg mx-auto mt-10">
            <x-panel>
                <h1 class="text-center mb-5 font-bold text-xl">Log In</h1>
                <form method="POST" action="/login">
                    @csrf
                    <x-form.input name="email" type="email" />
                    <x-form.input name="password" type="password"/>
                    <x-form.submit-button>Log In</x-form.submit-button>
                </form>
            </x-panel>
        </main>
    </section>
</x-layout>