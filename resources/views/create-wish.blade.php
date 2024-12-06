<x-layouts.app>

    <div class="w-2/3 mx-auto">

    <div class="flex justify-between">
        <h1 class="text-xl font-bold mb-4 text-gray-700">Nové přání na seznam - {{$wishlist->title}}</h1>
       
    </div>

    <form action="/wish/{{$wishlist->id}}" method="POST" class="flex flex-col gap-4">
        @csrf

        <x-input placeholder="Název" type="text" name="title" />
        <x-input placeholder="Cena" type="number" name="price" />
        <x-input placeholder="URL" type="url" name="url" />
        <x-input type="hidden" name="wishlist_id" value="{{$wishlist->id}}"/>
        <x-primary-button type="submit">Vytvořit přání</x-primary-button>
    </form>


</div>
</x-layouts.app>
