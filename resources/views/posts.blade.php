

<x-layout :categories="$categories">
    <div class='grid grid-cols-2 gap-4 '>
        @foreach ($posts as $post) 
           

            <x-post-card :post="$post" />
        @endforeach
    </div>
    <div class='grid grid-cols-1 gap-4 px-2 py-8'>
        {{ $posts -> links()}}
    </div>
</x-layout>
