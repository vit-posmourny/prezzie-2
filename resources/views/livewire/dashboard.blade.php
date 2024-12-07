<div>
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

            <div class="relative w-full rounded-2xl border bg-white p-4 text-neutral-900 shadow">

                <div class="flex justify-between">
                    <x-lucide-scroll class="size-6 text-gray-500 mb-4" />
                    <x-lucide-trash-2 wire:click='delete()' class="size-6 text-red-700 mb-4" />
                </div>

                <h5 class="mb-1 font-medium leading-none tracking-tight">{{$wishlist->title}}</h5>
                <div class="text-sm opacity-70">{{$wishlist->uuid}}</div>

                <span class="bg-gray-100 text-gray-500 rounded-full px-2 text-xs border">Private</span>
                
            </div>
        </a>
        @endforeach

    </div>
</div>