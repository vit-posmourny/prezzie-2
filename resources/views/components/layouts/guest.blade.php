<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
</head>

<body class="bg-zinc-50">


    <div class="flex h-screen">

        <aside class="h-full w-1/3 flex flex-col justify-center">
            {{ $slot }}
        </aside>
        
        
        <main class="h-full w-2/3 flex justify-end bg-white border">
            <div class="h-1/2 relative -right-96 mt-24">
                <h1 class="text-3xl text-gray-700 font-bold mb-8">Vytvářej seznam přání, která můžeš sdílet</h1>
                <img src="{{asset('images/app-2.png')}}" class="shadow-2xl " alt="">
            </div>
        </main>    
    </div>

</body>

</html>
