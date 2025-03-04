<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                {{ __($pageTitle) }}
            </h2>
            <a href="{{ route('dashboard-superuser.post.create') }}" class="text-lg text-white">Создать пост</a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <livewire:post-list />
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
