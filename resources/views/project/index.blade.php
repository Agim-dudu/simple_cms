<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('My Data') }}
        </h2>
    </x-slot>

    <div class="py-3">
        <div class="max-w-10xl mx-auto sm:px-10 lg:px-10">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Project
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Deskripsi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Mulai
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Tanggal Berakhir
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($projects as $project)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $project->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $project->description }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $project->start_date }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $project->end_date }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $project->status }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('project.edit', $project->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <form method="POST" action="{{ route('project.destroy', $project->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="py-3">
        <div class="max-w-10xl mx-auto sm:px-10 lg:px-10">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nama Tugas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Deskripsi
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Prioritas Tugas
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Status
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nama Proyek
                            </th>
                            <th scope="col" class="px-6 py-3">
                                di kerjakan
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Action
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($tasks as $task)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $task->name }}
                            </th>
                            <td class="px-6 py-4">
                                {{ $task->description }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $task->priority}}
                            </td>
                            <td class="px-6 py-4">
                                {{ $task->status }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $task->project->name }}
                            </td>
                            <td class="px-6 py-4">
                                {{ $task->user->name }}
                            </td>
                            <td class="px-6 py-4">
                                <a href="{{route('task.edit', $task->id)}}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                                <form method="POST" action="{{ route('task.destroy', $task->id) }}">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="font-medium text-red-600 dark:text-red-500 hover:underline">Hapus</button>
                                </form>
                            </td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="py-3">
        <div class="max-w-10xl mx-auto sm:px-10 lg:px-10">
            <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-8 py-3">
                                Nama user
                            </th>
                            <th scope="col" class="px-8 py-3">
                                Email
                            </th>
                            <th scope="col" class="px-8 py-3">
                                Role
                            </th>
                            <th scope="col" class="px-8 py-3">
                                Tanggal dibuat
                            </th>
                            <th scope="col" class="px-8 py-3">
                                Project
                            </th>
                            <th scope="col" class="px-8 py-3">
                                Tugas
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                            <th scope="row"
                                class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                {{ $user->name }}
                            </th>
                            <td class="px-8 py-4">
                                {{ $user->email }}
                            </td>
                            <td class="px-8 py-4">
                                @if ($user->role == 1)
                                Leader
                                @else
                                Anggota
                                @endif
                            </td>
                            <td class="px-8 py-4">
                                {{ $user->created_at }}
                            </td>
                            <td class="px-8 py-4">
                                @foreach ($user->projects as $project)
                                <li>{{ $project->name }}</li>
                                @endforeach
                            </td>
                            <td class="px-8 py-4">
                                @foreach ($user->tasks as $task)
                                <li>{{ $task->name }}</li>
                                @endforeach
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>




</x-app-layout>
