<x-layout>
    <div class='posts'>
        @foreach ($posts as $post) 
        <article class='post'>
                <h1><a href='/posts/<?= $post->filename ?>'><?= $post->title; ?></a></h1>
                <div><?= $post->exceprt; ?></div>
            </article>
        @endforeach
    </div>
</x-layout>
