<x-layout>

    <x-setting heading="New Post">
        <form method="POST" action="/admin/posts" enctype="multipart/form-data">
            @csrf
            <x-form.input name="title"/>

            <x-form.input name="slug"/>

            <x-form.input name="thumbnail" type="file" />
            <x-form.textarea name="excerpt"></x-form.textarea>
            <x-form.textarea name="body"></x-form.textarea>
            <x-form.field>
                <x-form.label name="category" />

                <select name="category_id" id="category_id">
                    @php
                        $categories = \App\Models\Category::all();
                    @endphp

                    @foreach($categories as $category)
                        <option value="{{$category->id}}"
                                {{old('category_id') == $category->id ? 'selected' : ''}}
                            >{{$category->name}}</option>
                    @endforeach

                </select>

                <x-form.error name="category"/>
            </x-form.field>

            <x-form.submit-button>Submit</x-form.submit-button>
        </form>
    </x-setting>


</x-layout>