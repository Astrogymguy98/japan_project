<header class="sticky top-0 shadow border-b border-gray-200 bg-[#FDFDFC]/80">
    <nav class="container mx-auto flex justify-between items-center py-2">
        <a href="{{ route('home') }}" class="flex gap-4 items-center">
            <img class="h-[50px]" src="https://saharaizumi.com/storage/01K01QJMCMZMNAW1H5W68YQSJ2.png" alt="">
            <strong>
                インドレストランサハラ
            </strong>

        </a>

       @if (Auth::user())
       <div class="flex gap-2">
            <div class="relative">
                <i class="fa-solid fa-bag-shopping text-xl"></i>
                <span class="absolute -bottom-1 right-1 bg-[red] text-[9px] px-1 rounded-full">0</span>
            </div>
            <span>
                カート
            </span>
        </div>
       @else
            <div class="w-[25]">
                <a href="{{ route('login') }}" class="text-center bg-[#610512] py-2 px-4 text-white rounded-2xl">
                    Login
                 </a>
            </div>

       @endif
    </nav>
</header>

