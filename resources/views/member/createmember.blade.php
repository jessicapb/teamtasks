<x-app-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-2xl font-bold text-[#2c3e50] text-center mb-6">Crear Usuari</h1>

            <form action="{{ route('member.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block font-semibold text-gray-700">Nom d'usuari</label>
                    <input type="text" id="name" name="name" placeholder="Escriu el nom de l'usuari"
                        class="border rounded-lg p-2 w-full focus:ring-2 focus:ring-teal-600">
                </div>

                <div>
                    <label for="email" class="block font-semibold text-gray-700">Correu electrònic</label>
                    <input type="email" id="email" name="email" placeholder="Escriu el correu electrònic"
                        class="border rounded-lg p-2 w-full focus:ring-2 focus:ring-teal-600">
                </div>

                <button type="submit"
                    class="bg-teal-600 text-white w-full px-4 py-2 rounded-lg hover:bg-teal-500 transition-all">
                    Crear Usuari
                </button>
            </form>

            @if(session('success'))
                <div class="bg-green-500 text-white p-2 rounded-md mt-4 text-center">
                    {{ session('success') }}
                </div>
            @endif
        </div>
    </div>
</x-app-layout>
