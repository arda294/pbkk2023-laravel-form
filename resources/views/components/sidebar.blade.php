<div class="flex flex-col bg-green-300 w-[300px] h-screen p-4">
    <span>
        <h1 class="mt-2 mb-4 font-extrabold text-center text-xl">Form App</h1>
        <h2 class="flex gap-4 text-sm mb-2"><img src="{{Auth::user()->photo_url}}" class="rounded-full w-12 h-12 object-cover" alt=""> <p class="self-center">{{Auth::user()->name}}</p></h2>
    </span>
    <nav class="flex flex-col gap-2 h-full shadow-[inset_0px_45px_10px_-50px] w-[calc(100%+2rem)] pt-5 pl-4 pr-2 self-center">
        <a href="{{ url('dashboard') }}" class="{{ (request()->is('dashboard')) ? 'bg-green-500' : 'bg-white'}} flex flex-row gap-2 rounded-xl p-2 shadow-md hover:ring-2 hover:ring-green-900">
            <x-heroicon-o-home class="w-5 h-auto"/> Home
        </a>
        <a href="{{ url('profile') }}" class="{{ (request()->is('profile')) ? 'bg-green-500' : 'bg-white'}} flex flex-row gap-2 rounded-xl p-2 shadow-md hover:ring-2 hover:ring-green-900">
            <x-heroicon-o-user-circle class="w-5 h-auto"/> Profile
        </a>
        <form action="{{ url('logout') }}" class="mt-auto self-center" method="POST">
            @csrf
            <button type="submit" class="flex flex-row rounded-md gap-2 text-white p-2 bg-red-500 cursor-pointer" value="Logout">
                 Logout   <x-heroicon-o-arrow-left-on-rectangle class="text-white w-5 h-auto self-center"/>
            </button>
        </form>
    </nav>
</div>