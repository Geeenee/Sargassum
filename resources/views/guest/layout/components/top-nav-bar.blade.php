<div class="sticky top-0 z-50 hidden md:block">
    <div class="flex items-center justify-between w-full px-16 py-4 rounded-b-xl bg-cyan-800">
        <!-- Logo Start -->
            <div class="flex gap-2">
                <img alt="404" src="../build/assets/images/" class="w-16 bg-black ">
                <p class="self-center text-2xl font-semibold text-white">Sargassum Biotech</p>
            </div>
        <!-- Logo End -->

        <!-- Nav Buttons Start -->
            <div class="flex gap-6 text-lg font-medium">
                <a href="{{ route('home') }}" class="px-6 py-2 duration-200 rounded-full hover:bg-gray-200 active:bg-gray-300 bg-gray-50">
                    Home
                </a>
                <a href="{{ route('catalog') }}" class="px-6 py-2 rounded-full hover:bg-gray-200 active:bg-gray-300 bg-gray-50">
                    Our Product
                </a>
                <a href="{{ route('about') }}" class="px-6 py-2 rounded-full hover:bg-gray-200 active:bg-gray-300 bg-gray-50">
                    About Us
                </a>
            </div>
        <!-- Nav Buttons End -->
    </div>
</div>
