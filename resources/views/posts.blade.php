<x-layout>
    <div class='posts'>
        @foreach ($posts as $post) 
        <article class='post'>
                <h1><a href='/posts/{{$post->id}}'> {{$post->title }}</a></h1>
                <div><a href="/category/{{$post->category->slug}}">{{$post->category->name}}</a></div>
                <div><?= $post->excerpt; ?></div>
            </article>
        @endforeach
    </div>
</x-layout>
