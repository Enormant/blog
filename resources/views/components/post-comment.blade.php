@props(['comment'])

<div class='flex bg-gray-100 border border-gray-200 rounded-xl p-6 my-6'>
    <div class='mr-2'>
        <img src="https://i.pravatar.cc/100?"  height=40 width=40 alt= "" class='rounded-full'/>
    </div>
    <div>
        <header>
            <h3 class='font-bold'>{{$comment -> author -> name}} </h3>
            <p class='text-xs'> {{ $comment -> created_at -> diffForHumans()}} </p> 
        </header>
        <p>
           {{ $comment -> body}}
        </p>
    </div>
</div>