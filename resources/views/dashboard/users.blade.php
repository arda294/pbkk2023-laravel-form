@extends('app-layout')

@section('main')
<div class="flex flex-col gap-3 p-4 min-h-full w-full  bg-slate-200">
    <h1 class="text-2xl font-extrabold">Users List</h1>
    <ul class="flex flex-col gap-4 flex-1 bg-green-300 rounded-xl p-4">
        @foreach ($users as $user)
        <li class="bg-green-500 rounded-xl p-2 drop-shadow-lg font-bold">
            <h2 class="flex gap-4 text-md"><img src="{{$user->photo_url}}" class="rounded-full w-12 h-12 object-cover shadow-md" alt="">
                <p class="self-center">{{$user->name}}</p>
                <p class="self-center ml-auto rounded-md text-white p-2 drop-shadow-md @if ($user->sussiness < 70)
                    bg-green-900 
                @else
                    bg-red-500 
                @endif">Sussiness {{$user->sussiness}}%</p>
            </h2>
        </li>
        @endforeach
    </ul>
</div>
@endsection