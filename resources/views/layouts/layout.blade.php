<!DOCTYPE html>
<!-- Created by CodingLab |www.youtube.com/CodingLabYT-->
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--<title> Responsive Sidebar Menu  | CodingLab </title>-->
    <link rel="stylesheet" href="{{ asset('css/layouts/style.css') }}">
    @yield('stylesheet')
    <!-- Boxicons CDN Link -->
    <link href='https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body id="body-pd">
    <header class="header" id="header">
        <div class="header_toggle"> <i class='bx bx-menu' id="header-toggle"></i> </div>
        <div class="header_img"> <img src="https://i.imgur.com/hczKIze.jpg" alt=""> </div>
    </header>
    <div class="l-navbar" id="nav-bar">
        <nav class="nav">
            <div>
                <!--by fidela nathania-->
                <a href="#" class="nav_logo"> <i class='bx bx-layer nav_logo-icon'></i> <span class="nav_logo-name">KALM</span> </a>
                <div class="nav_list">
                    <a href="{{ route('landing.home') }}" class="nav_link active"> <i class='bx bxs-home nav_icon'></i>
                        <span class="nav_name">Home</span> </a>
                    <a href="{{route('jurnal.index')}}" class="nav_link"> <i class='bx bxs-book-open nav_icon'></i>
                        <span class="nav_name">Journaling</span> </a>
                    <a href="{{ route('konsultasi.home') }}" class="nav_link"> <i class='bx bxs-group nav_icon'></i>
                        <span class="nav_name">Consulting</span> </a>
                    <a href="{{ route('meditasi.home') }}" class="nav_link"> <i class='bx bxs-leaf nav_icon'></i>
                        <span class="nav_name">Meditate</span> </a>
                    <a href="" class="nav_link"> <i class='bx bxs-conversation nav_icon'></i>
                        <span class="nav_name">Messages</span> </a>
                    <a href="{{ route('landing.profile') }}" class="nav_link"> <i class='bx bx-user nav_icon'></i>
                        <span class="nav_name">Me</span> </a>
                </div>
            </div> <a class="nav_link" onclick="event.preventDefault(); document.getElementById('logout').submit();
            "> <i class='bx bx-log-out nav_icon'></i> <span class="nav_name">Sign Out</span> </a>

            <form hidden action="{{ route('logout') }}" method="POST" id="logout">@csrf</form>

        </nav>
    </div>
    <!--Container Main start-->
    <div class="bg-light">
        @yield('content')
    </div>
    <!--Container Main end-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
    @yield('script')
    <script src="{{ asset('js/layouts/main.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
