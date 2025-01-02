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
           <div class="flex w-1/2 space-x-4 justify-center">
                <button
                    hx-get="/hello-world"
                    hx-target="#content"

                    class="bg-indigo-600 text-white p-4 text-lg font-semibold rounded-md">
                    Load Content
                </button>
           </div>
       </div>
        <div id="content" class="flex justify-center text-white"></div>
    </body>
</html>
