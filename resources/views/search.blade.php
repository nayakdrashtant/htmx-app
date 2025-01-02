<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/htmx.org@2.0.4"></script>
</head>
<body class="antialiased bg-slate-700">
<div id="search-form" class="flex justify-center px-10 py-10 w-full">
    <div class="flex w-1/2 space-x-4">
        <div class="flex w-full">
            <input type="text"
                   name="search-term"
                   class="w-full rounded-md me-2"
            />
            <button
                hx-get="/search"
                hx-target="#search-results"
                hx-include="[name='search-term']"
                class="bg-indigo-600 text-white px-6 text-lg font-semibold py-4">
                Search
            </button>
        </div>
    </div>
</div>
<div id="search-results"></div>
</body>
</html>
