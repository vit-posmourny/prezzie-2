<div class="relative w-full rounded-2xl border bg-white p-6 text-neutral-900 border-gray-300 flex gap-4">

    <x-lucide-gift class="size-6 text-gray-500 mb-4" />

    <div>
        <h5 class="mb-1 font-medium leading-none tracking-tight">{{$title ?? "toto je title"}}</h5>
        
        <div class="flex items-center gap-2 mb-4">
            <x-lucide-wallet class="size-4 text-gray-500" />
            <p class="text-sm opacity-70">{{$price ?? ""}} Kč</p>
        </div>

        <a href="{{$url}}" target="_blank" class="text-blue-500 hover:underline cursor-pointer text-xs">Přejít do obchodu ></a>
    </div>
    

    
        
        
   
</div>
