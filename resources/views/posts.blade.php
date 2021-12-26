<x-layout>
    <div class='grid grid-cols-2 gap-4 '>
        @foreach ($posts as $post) 
           

            <x-post-card :post="$post" />
        @endforeach
    </div>
</x-layout>
