<x-app-layout title="Users">
    <x-slot name="heading">Users</x-slot>
    <div class="sm:flex sm:items-center">
        <x-section-title>
            <x-slot name="title">
                Users
            </x-slot>
            <x-slot name="description">
                A list of all the users in your account including their name, title, email and role.
            </x-slot>
        </x-section-title>
        <div class="mt-4 sm:ml-16 sm:mt-0 sm:flex-none">
            <x-button class="bg-red-500" as="a" href="/users/create">
                Add user
            </x-button>
        </div>
    </div>
    <div class="mt-8 flow-root">
        <table class="min-w-full divide-y divide-gray-300">
            
            
        </table>
        <x-table>
            <x-table.thead>
                <tr>
                    <x-table.th>#</x-table.th>
                    <x-table.th>Name</x-table.th>
                    <x-table.th>Email</x-table.th>
                    <x-table.th>Created At</x-table.th>
                    <x-table.th></x-table.th>
                </tr>
            </x-table.thead>
            <x-table.tbody>
                @foreach($users as $user)
                    <tr>
                        <x-table.td>{{ $loop->iteration }}</x-table.td>
                        <x-table.td>{{ $user->name }}</x-table.td>
                        <x-table.td>{{ $user->email }}</x-table.td>
                        <x-table.td>{{ (new \Carbon\Carbon($user->published_at))->format('d F Y') }}</x-table.td>
                        <x-table.td>

                           <div class="flex justify-end gap-x-2">
                            <a href="/users/{{$user->id}}" class="hover:underline">
                                View
                            </a>

                            <a href="/users/{{$user->id}}/edit" class="hover:underline">
                                Edit
                            </a>  
                           </div>

                           {{-- <form action="{{route('users.destroy', $user->id)}}" method="post" class="mt-6">
                            @method('DELETE')
                            @csrf
                            <x-button type="submit">
                                Delete
                            </x-button>
                        </form> --}}

                        <!-- Delete Link -->
                        <a href="#" class="hover:underline text-red-500"
                           onclick="event.preventDefault(); 
                                    if(confirm('Are you sure you want to delete this user?')) {
                                        document.getElementById('delete-form-{{$user->id}}').submit();
                                    }">
                            Delete
                        </a>
                        
                        <!-- Hidden Delete Form -->
                        <form id="delete-form-{{$user->id}}" action="{{ route('users.destroy', $user->id) }}" method="POST" style="display: none;">
                            @csrf
                            @method('DELETE')
                        </form>

                        </x-table.td>
                    </tr>
                @endforeach
            </x-table.tbody>
        </x-table>
    </div>
</x-app-layout>
