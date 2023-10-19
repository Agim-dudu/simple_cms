<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Project') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('project.update', $project->id) }}">
                        @csrf
                        @method('PUT') <!-- Tambahkan method PUT untuk update -->

                        <!-- Nama Proyek -->
                        <div>
                            <x-input-label for="name" :value="__('Nama Proyek')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="$project->name" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Deskripsi Proyek -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Deskripsi Proyek')" />
                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="$project->description" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- Tanggal Mulai -->
                        <div class="mt-4">
                            <x-input-label for="start_date" :value="__('Tanggal Mulai')" />
                            <x-date-input id="start_date" class="block mt-1 w-full" type="date" name="start_date" :value="$project->start_date" required />
                            <x-input-error :messages="$errors->get('start_date')" class="mt-2" />
                        </div>

                        <!-- Tanggal Selesai -->
                        <div class="mt-4">
                            <x-input-label for "end_date" :value="__('Tanggal Selesai')" />
                            <x-date-input id="end_date" class="block mt-1 w-full" type="date" name="end_date" :value="$project->end_date" required />
                            <x-input-error :messages="$errors->get('end_date')" class="mt-2" />
                        </div>

                        <!-- Status -->
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Status')" />
                            <x-select-input id="status" class="block mt-1 w-full" name="status" :value="$project->status" required>
                                <option value="Not done">Not done</option>
                                <option value="Done">Done</option>
                            </x-select-input>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Simpan Perubahan') }}
                            </x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
