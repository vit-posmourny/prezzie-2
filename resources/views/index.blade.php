<x-layouts.app>


    <div class="flex justify-between">
        <h1 class="text-3xl font-bold mb-4 text-gray-700">Moje seznamy přání</h1>

        <a href="{{route('wishlist.create')}}">
            <x-primary-button>Přidat nový seznam</x-primary-button>
        </a>
    </div>

    <hr class="my-4">

    <div class="grid grid-cols-3 gap-2">
      

        @foreach ($wishlists as $wishlist)
            <a href="{{ route('wishes', ['wishlist' => $wishlist->id]) }}" class="block">
                <x-wishlist title="{{ $wishlist->title }}" description="Počet položek: {{ $wishlist->wishes->count() }}" />
            </a>
        @endforeach

    </div>

</x-layouts.app>
