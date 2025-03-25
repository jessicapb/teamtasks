<x-app-layout>
    <section class="relative flex flex-col justify-center items-center h-[400px] text-black text-center px-6 bg-white">
        <h1 class="text-[45px] font-bold text-gray-900 drop-shadow-md">Benvingut / Benvinguda a <span class="text-teal-700 font-poppins">TaskControll</span>
        </h1>
        <p class="text-[20px] mt-2 max-w-2xl text-gray-700">
            Crea equips, afegeix integrants, assigna tasques i gestiona-les de manera eficient.
        </p>
        <img class="w-[110px] mt-6 transform transition duration-500 hover:scale-110 hover:rotate-12" src="{{ asset('img/tasques.png') }}" alt="Imagen">
    </section>

    <!-- Capsa d'equips, usuaris i tasques-->
    <main class="flex">
        <div class="mr-5 ml-5 relative flex flex-col md:flex-row w-full my-6 bg-white shadow-sm border border-slate-200 rounded-lg hover:border-slate-300 hover:shadow-md transition-all cursor-pointer w-96">
            <div class="relative p-2.5 md:w-2/5 shrink-0 overflow-hidden flex justify-center items-center">
                <img src="{{ asset('img/equips.png') }}" alt="card-image" class="w-[110px] transform transition duration-500 hover:scale-110 hover:rotate-12"/>
            </div>
            <div class="p-6">
                <div class="mb-4 rounded-full bg-teal-600 py-0.5 px-2.5 border border-transparent text-xs text-white transition-all shadow-sm w-20 text-center">Equips</div>
                <h4 class="mb-2 text-slate-800 text-xl font-semibold">Crear equips</h4>
                <p class="mb-8 text-slate-600 text-justify leading-normal font-light">
                    Un sistema dissenyat per crear equips on es poden assignar tasques de manera eficient i organitzada. Els usuaris es poden unir a diferents equips segons les seves habilitats o preferències.
                </p>
                <div>
                    <x-nav-link href="{{ route('register') }}" class="text-slate-800 font-semibold text-sm hover:underline flex items-center">
                        Registra't per crear equips
                        <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                        </svg>
                    </x-nav-link>
                </div>
            </div>
        </div>

        <div class="mr-5 relative flex flex-col md:flex-row w-full my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96 hover:border-slate-300 hover:shadow-md rounded-lg transition-all cursor-pointer w-96">
            <div class="relative p-2.5 md:w-2/5 shrink-0 overflow-hidden flex justify-center items-center">
                <img src="{{ asset('img/usuari.png') }}" alt="card-image" class="w-[110px] transform transition duration-500 hover:scale-110 hover:rotate-12"/>
            </div>
            <div class="p-6">
                <div class="mb-4 rounded-full bg-teal-600 py-0.5 px-2.5 border border-transparent text-xs text-white transition-all shadow-sm w-20 text-center">Usuaris</div>
                    <h4 class="mb-2 text-slate-800 text-xl font-semibold">Crear usuaris</h4>
                    <p class="mb-8 text-slate-600 text-justify leading-normal font-light">
                    Un sistema dissenyat per crear usuaris i gestionar els seus rols dins d'un projecte. Els usuaris poden registrar-se fàcilment i actualitzar el seu perfil segons les seves habilitats o preferències. 
                    </p>
                <div>
                <x-nav-link href="{{ route('register') }}" class="text-slate-800 font-semibold text-sm hover:underline flex items-center">
                    Registra't per crear usuaris
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </x-nav-link>
                </div>
            </div>
        </div> 

        <div class="mr-5 relative flex flex-col md:flex-row w-full my-6 bg-white shadow-sm border border-slate-200 rounded-lg w-96 hover:border-slate-300 hover:shadow-md rounded-lg transition-all cursor-pointer w-96">
            <div class="relative p-2.5 md:w-2/5 shrink-0 overflow-hidden flex justify-center items-center">
                <img src="{{ asset('img/tasques_box.png') }}" alt="card-image" class="w-[110px] transform transition duration-500 hover:scale-110 hover:rotate-12"/>
            </div>
            <div class="p-6">
                <div class="mb-4 rounded-full bg-teal-600 py-0.5 px-2.5 border border-transparent text-xs text-white transition-all shadow-sm w-20 text-center">Tasques</div>
                    <h4 class="mb-2 text-slate-800 text-xl font-semibold"> Crear tasques</h4>
                    <p class="mb-8 text-slate-600 leading-normal font-light text-justify">
                    Un sistema dissenyat per crear i gestionar tasques de manera eficient i organitzada. Cada tasca es pot assignar a un o més usuaris segons les seves habilitats i disponibilitat.
                    </p>
                <div>
                <x-nav-link href="{{ route('register') }}" class="text-slate-800 font-semibold text-sm hover:underline flex items-center">
                    Registra't per crear tasques
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
                    </svg>
                </x-nav-link>
                </div>
            </div>
        </div> 
    </main>
    
</x-app-layout>
