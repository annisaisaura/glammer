<header>
    <nav class="navbar">
        <ul class="navbar-nav">
            <li class="nav-item active"><a href="{{ url('/women') }}">Women</a></li>
            <li class="nav-item active"><a href="#">Men</a></li>

            <li class="nav-icon"><a href="{{ url('/women') }}"><i class="fa-solid fa-person-dress"></i></a></li>
            <li class="nav-icon"><a href="#"><i class="fa-solid fa-person"></i></a></li>
        </ul>

        <div class="navbar-brand">
            <a href="{{ url('/') }}"><img src="{{ asset('img/glammer-logo-1.png') }}" alt=""></a>
        </div>

        <ul class="navbar-btn">
            <li class="nav-item active"><a href="{{ url('/cart(2)') }}"><i class="fa-solid fa-bag-shopping"></i>Cart (3)</a></li>
            <li class="nav-item active"><a href="{{ url('/cart(2)') }}"><i class="fa-solid fa-user"></i>Name</a></li>

            <li class="nav-icon"><a href="{{ url('/cart(2)') }}"><i class="fa-solid fa-bag-shopping"></i>(3)</a></li>
            <li class="nav-icon"><a href="{{ url('/cart(2)') }}"><i class="fa-solid fa-user"></i></a></li>
        </ul>

        <button class="hamburger" onclick="">
            <i class="fa-solid fa-bars"></i>
        </button>
    </nav>
</header>