<div class="flex flex-col bg-green-300 w-[300px] h-screen p-4">
    <span>
        <h1 class="mt-2 mb-4 font-bold">Form App</h1>
        <h2 class="text-sm mb-2">Logged in as {{Auth::user()->name}}.</h2>
    </span>
    <nav class="flex flex-col gap-2 h-full shadow-[inset_0px_45px_10px_-50px] w-[calc(100%+2rem)] pt-5 px-2 self-center">
        <x-sidebar-button url="dashboard" name="Home"/>
        <x-sidebar-button url="profile" name="Profile"/>
        <form action="{{ url('logout') }}" class="mt-auto" method="POST">
            @csrf
            <input type="submit" class="rounded-md text-white p-2 bg-red-500 cursor-pointer" value="Logout">
        </form>
    </nav>
</div>