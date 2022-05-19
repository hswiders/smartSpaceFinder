<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Space Finder</title>

    <link rel="stylesheet" href="{{asset('assets/frontend/css/vendor.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/frontend/css/responsive.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
    
    
</head>
<body>
    <!-- preloader area start -->
    <!-- <div class="preloader" id="preloader">
        <div class="preloader-inner">
            <div class="spinner">
                <div class="dot1"></div>
                <div class="dot2"></div>
            </div>
        </div>
    </div> -->

    <div class="body-overlay" id="body-overlay"></div>
    <div class="td-search-popup" id="td-search-popup">
        <form action="" class="search-form">
            <div class="form-group">
                <input type="text" class="form-control" placeholder="Search.....">
            </div>
            <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
        </form>
    </div>
    

    <div class="navbar-area navbar-area-2">
        <div class="navbar-top bg-main">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 text-lg-left text-center">
                        <ul>
                            <!-- <li><p><img src="assets/images/location.png" alt="img"> 420 Love Sreet 133/2 flx City</p></li> -->
                            <li><p><img src="{{asset('assets/frontend/images/phone.png')}}" alt="img"> +(06) 017 800 628</p></li>
                            <li><p><img src="{{asset('assets/frontend/images/envelope.png')}}" alt="img">  example@gmail.com</p></li>
                        </ul>
                    </div>
                    <div class="col-lg-4">
                        <ul class="topbar-right text-lg-right text-center">
                            @if(Auth::id())

                            <li>
                                <a class="ml-0" href="{{route('user.dashboard')}}">My Account</a>
                                <a href="{{route('user.logout')}}">Logout</a>
                            </li>
                            @else
                            <li>
                                <a class="ml-0" href="{{route('register')}}">Register</a>
                                <a href="{{route('login')}}">Login</a>
                            </li>
                            @endif
                        </ul>
                    </div>
                </div>
            </div>
        </div>


        <nav class="navbar navbar-expand-lg">
            <div class="container nav-container">
                <div class="responsive-mobile-menu">
                    <button class="menu toggle-btn d-block d-lg-none" data-target="#dkt_main_menu" 
                    aria-expanded="false" aria-label="Toggle navigation">
                        <span class="icon-left"></span>
                        <span class="icon-right"></span>
                    </button>
                </div>
                <div class="logo">
                    <a href="{{ route('home') }}"><img src="{{asset('assets/frontend/images/white-logo.png')}}" width="150" alt="img"></a>
                </div>
                <div class="nav-right-part nav-right-part-mobile">
                    <a class="btn btn-base" href="add-property.html">Submit</a>
                </div>
                <div class="collapse navbar-collapse" id="dkt_main_menu">
                    <ul class="navbar-nav menu-open text-center">
                        <li><a href="{{ route('home') }}">Home</a></li>
                        <li class="dropdown show">
                            <a href="javascript:;"
                             class="dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Properties</a>
                            <div  class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                <a class="dropdown-item" href="{{ route('search-property') }}">Furnished Full Residence</a>
                                <a class="dropdown-item" href="{{ route('search-property') }}">Unfurnished - Full Residence</a>
                                <a class="dropdown-item" href="{{ route('search-property') }}">Furnished - Shared Residence</a>
                                <a class="dropdown-item" href="{{ route('search-property') }}">Unfurnished Shared Residence</a>
                            </div >
                        </li>
                        <li><a href="{{ route('search-property') }}">RV Rental</a></li>
                        <li><a href="{{ route('search-property') }}">Office Space</a></li>
                        <li><a href="{{ route('search-property') }}">Membership</a></li>
                        <li><a href="{{ route('search-property') }}">Search</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </div>
                <div class="nav-right-part nav-right-part-desktop">
                    <ul>
                        <li><a class="search" href="#"><i class="fa fa-search"></i></a></li>
                        <li><a class="btn btn-base" href="{{ route('user.add-property') }}">Submit <i class="fa fa-plus"></i></a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>