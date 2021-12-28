<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <select class=" sm:flex sm:items-center sm:ml-6 h-16 border-0 focus:shadow-none " style="box-shadow:none !important" onchange="location = location.origin+=this.value">
        <option value="" disabled selected>Select a category</option>
        @foreach ($categories as $category)
            <option value="/category/{{$category -> slug}}">
                
                    {{ $category -> name }}
            
            </option>
         @endforeach
     </select>

</div>