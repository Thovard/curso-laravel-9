@extends('layouts.app')

@section('title', 'Listagem do Usuário')

@section('content')
<h1 class="text-2xl font-semibold leading-tigh py-2">Listagem do usuário {{ $user->name }}</h1>
<a href="{{ route('users.index', $user->id) }}" class="w-80x bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Volta</a><br>
    <td class="px-4 py-2 border-b border-gray-250 bg-white text-sm"><br>
    </td>
<a href="{{ route('users.edit', $user->id) }}" class="w-80x bg-purple-500 hover:bg-purple-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded">Editar</a><br>






<ul>
    <li>{{ $user->name }}</li>
    <li>{{ $user->email }}</li>
    <li>{{$user->password}}</li>
    <li>{{ $user->created_at }}</li>
</ul>

<form action="{{ route('users.delete', $user->id) }}" method="POST" class="py-12">
    @method('DELETE')
    @csrf
    <button type="submit" class="rounded-full bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4">Deletar</button>
</form>

@endsection
