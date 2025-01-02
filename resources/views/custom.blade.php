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
<div class="flex justify-center px-10 py-10 w-full">
    <div class="mx-auto max-w-5xl text-white p-4">
        <h2 class="text-center mb-5">Account for {{ mask_value('Lorem ipsum dolor','*')}}</h2>
        <ul class="mx-auto text-center">
            @foreach($items as $item)
                <li class="px-2 w-60 py-2 border-2 rounded-md mt-4 text-center hover:bg-slate-500 cursor-pointer flex justify-between items-center">
                    <span class="bg-slate-900 p-2 text-sm rounded-md">Select:</span> {{ mask_account($item) }}
                </li>
            @endforeach
        </ul>
    </div>
</div>
</body>
</html>
