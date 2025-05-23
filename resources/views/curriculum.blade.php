<x-app-layout>
    <x-slot name="header">
        <h2 class=" mt-8 mb-8 text-center text-3xl lg:text-5xl font-medium text-gray-200 tracking-tight">
            Curriculum Vitae
        </h2>
    </x-slot>
    <div x-data="">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="overflow-hidden">
                <div class="p-6 dark:bg-neutral-800">
                    @include('layouts.plantilla')
                </div>
            </div>
        </div>
    </div>
</x-app-layout>