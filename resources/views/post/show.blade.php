<x-layout >
    <div class='post container mx-auto px-16'>
        <article >
            <h1 class='blog-title uppercase mx-8'>{{$post->title;}} </h1>
            <div class='flex flex-row  py-6'>
               in <div class='px-2  text-indigo-700 '><a href="/category/{{$post->category->slug}}"> {{ $post->category->name}}</a></div>
                by <div class='px-2 text-indigo-700 '><a href="/user/{{$post->user->id}}"> {{ $post->user->name}}</a></div>
            </div>
            <img src={{ asset('storage/' . $post -> picture) }} />
            <div>{!! $post->body; !!}</div>
        </article>
        <section name='comments' class='my-8 lg:grid-cols-1 lg:gap-8'>
            @if(Auth::user())
             <x-comment-form :post="$post" />
            @endif
            @foreach ($post -> comments as $comment)
               <x-post-comment :comment="$comment"/>
            @endforeach
          
        </section>
    </div>

    
    <div class='py-6'>
         <a href='/' class=' p-2 text-white bg-indigo-700 hover:bg-black uppercase'>Go back</a>
    </div>
    
</x-layout>


