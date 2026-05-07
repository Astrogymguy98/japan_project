<x-frontend-layout>
    {{-- {{ $side }} --}}
    <section>
        <div class="container m-auto py-10 grid md:grid-cols-2 gap-10">
            <div class="relative">
                <img src="{{ asset(Storage::url($side->image)) }}" alt="">
                @if ($side->discount > 0)
                    <span class="absolute top-0 right-0 bg-[red]/20 text-[red] px-3 py-1">{{ $side->discount }}%
                        off</span>
            </div>
            @endif
            <div class="">
                <h1 class="text-3xl font-semibold mb-4">
                    {{ $side->title }}
                </h1>


                <div>
                    <span class="text-2xl">Rs.{{ $side->price - ($side->discount * $side->price) / 100 }}</span>
                    @if ($side->discount > 0)
                        <span class=" text-sm line-through text-[red]">Rs.{{ $side->price }}</span>
                    @endif
                </div>

                <p class="cursor-pointer">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad sint voluptates tenetur ipsum sunt
                    magnam quae suscipit ab asperiores saepe? Exercitationem numquam culpa, eligendi corporis a dicta
                    voluptatibus natus optio?
                </p>

                <div class="mt-6">
                    <form action="" method="post">
                        @csrf

                        <div>
                            <button type="button" onclick="addQty()"
                                class=  "bg-[gray] px-3 py-1.5 text-white">+</button>
                            <input type="number" name="qty" id="qty"
                                class="w-[74px] border border-[#5c5b5b] px-2 py-1" value="1" min="1"
                                max="10">

                            <button type="button" onclick="subQty()"
                                class="bg-[gray] px-3 py-1.5 text-white">-</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <script>
        function addQty() {

            let qty = document.getElementById("qty");
            q = parseInt(qty.value)
            if (q < 10) {
                qty.value = q + 1;
            }else{
                alert("qty must be less than 10.")
            }


        }

        function subQty() {

            let qty = document.getElementById("qty");
            q = parseInt(qty.value)
            if (q > 1) {
                qty.value = q - 1;
            }


        }
    </script>
</x-frontend-layout>
