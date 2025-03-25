<nav x-data="{ open: false }" class="bg-[#7fb3d5] h-[140px]">
    <div class="flex justify-between items-center">
        <!-- Título -->
        <h1 class="text-black font-medium text-[25px] p-5 font-raleway">TaskControll</h1>

        <!-- Perfil de usuario -->
        @auth
        <div class="flex items-center">
            <x-dropdown align="right" width="48">
                <x-slot name="trigger">
                    <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                        <div>{{ Auth::user()->name }}</div>
                        <div class="ms-1">
                            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </div>
                    </button>
                </x-slot>
                <x-slot name="content">
                    <x-dropdown-link :href="route('profile.edit')">
                        {{ __('Profile') }}
                    </x-dropdown-link>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <x-dropdown-link :href="route('logout')" onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log Out') }}
                        </x-dropdown-link>
                    </form>
                </x-slot>
            </x-dropdown>
        </div>
        @endauth
    </div>

    <div class="mt-4 flex justify-between">
        <div>
            <a class="text-black text-[16px] pl-5 pr-5 hover:text-white hover:scale-105 transition-all duration-300 ease-in-out" href="{{ Auth::check() ? route('dashboard') : route('home') }}">
                Inici
            </a>
            @auth
                <a class="text-black text-[16px] pr-5 hover:text-white hover:scale-105 transition-all duration-300 ease-in-out" href="{{ route('team.create') }}">
                    Crear equips
                </a>
                <a class="text-black text-[16px] pr-5 hover:text-white hover:scale-105 transition-all duration-300 ease-in-out" href="{{ route('member.create') }}">
                    Crear usuaris
                </a>
                <a class="text-black text-[16px] pr-5 hover:text-white hover:scale-105 transition-all duration-300 ease-in-out" href="{{ route('task.create') }}">
                    Crear tasques
                </a>
            @endauth
        </div>

        <!-- Registre i Inici de sessió-->
        @if (!Auth::user())
            <div class="pr-5">
                    <x-nav-link class="text-black text-[16px] pr-5 hover:text-white hover:scale-105 transition-all duration-300 ease-in-out" :href="route('register')" :active="request()->routeIs('register')">
                        {{ __('Registre') }}
                    </x-nav-link>
                    <x-nav-link class="text-black text-[16px] hover:text-white hover:scale-105 transition-all duration-300 ease-in-out" :href="route('login')" :active="request()->routeIs('login')">
                        {{ __('Iniciar sessió') }}
                    </x-nav-link>
            </div>
        @endif
    </div>

    <!-- Hamburger -->
    <div class="-me-2 flex items-center sm:hidden">
        <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
            <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>
    </div>

    <!-- Responsive Navigation Menu -->
    <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
        <div class="pt-2 pb-3 space-y-1">
            <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                {{ __('Dashboard') }}
            </x-responsive-nav-link>
        </div>
        @auth
        <!-- Responsive Settings Options -->
        <div class="pt-4 pb-1 border-t border-gray-200">
            <div class="px-4">
                <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
            </div>

            <div class="mt-3 space-y-1">
                <x-responsive-nav-link :href="route('profile.edit')">
                    {{ __('Profile') }}
                </x-responsive-nav-link>

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
        </div>
        @endauth
    </div>
</nav>
