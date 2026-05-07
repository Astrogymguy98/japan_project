<x-frontend-layout>
    <section>
        <x-category-card/>



        <div class="container m-auto">
          <h1 class="text-[40px]"><span class="text-[#ed792e]">Naan and Rice</span> Item</h1>
        </div>


        <div class="grid grid-cols-3 gap-5 py-10">

            @foreach ($naans as $naan)
                 <div class="bg-white rounded-lg overflow-hidden ">
                    <div class="relative">
                        <img class="w-full" src="{{ asset(Storage::url($naan->image)) }}" alt="{{ $naan->title }}">
                @if ($naan->discount > 0)
                    <span class="absolute top-2 right-0 bg-[red] text-white px-3">
                        {{ $naan->discount }} %
                    </span>
                @endif
                    </div>


                    <div class="p-4">
                    <h2 class="text-lg font-semibold">{{ $naan->title }}</h2></h2>

                    <p class="text-sm">
                        Curry +rice or naan or jelly and juice for takeout...
                    </p>

                    <div>
                        <span class="text-lg font-semibold">Rs.{{ $naan->price - ($naan->discount*$naan->price/100) }}</span>
                        @if ($naan->discount > 0)
                        <small class="line-through text-[red]">Rs.{{ $naan->price }}</small>
                        @endif

                    </div>

                    <button class="text-center bg-[#610512] py-2 w-full text-white rounded-2xl">
                        <a href="{{ route('naan_detail', $naan->slug) }}" class="block">Proceed to Order</a>
                    </button>
                </div>
            </div>
            @endforeach

        </div>

    </section>
</x-frontend-layout>
