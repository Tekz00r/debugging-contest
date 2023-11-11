<x-app-layout>

    <x-slot name="header">
        <div class="flex justify-between items-center">
            <h2 class="font-semibold text-xl text-gray-800 leading-tight py-2">
                {{ __('Tasks') }}
            </h2>
            <div>
                <x-sort :active="request()->route('order') === 'asc'" href="{{ route('tasks.index', ['order' => 'asc']) }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="#4d4847" d="m7 14l5-5l5 5z"/></svg>
                </x-sort>
                <x-sort :active="request()->route('order') === 'desc'" href="{{ route('tasks.index', ['order' => 'desc']) }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 24 24"><path fill="#4d4847" d="m7 10l5 5l5-5z"/></svg>
                </x-sort>

            <x-button @click="openModale = true">add task</x-button>
            <x-button><a href="{{ route('tasks.index', ['sort_asc' => true]) }}" class="btn btn-primary">Sort by asc</a></x-button>
            <x-button><a href="{{ route('tasks.index', ['sort_desc' => true]) }}" class="btn btn-primary">Sort by desc</a></x-button>
        </div>
    </x-slot>

    <div class="sm:py-12 py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="flex sm:flex-row flex-col sm:gap-4 gap-6">
                <div class="sm:basis-1/3">
                    @include('_partials.column', ['status' => 'pending', 'color' => 'gray'])
                </div>
                <div class="sm:basis-1/3">
                    @include('_partials.column', ['status' => 'in_progress', 'color' => 'yellow'])
                </div>
                <div class="sm:basis-1/3">
                    @include('_partials.column', ['status' => 'completed', 'color' => 'green'])
                </div>
            </div>
        </div>
    </div>

    @include('_partials.modal')

</x-app-layout>
