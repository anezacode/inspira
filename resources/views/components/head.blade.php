<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>{{ $ac }} {{ $name }} {{ $version }}</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap" rel="stylesheet">
<link rel="shortcut icon" href="{{ asset('favicon.ico') }}" type="image/x-icon">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<style>
    br, button, a, input {
        outline: none;
        user-select: none;
    }

    #awards-1 svg, #awards-2 svg, #awards-3 svg {
        width: 2.4rem;
        height: 2.4rem;
        padding: 1px;
        color: #fff;
    }
</style>
{{-- @vite('resources/css/app.css') --}}

<script>
if ('serviceWorker' in navigator) {
    navigator.serviceWorker.getRegistrations().then(function(registrations) {
        for(let registration of registrations) {
            registration.unregister();
        }
    });
}
</script>
