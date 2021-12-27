@props(['post'])
<form method="POST" action="/post/{{$post -> id}}/comments" class='bg-gray-100 border border-gray-200 rounded-xl p-6 my-6'>
    @csrf

    <header class='flex items-center py-4' >
        <img src='https://i.pravatar.cc/60?u={{auth()->id()}}' alt='' width="40" height="40" class='rounded-full ' />
        <h2 class='ml-4'> Share your thoughts. </h2>
    </header>
    <div>
        <textarea name='body' class='w-full text-sm rounded-lg focus:outline' cols='30' rows='5' placeholder=" type your comment here"></textarea>
    </div>

    <div class='flex justify-end'>
        <button type='submit' class='bg-indigo-600 text-white px-6 py-1 my-4  uppercase hover:bg-indigo-900 rounded-xl'> Post </button>
    </div>
</form>