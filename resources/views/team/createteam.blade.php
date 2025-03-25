<x-app-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-2xl font-bold text-[#2c3e50] text-center mb-6">Crear Equip</h1>

            <form action="{{ route('team.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block font-semibold text-gray-700">Nom del Equip</label>
                    <input type="text" id="name" name="name" placeholder="Escriu el nom de l'equip"
                        class="border rounded-lg p-2 w-full focus:ring-2 focus:ring-teal-600">
                </div>

                <div>
                    <label for="description" class="block font-semibold text-gray-700">Descripció</label>
                    <textarea id="description" name="description" placeholder="Escriu la descripció"
                        class="border rounded-lg p-2 w-full focus:ring-2 focus:ring-teal-600"></textarea>
                </div>

                <div>
                    <label for="memberid" class="block font-semibold text-gray-700">Selecciona un membre</label>
                    <select id="memberid" name="memberid" class="border rounded-lg p-2 w-full focus:ring-2 focus:ring-teal-600">
                        <option value="">Selecciona un usuari</option>
                        @foreach($members as $member)
                            <option value="{{ $member->id }}">{{ $member->name }}</option>
                        @endforeach
                    </select>
                </div>

                <button type="submit"
                    class="bg-teal-600 text-white w-full px-4 py-2 rounded-lg hover:bg-teal-500 transition-all">
                    Crear Equip
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
