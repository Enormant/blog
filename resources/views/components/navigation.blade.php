@props(['categories'])

<nav x-data="{ open: false }" class="bg-white border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="flex justify-between h-16">
            <div class="flex">
                <!-- Logo -->
                <div class="shrink-0 flex items-center">
                    <a href="{{ route('posts') }}">
                        <x-application-logo class="block h-10 w-auto fill-current text-gray-600" />
                    </a>
                </div>

                <!-- Navigation Links -->
                <div class="hidden space-x-8 sm:-my-px sm:ml-10 sm:flex">
                    <x-nav-link :href="route('posts')" :active="request()->routeIs('dashboard')">
                        {{ __('Posts') }}
                    </x-nav-link>
                </div>
            </div>

            <!-- Settings Dropdown -->
            @if(Auth::user())
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <x-label :value="Auth::user()->name" />
                <div name="content" class="px-4">
                    <!-- Authentication -->
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-button 
                                onclick="event.preventDefault();
                                            this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-button>
                    </form>
                </div>
            </div>
                
            @else
            
            <div class="hidden sm:flex sm:items-center sm:ml-6">
                <div name="content" class="px-4">
                    <!-- Authentication -->
                    <a href='/login'> login </a>
                </div>
                <div name="content" class="px-4">
                    <!-- Authentication -->
                    <a href='/register'> register </a>
                </div>
            </div>
                
            @endif

            <!-- Hamburger -->
            <div class="-mr-2 flex items-center sm:hidden">
                <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                    <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                        <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                        <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
        </div>
    </div>
      <!-- Secondary Navigation Menu -->
      <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 ">
        <hr />
        <div class="flex  justify-center h-16">
             <!-- Settings Dropdown -->
             <select class=" sm:flex sm:items-center sm:ml-6 h-16" onchange="location = location.origin+=this.value">
                <option value="" disabled selected>Select a category</option>
                @foreach ($categories as $category)
                    <option value="/category/{{$category -> slug}}">
                        
                            {{ $category -> name }}
                    
                    </option>
                 @endforeach
             </select>
             
            <div class=" flex items-center justify-center px-2">
                <div class=" overflow-hidden flex">
                  <form method="GET" action="#">
                    <input type="text" class="px-4" name='search' placeholder="Search..." 
                            value={{request('search')}}
                             >
                   
                </div>
              </div>   
        </div>
        
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>

        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
           @if(Auth::user())
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <!-- Authentication -->
                <form method="POST" action="{{ route('logout') }}">
                    @csrf

                    <x-responsive-nav-link :href="route('logout')"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();">
                        {{ __('Log Out') }}
                    </x-responsive-nav-link>
                </form>
            </div>
            @endif
        </div>
    </div>
</nav>
