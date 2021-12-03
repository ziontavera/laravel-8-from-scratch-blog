<!doctype html>

<title>Laravel From Scratch Blog</title>
<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
<script defer src="https://unpkg.com/alpinejs@3.5.0/dist/cdn.min.js"></script>

<style>
    html{
        scroll-behavior: smooth;
    }
</style>


<body style="font-family: Open Sans, sans-serif">
    <section class="px-6 py-8">
        <x-nav/>

        {{$slot}}

        @if(Route::current()->getName() != 'edit-profile' && auth()->user()?->username != 'ziontavera')
            <x-footer/>
        @endif
    </section>
    <x-flash-message/>
</body>
