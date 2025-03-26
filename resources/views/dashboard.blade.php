<x-app-layout>
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
    <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-lg sm:rounded-lg">
        <div class="p-6">
            <h3 class="text-2xl font-semibold mb-6 text-gray-800 text-center dark:text-white">Els meus equips</h3>
            <ul class="space-y-4">
                @foreach($teams as $team)
                    <li class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                        <div class="flex justify-between items-center">
                            <div>
                                <h4 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $team->name }}</h4>
                                <p class="text-sm text-gray-600 dark:text-gray-300 mt-1">{{ $team->description }}</p>
                            </div>
                            <a class="bg-teal-600 text-white px-4 py-2 rounded-lg hover:bg-teal-500 transition-all" href="{{ route('task.index') }}">Veure totes les tasques</a>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
</div>
</x-app-layout>
