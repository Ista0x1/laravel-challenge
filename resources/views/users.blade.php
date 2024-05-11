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
                                    <th class="px-4 py-2">Email</th>
                                    <th class="px-4 py-2">City</th>
                                    <th class="px-4 py-2">Country</th>
                                    <th class="px-4 py-2">Created At</th>
                                    {{-- <th class="px-4 py-2">Actions</th> --}}
                                    <!-- Add more table headers as needed -->
                                </tr>
                            </thead>
                            <tbody id="table-body">
                                @foreach($users as $user)
                                <tr>
                                    <a href="{{route('cities', $user->id)}}"></a>
                                    <td class="border px-4 py-2">{{ $user->id }}</td>
                                    <td class="border px-4 py-2">{{ $user->name }}</td>
                                    <td class="border px-4 py-2">{{ $user->email }}</td>
                                    <td class="border px-4 py-2">{{ $user->city->name }}</td>
                                    <td class="border px-4 py-2">{{ $user->city->country->name}}</td>
                                    <td class="border px-4 py-2">{{ $user->created_at }}</td>

                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                        {{$users->links()}}
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
