<x-layout>
    <div class='post'>
        <article class='post'>
            <h1 class='blog-title uppercase'>{{$post->title;}} </h1>
            <div class='flex flex-row  py-6'>
               in <div class='px-2  text-indigo-700 '><a href="/category/{{$post->category->slug}}"> {{ $post->category->name}}</a></div>
                by <div class='px-2 text-indigo-700 '><a href="/user/{{$post->user->id}}"> {{ $post->user->name}}</a></div>
            </div>
            <div>{!! $post->body; !!}</div>
        </article>
    </div>
    <div class='py-6'>
     <a href='/' class=' p-2 text-white bg-indigo-700 hover:bg-black uppercase'>Go back</a>
    </div>
    </div>
</x-layout>


