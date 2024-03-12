<div class="absolute w-full">
    <nav class="flex justify-between px-32 py-5 gap-10">
        <div class="flex gap-10 items-center">
            <img src="images/pngwing.com.png" class="w-10 h-10 cursor-pointer">
            <a href="mobil" class="cursor-pointer border-b-2 border-transparent py-5 hover:border-gray-700">
                Mobil
            </a>
            @if(Auth::check() == true)
            <a href="/pinjaman" class="cursor-pointer border-b-2 border-transparent py-5 hover:border-gray-700">
                Pinjam
            </a>
            @endif
        </div>
        <div class="flex gap-10 items-center">
            @if(Auth::check() == false)
            <a href="/login" class="cursor-pointer border-b-2 border-transparent py-5 hover:border-gray-700">Login</a>
            <a href="/register" class="cursor-pointer border-b-2 border-transparent py-5 hover:border-gray-700">Register</a>
            @else
            <span class="cursor-pointer border-b-2 border-transparent py-5 hover:border-gray-700">{{Auth::user()->name}}</span>
            <form action="/logout" method="post">
                @csrf
                <button class="cursor-pointer border-b-2 border-transparent py-5 hover:border-gray-700">logout</button>
            </form>
            @endif
        </div>

    </nav>
</div>