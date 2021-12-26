<x-layout :categories="$categories">
    <div class='post grid grid-cols-1'>
        <article >
            <h1 class='blog-title uppercase mx-8'>{{$post->title;}} </h1>
            <div class='flex flex-row  py-6'>
               in <div class='px-2  text-indigo-700 '><a href="/category/{{$post->category->slug}}"> {{ $post->category->name}}</a></div>
                by <div class='px-2 text-indigo-700 '><a href="/user/{{$post->user->id}}"> {{ $post->user->name}}</a></div>
            </div>
            <div>{!! $post->body; !!}</div>
        </article>
        <section name='comments' class='my-8 '>

            <x-post-comment />
            <x-post-comment />
            <x-post-comment />
            <x-post-comment />
        </section>
    </div>

    
    <div class='py-6'>
         <a href='/' class=' p-2 text-white bg-indigo-700 hover:bg-black uppercase'>Go back</a>
    </div>
    
</x-layout>


