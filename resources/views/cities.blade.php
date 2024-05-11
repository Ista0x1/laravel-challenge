<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Cities') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="overflow-x-auto">
                        <table class="table-auto min-w-full">
                            <thead>
                                <tr>
                                    <th class="px-4 py-2">ID</th>
                                    <th class="px-4 py-2">Name</th>
                                    <th class="px-4 py-2">Country</th>
                                    <th class="px-4 py-2">Created At</th>
                                    <th class="px-4 py-2">Actions</th>
                                    <!-- Add more table headers as needed -->
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach($cities as $city)
                                <tr>

                                    <td class="border px-4 py-2"><a href="{{route('city.users', $city->id)}}">{{ $city->id }}</a></td>
                                    <td class="border px-4 py-2">{{ $city->name }}</td>
                                    <td class="border px-4 py-2">{{ $city->country->name}}</td>
                                    <td class="border px-4 py-2">{{ $city->created_at }}</td>
                                    <td class="border px-4 py-2">
                                        <a href="{{route('city.users', $city->id)}}">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        {{$cities->links()}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
