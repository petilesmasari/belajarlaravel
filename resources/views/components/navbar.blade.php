<nav class="bg-gray-800">
    <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
        <div class="flex h-16 items-center justify-between">
            <div class="flex items-center">
                <!-- Logo -->
                <div class="flex items-center">
                    <img src="{{ asset('lesma.png') }}" alt="Logo" class="h-8 w-auto">
                </div>
                

                <!-- Desktop Navigation -->
                <div class="hidden md:block">
                    <div class="ml-10 flex items-baseline space-x-4">
                        <x-nav-link href="{{route('home')}}" :active="request()->is('/home')">Home</x-nav-link>
                        <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
                        <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
                        <x-nav-link href="/gallery" :active="request()->is('gallery')">Gallery</x-nav-link>
                        <x-nav-link href="/user" :active="request()->is('user')">Users</x-nav-link>
                    </div>
                </div>
            </div>

            <!-- Mobile Menu Button -->
            <div class="-mr-2 flex md:hidden">
                <button type="button" class="inline-flex items-center justify-center rounded-md bg-gray-800 p-2 text-gray-400 hover:bg-gray-700 hover:text-white focus:outline-none focus:ring-2 focus:ring-white focus:ring-offset-2 focus:ring-offset-gray-800" aria-controls="mobile-menu" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <!-- Icon for menu open -->
                    <svg class="block h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7"></path>
                    </svg>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="md:hidden" id="mobile-menu">
        <div class="space-y-1 px-2 pb-3 pt-2 sm:px-3">
            <x-nav-link href="/home" :active="request()->is('/home')">Home</x-nav-link>
            <x-nav-link href="/about" :active="request()->is('about')">About</x-nav-link>
            <x-nav-link href="/contact" :active="request()->is('contact')">Contact</x-nav-link>
            <x-nav-link href="/gallery" :active="request()->is('gallery')">Gallery</x-nav-link>
            <x-nav-link href="/user" :active="request()->is('user')">Users</x-nav-link>
        </div>
    </div>
</nav>
