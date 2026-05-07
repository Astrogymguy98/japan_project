<x-frontend-layout>
    <section>
        <x-category-card/>



        <div class="container m-auto">
          <h1 class="text-[40px]"><span class="text-[#ed792e]">side and Rice</span> Item</h1>
        </div>


        <div class="grid grid-cols-3 gap-5 py-10">

            @foreach ($sides as $side)
                 <div class="bg-white rounded-lg overflow-hidden ">
                    <div class="relative">
                        <img class="w-full" src="{{ asset(Storage::url($side->image)) }}" alt="{{ $side->title }}">
                @if ($side->discount > 0)
                    <span class="absolute top-2 right-0 bg-[red] text-white px-3">
                        {{ $side->discount }} %
                    </span>
                @endif
                    </div>


                    <div class="p-4">
                    <h2 class="text-lg font-semibold">{{ $side->title }}</h2></h2>

                    <p class="text-sm">
                        Curry +rice or side or jelly and juice for takeout...
                    </p>

                    <div>
                        <span class="text-lg font-semibold">Rs.{{ $side->price - ($side->discount*$side->price/100) }}</span>
                        @if ($side->discount > 0)
                        <small class="line-through text-[red]">Rs.{{ $side->price }}</small>
                        @endif

                    </div>

                    <button class="text-center bg-[#610512] py-2 w-full text-white rounded-2xl">
                        <a href="{{ route('side_detail', $side->slug) }}" class="block">Proceed to Order</a>
                    </button>
                </div>
            </div>
            @endforeach

        </div>

    </section>
</x-frontend-layout>
