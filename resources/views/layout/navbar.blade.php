<header x-data="{navbarOpen: false}" class="fixed left-0 top-0 z-50 bg-white w-full flex items-center shadow-md dark:bg-slate-900 h-24">

    <div class="container">
        <div class="flex -mx-4 items-center justify-between relative">
            <div class="pr-4 w-68 max-w-full">
                <a href="/" class="w-full flex items-center py-2">
                    <img src="{{ url('/img/logo.png') }}" alt="logo" class="w-[48px] lg:w-[64px] inline-block dark:hidden"/>
                    <img src="{{ url('/img/logo-white.png') }}" alt="logo" class="w-[48px] lg:w-[64px] hidden dark:inline-block"/>
                    <span class="text-xl xl:text-2xl font-bold text-[#0c7187] dark:text-white">Gabriel Uribe Morales</span>
                </a>
            </div>
            <div>
                <x-layout.navbar-hamburger @click="navbarOpen = !navbarOpen" x-bind:class="navbarOpen && 'navbarTogglerActive'"></x-layout.navbar-hamburger>
                <nav :class="!navbarOpen && 'hidden'" id="navbarCollapse" 
                class="absolute right-0 top-full bg-white py-5 px-6 z-50 shadow rounded-lg w-full 
                dark:bg-slate-900 dark:text-gray-300 
                lg:px-0 lg_max-w-full lg:w-full lg:right-4 lg:block lg:static lg:shadow-none">
                    <ul class="block lg:flex lg:items-center">
                        @foreach($navigationItems as $item)
                            <x-layout.navbar-item :href="$item['href']">
                                {{$item['label']}}
                            </x-layout.navbar-item>
                        @endforeach
                    </ul>
                </nav>
            </div>    
        </div>
    </div>

</header>