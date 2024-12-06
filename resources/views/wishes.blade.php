<x-layouts.app title="Jsem title">


    <div class="flex justify-between">
        <h1 class="font-semibold text-gray-800 text-4xl mb-8">{{ $wishlist->title }}</h1>
        <h1 class="font-semibold text-gray-800 text-4xl mb-8">{{ $wishlist->wishes->sum('price') }} Kč</h1>
    </div>


    <div class="grid grid-cols-4 gap-2">

        <a href="{{route('wish.create', [$wishlist->id])}}" class="w-full border border-dashed rounded-2xl p-8 border-gray-400 flex items-center justify-center hover:shadow">

            <x-lucide-plus class="size-8 text-gray-600" />
        </a>

        @foreach ($wishlist->wishes as $wish)
            <x-wish url="{{ $wish->url }}" price="{{ $wish->price }}" title="{{$wish->title}}" />
        @endforeach
    </div>

</x-layouts.app>
