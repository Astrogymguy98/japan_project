<x-frontend-layout>
    <section>
      <x-category-card/>


        <div class="container m-auto">
          <h1 class="text-[40px]"><span class="text-[#ed792e]">Curry set</span> Item</h1>
        </div>


        <div class="grid grid-cols-3 gap-5 py-10">

            @foreach ($curry_sets as $curry)
                 <div class="bg-white rounded-lg overflow-hidden ">
                    <div class="relative">
                        <img class="w-full" src="{{ asset(Storage::url($curry->image)) }}" alt="{{ $curry->title }}">
                @if ($curry->discount > 0)
                    <span class="absolute top-2 right-0 bg-[red] text-white px-3">
                        {{ $curry->discount }} %
                    </span>
                @endif
                    </div>


                    <div class="p-4">
                    <h2 class="text-lg font-semibold">{{ $curry->title }}</h2></h2>

                    <p class="text-sm">
                        Curry +rice or naan or jelly and juice for takeout...
                    </p>

                    <div>
                        <span class="text-lg font-semibold">Rs.{{ $curry->price - ($curry->discount*$curry->price/100) }}</span>
                        @if ($curry->discount > 0)
                        <small class="line-through text-[red]">Rs.{{ $curry->price }}</small>
                        @endif

                    </div>

                    <button class="text-center bg-[#610512] py-2 w-full text-white rounded-2xl">
                        <a href="{{ route('curry', $curry->slug) }}">Proceed to Order</a>
                    </button>
                </div>
            </div>
            @endforeach

        </div>

    </section>
</x-frontend-layout>
