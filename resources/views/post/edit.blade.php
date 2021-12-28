<x-layout>
    <section class='width-md mx-auto my-8' >
       <h1 class='py-6 text-center text-xl'>All posts</h1>

<!-- This example requires Tailwind CSS v2.0+ -->

    

<div class="flex flex-col items-center ">
  <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8 ">
    <div class="py-2 align-middle inline-block sm:px-6 lg:px-8">
      <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
        <table class="divide-y divide-gray-200 ">
          
          <tbody class="bg-white divide-y divide-gray-200">
            @foreach ($posts as $post )
            <tr>
              <td class="px-6 py-4 whitespace-nowrap">
                <div class="flex items-center">
                  
                  <div class="ml-4">
                    <div class="text-sm font-medium text-gray-900">
                     {{ $post -> title}}
                    </div>
            
                  </div>
                </div>
              </td>
           
             
              <td class="px-6 py-4 whitespace-nowrap">
                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-green-100 text-green-800">
                  Active
                </span>
              </td>
              
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <a href="/admin/post/{{$post -> id}}/edit" class="text-indigo-600 hover:text-indigo-900">Edit</a>
              </td>
              <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
                <form method="POST" action="/admin/post/{{ $post->id }}">
                    @csrf
                    @method('DELETE')

                    <button class="text-xs text-gray-400" type="submit" >Delete</button>
                </form>
            </td>
            </tr>
            @endforeach
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
    </section>
    <section class='py-6 px-8'>
        <h1 class='py-8 text-center text-xl'>Edit  Post </h1>
        <form action='/admin/post'  method="POST" enctype="multipart/form-data">
         @csrf
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
                    value="{{ old('title') }}"
                    required
             >
 
             @error('title')
                 <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
             @enderror
         </div>
 
    
         <div class="mb-6">
             <label class="block mb-2 uppercase font-bold text-xs text-gray-700"
                    for="picture"
             >
                 Picture
             </label>
 
             <input class="border border-gray-400 p-2 w-full"
                    type="file"
                    name="picture"
                    id="picture"
                    required
             >
 
             @error('picture')
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
             >{{ old('excerpt') }}</textarea>
 
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
             >{{ old('body') }}</textarea>
 
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
                         {{ old('category_id') == $category->id ? 'selected' : '' }}
                     >{{ ucwords($category->name) }}</option>
                 @endforeach
             </select>
 
             @error('category')
                 <p class="text-red-500 text-xs mt-2">{{ $message }}</p>
             @enderror
         </div>
 
         <x-button>Publish</x-button>
        </form>
    </section>
 </x-layout>