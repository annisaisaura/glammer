<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css" integrity="sha512-Avb2QiuDEEvB4bZJYdft2mNjVShBftLdPG8FJ0V7irTLQ8Uo0qcPxh4Plq7G5tGm0rU+1SPhVotteLpBERwTkw==" crossorigin="anonymous" referrerpolicy="no-referrer"/>
</head>
<body>
    <header>
        <nav class="navbar">
            <ul class="navbar-nav">
                <li class="nav-item active"><a href="#">Women</a></li>
                <li class="nav-item active"><a href="#">Men</a></li>

                <li class="nav-icon"><a href="#"><i class="fa-solid fa-person-dress"></i></a></li>
                <li class="nav-icon"><a href="#"><i class="fa-solid fa-person"></i></a></li>
            </ul>

            <div class="navbar-brand">
                <a href="{{ url('/') }}"><img src="{{ asset('img/glammer-logo-1.png') }}" alt=""></a>
            </div>

            <ul class="navbar-btn">
                <li class="nav-item active"><a href="#"><i class="fa-solid fa-bag-shopping"></i>Cart (0)</a></li>
                <li class="nav-item active"><a href="#"><i class="fa-solid fa-user"></i>Name</a></li>

                <li class="nav-icon"><a href="#"><i class="fa-solid fa-bag-shopping"></i>(0)</a></li>
                <li class="nav-icon"><a href="#"><i class="fa-solid fa-user"></i></a></li>
            </ul>

            <button class="hamburger" onclick="">
                <i class="fa-solid fa-bars"></i>
            </button>
        </nav>
    </header>

    <script>
        
    </script>
</body>
</html>