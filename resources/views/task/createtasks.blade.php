<x-app-layout>
    <div class="flex items-center justify-center min-h-screen bg-gray-100">
        <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
            <h1 class="text-2xl font-bold text-[#2c3e50] text-center mb-6">Crear Tasca</h1>
            <form action="{{ route('task.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="team_id" class="block font-semibold text-gray-700">Selecciona un equip</label>
                    <select name="teamid" id="team_id" class="border rounded-lg p-2 w-full">
                        <option value="">Selecciona un equip</option>
                        @foreach ($teams as $team)
                            <option value="{{ $team->id }}">{{ $team->name }}</option>
                            @endforeach
                        </select>
                </div>

                <div>
                    <label for="name" class="block font-semibold text-gray-700">Nom de la tasca</label>
                    <input type="text" name="name" id="name" class="border rounded-lg p-2 w-full" >
                </div>

                <div>
                    <label for="description" class="block font-semibold text-gray-700">Descripció</label>
                    <textarea name="description" id="description"  class="border rounded-lg p-2 w-full"></textarea>
                </div>

                <div>
                    <label for="start_date" class="block font-semibold text-gray-700">Data d'inici</label>
                    <input type="datetime-local" name="start_date" id="start_date" class="border rounded-lg p-2 w-full">
                </div>

                <div>
                    <label for="due_date" class="block font-semibold text-gray-700">Data límit</label>
                    <input type="datetime-local" name="due_date" id="due_date" class="border rounded-lg p-2 w-full" >
                </div>

                <div>
                    <label for="status" class="block font-semibold text-gray-700">Estat de la tasca</label>
                    <select name="status" id="status" class="border rounded-lg p-2 w-full">
                        <option value="">Selecciona l'estat de la tasca</option>
                        <option value="pendent">Pendent</option>
                        <option value="en_progres">En progrés</option>
                        <option value="completada" >Completada</option>
                    </select>
                </div>

                <button type="submit" class="bg-teal-600 text-white w-full px-4 py-2 rounded-lg hover:bg-teal-500 transition-all">
                    Crear tasca
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
