
<x-layout>
   <section class='py-6 px-8'>
       <h1>Publish a new post </h1>
       <form action="/admin/post/{{$post -> id}}"  method="POST" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="title"
            >
                Title
            </label>

            <input class="border border-gray-400 p-2 w-full"
                   type="text"
                   name="title"
                   id="title"
                   value="{{ old('title', $post->title) }}"
                   required
            >

            @error('title')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>


        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="excerpt"
            >
                Excerpt
            </label>

            <textarea class="border border-gray-400 p-2 w-full"
                   name="excerpt"
                   id="excerpt"
                   required
            >{{ old('excerpt', $post -> excerpt) }}</textarea>

            @error('excerpt')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="body"
            >
                Body
            </label>

            <textarea class="border border-gray-400 p-2 w-full"
                   name="body"
                   id="body"
                   required
            >{{ old('body', $post -> body) }}</textarea>

            @error('body')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <div class="mb-6">
            <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                   for="category_id"
            >
                Category
            </label>

            <select name="category_id" id="category_id">
                @foreach (\App\Models\Category::all() as $category)
                    <option
                        value="{{ $category->id }}"
                        {{ old('category_id', $post -> category_id) == $category->id ? 'selected' : '' }}
                    >{{ ucwords($category->name) }}</option>
                @endforeach
            </select>

            @error('category')
                <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
            @enderror
        </div>

        <x-button>Update</x-button>
       </form>
   </section>
</x-layout>