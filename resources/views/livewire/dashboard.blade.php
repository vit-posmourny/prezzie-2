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
            
            <div class="relative w-full rounded-2xl border bg-white p-4 text-neutral-900 shadow">
            
                <div class="flex justify-between">

                    <x-lucide-scroll class="size-6 text-gray-500 mb-4" />
                    <x-lucide-trash-2 wire:click='delete({{$wishlist->id}})' class="size-6 text-red-700 mb-4 cursor-pointer" />
                    
                </div>

                <a href="{{route('wishes', $wishlist)}}" >

                    <div class="border-yellow-100 border-2 rounded-2xl p-3">

                        <h5 class="mb-1 font-medium leading-none tracking-tight">{{$wishlist->title}}</h5>
                        <div class="text-sm opacity-70">{{$wishlist->uuid}}</div>

                        <span class="bg-gray-100 text-gray-500 rounded-full px-2 text-xs border">Private</span>

                    </div>

                </a>   

            </div>
          
        @endforeach

    </div>
</div>