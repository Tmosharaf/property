<x-guest-layout>
    <style>
        #header_area a {
            color: #000
        }

        #header_area a:hover {
            color: #991b1b
        }
    </style>


    {{-- Breadcrumb --}}
    <div class="shadow-md border-2 border-gray-300 py-2 bg-white">
        <div class="container mx-auto">
            <ul class="flex items-center">
                <li><a class="text-3xl text-red-800" href="{{ url('/') }}"><i class="fa fa-home"></i></a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                @if (!empty(request('type')))
                <li><a class="text-red-800" href="{{ route('properties') }}">Properties</a></li>
                <li class="mx-3"><i class="fa fa-angle-right"></i></li>
                <li class='capitalize'>{{ request('type') }}</li>
                @else
                <li>Properties</li>
                @endif


            </ul>
        </div>
    </div>


    <!-- Title & Share -->
    <div class="bg-white py-8">
        <div class="container mx-auto">
            <div class="flex justify-between">
                <div class="w-8/12">
                    <h2 class="text-3xl text-gray-600 capitalize">Properties
                        {{ !empty(request('type')) ? '- ' . request('type') : '' }}</h2>

                    @if ( !empty(request('sale')) || !empty(request('type'))|| !empty(request('price'))||
                    !empty(request('bedrooms')) )
                    <h3 class="text-sm mt-1 font-normal">

                        Displaying
                        @if (request('sale') == '1')
                        Rentable
                        @elseif (request('sale') == '2')
                        Saleable
                        @endif

                        @if (request('type') == 'land')
                        Lands
                        @elseif (request('type') == 'appartment')
                        Appartments
                        @elseif (request('type') == 'villa')
                        Villas
                        @endif

                        @if ( !empty(request('bedrooms')) )
                        with
                        {{ request('bedrooms') }}
                        @if( request('bedrooms') ==1 )
                        Bedroom
                        @else
                        Bedrooms
                        @endif
                        @endif

                        @if (request('price') == 100000)
                        whithin 0 TL - 1,00,000 TL Price Range
                        @elseif (request('price') == 200000)
                        whithin 1,00,000 TL - 2,00,000 TL Price Range
                        @elseif (request('price') == 300000)
                        whithin 2,00,000 TL - 3,00,000 TL Price Range
                        @elseif (request('price') == 400000)
                        whithin 3,00,000 TL - 4,00,000 TL Price Range
                        @elseif (request('price') == 500000)
                        and More than 5,00,000 TL Price
                        @endif
                    </h3>
                    <h4 class="text-sm font-normal"><span class="font-bold">{{ $properties->total() }}</span> Property
                        Found</h4>
                    @endif
                </div>
            </div>
        </div>
    </div>

    <!-- Content -->
    <div class="container mx-auto my-14">
        <div class="flex justify-between mx-2">

            {{-- Left Content --}}
            <div class="w-9/12 px-4 -mx-2">

                <div class="grid grid-cols-3 gap-4">
                    @forelse ($properties as $property)
                    @include('components.property-card', ['property'=>$property])
                    @empty
                    <div class="text-center">No Property Found</div>
                    @endforelse
                </div>

                <div class="bg-white p-5 rounded-md">
                    {{ $properties->links() }}
                </div>


            </div>{{-- Left Content End --}}



            {{-- Sidebar --}}
            <div class="w-3/12 mx-2 vertical-search-form shadow-lg bg-white px-3 py-3 rounded-md">
                <h2 class="text-black mb-3 text-center text-lg shadow-sm pb-2">More Filter</h2>
                @include('components.property-search-form')
            </div>


        </div>

    </div>



</x-guest-layout>
