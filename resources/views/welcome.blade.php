<x-guest-layout>

    <!-- Hero Area -->
    <div class="relative pt-52 pb-64 z-10 bg-cover bg-center" style="background-image: url('/img/hero-bg.jpg')">
        <div class="absolute h-full w-full bg-black opacity-50 left-0 top-0"></div>
        <div class="container relative z-20 text-white text-center">
            <h2 class="text-6xl font-bold">Guide Property -- your guide <br>to the primary real estate market in dubai.
            </h2>
            <p class="text-2xl mt-8">The most convenient real estate search portal in Dubai, start searching now!</p>
        </div>
    </div>
    <!-- Search From Area -->
    <div class="rounded-lg container bg-white p-4 relative -m-10 z-30 shadow-lg">
        @include('components.property-search-form')
    </div>
    <!-- Content Area -->
    <div class="pt-32 container text-center">
        <h2 class="section-title">Choose real estate by points, quickly <br>and efficiently witht the help of <span
                class="underline">Smart search</span></h2>
        <p class="my-3 text-xl">Answer a few questions and get access to a personal selection of objects</p>
        <a href=""
            class="btn-outline px-6 py-2 leading-none pt-3 inline-block text-lg border-2 border-black rounded-lg">Start
            the review</a>

    </div>

    <div class="pt-14 container text-center">
        <h2 class="section-title">Why should you choose a property <br>with the help of our service?</h2>
        <div class="flex -mx-3 flex-wrap justify-between mt-10">
            <div class="w-3/12  mt-10 mx-3 text-base">
                <h3 class="mb-2">Huge selection of real estate</h3>
                <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Dolore</p>
            </div>
            <div class="w-3/12  mt-10 mx-3 text-base">
                <h3 class="mb-2">Huge selection of real estate</h3>
                <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Dolore</p>
            </div>
            <div class="w-3/12  mt-10 mx-3 text-base">
                <h3 class="mb-2">Huge selection of real estate</h3>
                <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Dolore</p>
            </div>
            <div class="w-3/12  mt-10 mx-3 text-base">
                <h3 class="mb-2">Huge selection of real estate</h3>
                <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Dolore</p>
            </div>
            <div class="w-3/12  mt-10 mx-3 text-base">
                <h3 class="mb-2">Huge selection of real estate</h3>
                <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Dolore</p>
            </div>
            <div class="w-3/12  mt-10 mx-3 text-base">
                <h3 class="mb-2">Huge selection of real estate</h3>
                <p class="text-xs text-center mx-auto w-4/6">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                    Dolore</p>
            </div>
        </div>
    </div>
    <div class="container text-center pt-14">
        <h2 class="section-title">More information about us</h2>
        <div class="relative mt-10 mb-14 bg-cover rounded-xl py-24 bg-center"
            style="background-image: url('/img/hero-bg.jpg')">
            <div class="absolute w-full h-full rounded-xl opacity-50 bg-black left-0 top-0"></div>
            <div class="relative z-20">
                <a href="" class="text-white text-xl flex flex-col justify-center items-center"><span
                        class="border-2 border-white w-12 h-12 text-center pt-1 pl-1 leading-10 text-2xl hover:border-yellow-500 duration-200 rounded-full mb-2"><i
                            class="fa fa-play"></i></span>Watch the video</a>
            </div>
        </div>

        <div class="text-xl">
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto autem corporis debitis
                dignissimos doloremque eius error explicabo impedit iste libero magnam, natus officiis omnis quasi
                ratione sequi totam, vero.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam architecto
                autem corporis debitis
                dignissimos doloremque eius error explicabo impedit iste libero magnam, natus officiis omnis quasi
                ratione sequi totam, vero.</p>

        </div>
    </div>


    <div class="container pt-14">
        <div class="flex justify-between ">
            <div class="flex-1 mr-10 text-lg leading-normal">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores deleniti ipsam iure laborum nemo
                    non odit quis quod, sint tempore. Ab culpa cupiditate error, eum incidunt officiis rem sapiente
                    voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores deleniti ipsam iure
                    laborum nemo non odit quis quod, sint tempore. Ab culpa cupiditate error, eum incidunt officiis rem
                    sapiente voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores deleniti
                    ipsam iure laborum nemo non odit quis quod, sint tempore. Ab culpa cupiditate error, eum incidunt
                    officiis rem sapiente voluptate.Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores
                    deleniti ipsam iure laborum nemo non odit quis quod, sint tempore. Ab culpa cupiditate error, eum
                    incidunt officiis rem sapiente voluptate</p>
            </div>
            <div class="flex-1 ml-10">
                <img src="/img/2.jpg" alt="">
            </div>
        </div>
    </div>
    <div class="container pt-14">
        <div class="flex justify-center items-center">
            <a href="" class="btn">Start searching with filters</a>
            <p class="mx-10">or</p>
            <a href="" class="btn-outline">Start searching on the map</a>
        </div>
    </div>

    <!-- Last Added Objects -->
    <div class="container py-14">
        <h2 class="section-title">Last added objusts</h2>
        <div class="flex flex-wrap -mx-3 justify-between mt-10">



            @foreach ($properties as $property)
            <div class="w-4/12">
                <div class="mx-3 mb-6 shadow-lg relative rounded-md">
                    <a href=""
                        class="absolute left-3 w-9 h-9 leading-10 self-center top-3 bg-black text-white bg-opacity-25 text-center hover:bg-yellow-500 hover:text-white duration-200 rounded-full text-base"><i
                            class="fa fa-heart-o"></i></a>
                    <div class="py-20 bg-center" style="background-image: url(img/{{ $property->featured_image }})">
                    </div>
                    <div class="p-3">
                        <h2 class="leading-0 text-base">{{ $property->title }}</h2>
                        <h3 class="text-2xl py-3">{{ number_format($property->price, 2, ',', ',') }} TL</h3>
                        <div class="border-t-2">
                            <ul class="flex items-center -mx-1 my-4">
                                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">
                                    {{ $property->bedroom }} bed</li>
                                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">
                                    {{ $property->bathroom }} bath</li>
                                <li class="px-2 py-1 bg-blue-50 rounded-md text-xs mx-1 shadow-sm">
                                    {{ $property->net_area }} ft<sup>2</sup></li>
                            </ul>
                            <a href="{{ route('property.single', $property) }}" class="btn w-full text-center">More
                                details</a>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>


</x-guest-layout>
