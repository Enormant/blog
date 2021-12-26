@props(['post'])

<article class="max-w-sm w-full lg:max-w-full lg:flex items-stretch">
    <div class="h-48 lg:h-auto lg:w-48 flex-none bg-cover rounded-t lg:rounded-t-none lg:rounded-l text-center overflow-hidden" style="background-image: url('/assets/card-left.jpg')" title="Woman holding a mug">
    </div>
    <div class="border-r border-b border-l border-gray-400 lg:border-l-0 lg:border-t lg:border-gray-400 bg-white rounded-b lg:rounded-b-none lg:rounded-r p-4 flex flex-col justify-between leading-normal">
      <div class="mb-2">
        <div class="text-gray-900 font-bold text-xl mb-2 min-h-20 leading-none"><a href='/posts/{{$post->id}}'>{{$post -> title}}</a></div>
        <p class="text-gray-700 text-base">{{$post -> excerpt}}</p>
      </div>
      <div class="flex items-left">
        <div class=" py-2 ">
            <span class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
               <a href="/category/{{$post->category->slug}}">#{{$post->category->name}}</a>
            </span>
        </div>
      </div>
      <div class="flex items-center">
        <img class="w-10 h-10 rounded-full mr-4" src="/assets/jonathan.jpg" alt="Avatar of Jonathan Reinink">
        <div class="text-sm">
          <p class="text-gray-900 leading-none"><a href="/user/{{$post->user->id}}">{{ $post -> user -> name}}</a></p>
          <p class="text-gray-600">{{ $post -> published_at }}</p>
        </div>
      </div>
    </div>
</article
>

