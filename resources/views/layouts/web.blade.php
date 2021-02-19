<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700|Oxygen:400,700" rel="stylesheet">
    <link rel="stylesheet" href="asset_files/css/animate.css">
    <link rel="stylesheet" href="asset_files/css/owl.carousel.min.css">
    <link rel="stylesheet" href="asset_files/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="asset_files/fonts/ionicons/css/ionicons.min.css">
    <link rel="stylesheet" href="asset_files/fonts/fontawesome/css/font-awesome.min.css">


    <title>KIKE</title>

    <link rel="stylesheet" href="asset_files/css/style.css">
</head>
<body>

    <header role="banner">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
        <a class="navbar-brand " href="{{route('index')}}">KIKE TROPICAL FRIUTS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample05" aria-controls="navbarsExample05" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarsExample05">
        <ul class="navbar-nav pl-md-5 ml-auto">
        <li class="nav-item">
        <a class="nav-link" href="{{route('index')}}">Home</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{route('about')}}">About</a>
        </li>
        {{-- <li class="nav-item">
        <a class="nav-link" href="{{route('projects')}}">Projects</a>
        </li> --}}
        {{-- <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="javascript:void(0)" id="dropdown04" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services</a>
        <div class="dropdown-menu" aria-labelledby="dropdown04">
        <a class="dropdown-item" href="{{route('services',1)}}">Architectural Design</a>
        <a class="dropdown-item" href="">Interior</a>
        <a class="dropdown-item" href="">Building</a>
        </div>
        </li> --}}
        {{-- <li class="nav-item">
        <a class="nav-link" href="">Blog</a>
        </li> --}}
        <li class="nav-item">
        <a class="nav-link" href="{{route('contacts')}}">Contact</a>
        </li>
        </ul>
        </div>
        </div>
        </nav>
        </header>


        @yield('content')



    <footer class="site-footer" role="contentinfo">
        <div class="container">
        <div class="row mb-5">
        <div class="col-md-4 mb-5">
        <h3>About Us</h3>
        <p class="mb-5">We want to provide a
            lasting solution to our
            local fruits farmers and
            transform our local
            fruits into a high quality
            global fruit product.</p>
        {{-- <ul class="list-unstyled footer-link d-flex footer-social">
        <li><a href="#" class="p-2"><span class="fa fa-twitter"></span></a></li>
        <li><a href="#" class="p-2"><span class="fa fa-facebook"></span></a></li>
        <li><a href="#" class="p-2"><span class="fa fa-linkedin"></span></a></li>
        <li><a href="#" class="p-2"><span class="fa fa-instagram"></span></a></li>
        </ul> --}}
        </div>
        <div class="col-md-5 mb-5 pl-md-5">
        <h3>Contact Info</h3>
        <ul class="list-unstyled footer-link">
        <li class="d-block">
        <span class="d-block">Address:</span>
        <span>Plot 68/69 Nakaseta, Kakooge,
            Nakasongola, District,
            Uganda.uganda</span></li>
        <li class="d-block"><span class="d-block"> <i class="fa fa-phone" aria-hidden="true"></i> Managing Director:</span><span>+256 772 570261 / +256 759 736914</span></li>
        <li class="d-block"><span class="d-block"> <i class="fa fa-phone" aria-hidden="true"></i> For international sales:</span><span>+43 676 724 1554</span></li>
        <li class="d-block"><span class="d-block"> <i class="fa fa-phone" aria-hidden="true"></i> For local/regional sales:</span><span>+256 703 252394 / +256 752 383240</span></li>
        <li class="d-block"><span class="d-block">Email:</span><span><a href="javascript:void(0)" class="__cf_email__" data-cfemail="f29b9c949db28b9d8780969d9f939b9cdc919d9f">info@kiketropicalfruits.com</a></span></li>
        </ul>
        </div>
        {{-- <div class="col-md-3 mb-5">
        <h3>Quick Links</h3>
        <ul class="list-unstyled footer-link">
        <li><a href="#">About</a></li>
        <li><a href="#">Terms of Use</a></li>
        <li><a href="#">Disclaimers</a></li>
        <li><a href="#">Contact</a></li>
        </ul>
        </div> --}}
        <div class="col-md-3">
        </div>
        </div>
        <div class="row">
        <div class="col-12 text-md-center text-left">
        <p>

        Copyright &copy;
        <script></script><script>document.write(new Date().getFullYear());</script> All rights reserved
        with by <a target="_blank" class="text-success">Ntech</a>

        </p>
        </div>
        </div>
        </div>
        </footer>


        <div id="loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee" /><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#f4b214" /></svg></div>
        <script src="asset_files/js/jquery-3.2.1.min.js"></script>
        <script src="asset_files/js/popper.min.js"></script>
        <script src="asset_files/js/bootstrap.min.js"></script>
        <script src="asset_files/js/owl.carousel.min.js"></script>
        <script src="asset_files/js/jquery.waypoints.min.js"></script>
        <script src="asset_files/js/jquery.fancybox.min.js"></script>
        <script src="asset_files/js/main.js"></script>
        <script src="asset_files/js/main.js"></script>
</body>
</html>
