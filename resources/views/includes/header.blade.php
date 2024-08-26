<div class="container d-flex justify-content-between align-items-center">

    <div class="logo">
        <!-- <h1 class="text-light"><a href="/"><span>Msonge</span></a></h1>        -->
        <a href="/"><img src="{{ asset('assetss/image/logoo.png') }}" alt="" class="img-fluid"></a>
    </div>

    <nav id="navbar" class="navbar">
        <ul>
            <li><a class="" href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('about-us') }}">About Us</a></li>
            <li><a href="{{ route('services') }}">Services</a></li>
            <li><a href="{{ route('product') }}">Product</a></li>        
            <li><a href="{{ route('contact-us') }}">Contact Us</a></li>            

            @guest
                @if (Route::has('login'))
                    <li><a href="{{ route('login') }}">Login / Register</a></li>
                @endif
            @else
                <li><a href="#"><i class="icon fa fa-user"></i>Welcome - {{ Auth::user()->f_name }} {{ Auth::user()->l_name }}</a></li>
                <li class="dropdown"><a href="{{ route('cart') }}">My Cart<span class="badge badge-pill cart-count" style="background-color: red; margin-bottom:10px;">0</span></a>
                    <ul>
                        {{--  <li><a href="#">Profile</a></li>  --}}
                        <li><a href="{{ route('my-orders') }}">My Orders</a></li>
                    </ul>
                <li class="dropdown"><a href="#"><span>Accounts</span> <i class="bi bi-chevron-down"></i></a>
                <ul>
                    {{--  <li><a href="#">Profile</a></li>  --}}
                    <li><a href="{{ route('logout') }}">Logout</a></li>
                </ul>
            </li>
            @endguest

        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>

</div>
