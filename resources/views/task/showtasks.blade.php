<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">

                    @if($tasks->isEmpty())
                        <div class="bg-yellow-100 text-yellow-800 p-4 rounded-md mb-6">
                            <p class="text-center">No hi ha tasques.</p>
                        </div>
                    @else
                        <div class="space-y-4">
                            @foreach($tasks as $task)
                                <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded-lg shadow-md hover:shadow-xl transition duration-300">
                                    <div class="flex flex-col sm:flex-row justify-between items-start sm:items-center">
                                        <div class="flex-1">
                                            <h3 class="text-xl font-semibold text-gray-800 dark:text-white">{{ $task->name }}</h3>
                                            <p class="text-gray-600 dark:text-gray-300 mt-1">{{ $task->description }}</p>
                                        </div>
                                        <div class="flex items-center mt-4 sm:mt-0 sm:ml-4">
                                            <span class="text-sm text-gray-500 dark:text-gray-400 mr-4">Estat: 
                                                <span class="font-semibold {{ $task->status == 'pendent' ? 'text-yellow-500' : ($task->status == 'en_progres' ? 'text-blue-500' : 'text-green-500') }}">
                                                    {{ ucfirst($task->status) }}
                                                </span>
                                            </span>
                                            <span class="text-sm text-gray-500 dark:text-gray-400">Data d'inici: {{ $task->start_date }}</span>
                                        </div>
                                    </div>

                                    <div class="flex justify-between mt-4">
                                        <span class="text-sm text-gray-500 dark:text-gray-400">Data límit: {{ $task->due_date }}</span>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
