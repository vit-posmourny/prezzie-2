<div class="relative w-full rounded-2xl border bg-white p-4 text-neutral-900 shadow">

    <div class="flex justify-between">
        <x-lucide-scroll class="size-6 text-gray-500 mb-4" />
        <x-lucide-thrash-2 wirw:click='delete()' class="size-6 text-red-700 mb-4" />
    </div>

    <h5 class="mb-1 font-medium leading-none tracking-tight">{{$title ?? "toto je title"}}</h5>
    <div class="text-sm opacity-70">{{$description ?? "toto je description"}}</div>
    

    
        <span class="bg-gray-100 text-gray-500 rounded-full px-2 text-xs border">Private</span>
        
        
   
</div>
