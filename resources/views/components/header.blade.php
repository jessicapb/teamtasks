<header>
    <nav class="bg-[#7fb3d5] h-[120px]">
        <h1 class="text-black font-bold text-[25px] p-5 font-sans">GetItDone</h1>
        <div class="flex justify-between pl-5">
            <a class="text-black text-[18px] hover:text-white hover:scale-105 transition-all duration-300 ease-in-out" href="{{ route('home') }}">Inici</a> 
            @auth
                <a href="{{ route('team') }}">Crear equip</a>
                <a href="{{ route('createuser') }}">Crear usuaris</a> 
            @endauth
            <div class="pr-5">
                <a class="text-black  text-[18px] hover:text-white hover:scale-105 transition-all duration-300 ease-in-out" href="">Registrar</a>
                <a class="text-black text-[18px] pl-5 hover:text-white hover:scale-105 transition-all duration-300 ease-in-out" href="">Iniciar sessió</a>
            </div>
        </div>
    </nav>
</header>
