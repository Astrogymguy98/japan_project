<div class="bg-white py-8 px-12 my-12 flex gap-14 items-center justify-center text-center w-[50%] mx-auto rounded-[100px]">
            <a href="{{ route('home') }}">
                <img class="h-30 w-30 object-cover rounded-full {{ Request::routeIs('home') ? 'border-2 border-[#ed792e]' : '' }}" src="https://saharaizumi.com/storage/01JZ4GTH64TNFYP80FY0WMQ335.jpg" alt="Curry set">
                <h2 class="font-semibold text-lg mt-2">Curry set</h2>
            </a>

            <a href="{{ route('naan') }}">
                <img class="h-30 w-30 object-cover rounded-full {{ Request::routeIs('naan') ? 'border-2 border-[#ed792e]' : '' }}" src="https://saharaizumi.com/storage/01JZ4GXSKPBJCGRVKN859RX74A.JPG" alt="Naan and rice">
                <h2 class="font-semibold text-lg mt-2">Naan and rice</h2>
            </a>

            <a href="{{ route('side') }}">
                <img class="h-30 w-30 object-cover rounded-full {{ Request::routeIs('side') ? 'border-2 border-[#ed792e]' : '' }}" src="https://saharaizumi.com/storage/01JZ4GYSC7PE7ZNBQSDBA2EBWJ.jpg" alt="Side Menu">
                <h2 class="font-semibold text-lg mt-2">Side Menu</h2>
            </a>
        </div>
