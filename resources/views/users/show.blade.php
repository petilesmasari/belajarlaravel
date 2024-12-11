<x-app-layout title="Users">
    <x-slot name="heading">{{$user->name}}</x-slot>
    
    <div>{{$user -> email}}</div>
    <div>Registered at {{$user -> created_at->diffForHUmans()}}</div>

    <form action="{{route('users.destroy', $user->id)}}" method="post" class="mt-6">
        @method('DELETE')
        @csrf
        <x-button type="submit">
            Delete
        </x-button>
    </form>
</x-app-layout>
