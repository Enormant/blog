<x-layout>
    <div class='post'>
        <article class='post'>
            <h1 class='blog-title uppercase'>{{$post->title;}} </h1>
            <p>category: {{ $post->category->name}}</p>
            <div>{!! $post->body; !!}</div>
        </article>
    </div>
    <a href='/' class=' bg-indigo-700 hover:bg-indigo-800 inline-flex items-center h-8 px-4 m-2 text-sm text-indigo-100 uppercase'>Go back</b>
    </div>
</x-layout>


