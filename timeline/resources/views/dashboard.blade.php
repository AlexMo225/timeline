<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-blue-600 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12 bg-gray-100">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-lg sm:rounded-lg">
                <div class="p-6 text-gray-900 text-center">
                    <div class="flex items-center justify-center space-x-2">
                        <svg class="w-8 h-8 text-green-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                        <span class="text-xl font-semibold">
                            {{ __("You're logged in!") }}
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
