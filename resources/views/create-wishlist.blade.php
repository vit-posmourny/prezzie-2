<x-layouts.app>

    <div class="w-2/3 mx-auto">

    <div class="flex justify-between">
        <h1 class="text-xl font-bold mb-4 text-gray-700">Nový seznam přání</h1>
       
    </div>

    <form action="/create_wishlist" method="POST" class="flex flex-col gap-4">
        @csrf
        <x-input placeholder="Název" type="text" name="title" />
        <x-primary-button type="submit">Vytvořit přání</x-primary-button>
    </form>


</div>
</x-layouts.app>
