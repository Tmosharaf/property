



<div class="{{ request()->is('/') ? 'fixed' : 'relative bg-white' }} z-30 w-full py-4 px-12 flex justify-between items-center" id="header_area">
    <div class="min-w-max">
        <a href="{{ url('/')  }}"><img src="/img/logo.png" width="50" class="text-blue-500" alt=""></a>
    </div>

    <div class="w-full">
        <ul class="flex justify-center items-center">
            <li><a class="menu-item" href="{{ route('properties') }}/?type=land">Land</a></li>
            <li><a class="menu-item" href="{{ route('properties') }}/?type=villa">Villa</a></li>
            <li><a class="menu-item" href="{{ route('properties') }}/?type=appartment">Appertment</a></li>
            <li><a class="menu-item" href="#">About Us</a></li>
            <li><a class="menu-item" href="#">Contact Us</a></li>
        </ul>
    </div>

    <div class="min-w-max text-3xl">
        <a href="#">🇺🇸</a>
        <a href="#">🇧🇩</a>
    </div>
</div>
