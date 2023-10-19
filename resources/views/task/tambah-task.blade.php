<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Tambah Task') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('task.store') }}">
                        @csrf

                        <!-- Nama Tugas -->
                        <div>
                            <x-input-label for="name" :value="__('Nama Tugas')" />
                            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name"
                                :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Deskripsi Tugas -->
                        <div class="mt-4">
                            <x-input-label for="description" :value="__('Deskripsi Tugas')" />
                            <x-text-input id="description" class="block mt-1 w-full" type="text" name="description"
                                :value="old('description')" />
                            <x-input-error :messages="$errors->get('description')" class="mt-2" />
                        </div>

                        <!-- Prioritas Tugas -->
                        <div class="mt-4">
                            <x-input-label for="priority" :value="__('Prioritas Tugas')" />
                            <x-select-input id="priority" class="block mt-1 w-full" name="priority"
                                :value="old('priority')" required>
                                <option value="High">High</option>
                                <option value="Medium">Medium</option>
                                <option value="Low">Low</option>
                            </x-select-input>
                            <x-input-error :messages="$errors->get('priority')" class="mt-2" />
                        </div>

                        <!-- Status Tugas -->
                        <div class="mt-4">
                            <x-input-label for="status" :value="__('Status Tugas')" />
                            <x-select-input id="status" class="block mt-1 w-full" name="status" :value="old('status')"
                                required>
                                <option value="Not done">Not done</option>
                                <option value="Done">Done</option>
                            </x-select-input>
                            <x-input-error :messages="$errors->get('status')" class="mt-2" />
                        </div>

                        <!-- Proyek -->
                        <div class="mt-4">
                            <x-input-label for="project_id" :value="__('Proyek')" />
                            <x-select-input id="project_id" class="block mt-1 w-full" name="project_id"
                                :value="old('project_id')" required>
                                @foreach ($projects as $project)
                                <option value="{{ $project->id }}">{{ $project->name }}</option>
                                @endforeach
                            </x-select-input>
                            <x-input-error :messages="$errors->get('project_id')" class="mt-2" />
                        </div>

                        <!-- Pengguna -->
                        <div class="mt-4">
                            <x-input-label for="user_id" :value="__('Pengguna')" />
                            <x-select-input id="user_id" class="block mt-1 w-full" name="user_id"
                                :value="old('user_id')" required>
                                @foreach ($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name }}</option>
                                @endforeach
                            </x-select-input>
                            <x-input-error :messages="$errors->get('user_id')" class="mt-2" />
                        </div>
                        <div class="flex items-center justify-end mt-4">
                            <x-primary-button class="ml-4">
                                {{ __('Tambah Tugas') }}
                            </x-primary-button>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>

</x-app-layout>
