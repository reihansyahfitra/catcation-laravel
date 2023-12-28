<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home | CatCation</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('favicon.ico') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Poppins&display=swap');
        div{
            font-family: 'Poppins', sans-serif;
        }
        .nav > li > a:hover, .nav > li > a:focus {
            color: #FF5800 !important;
        }
    </style>
</head>  
<body style="background-color:#FF7A34;">
    <img src="{{ asset('image/Paw.png') }}" alt="Paw" style="position:absolute; top:490px; transform: rotate(63deg); left:-40px;" class="img-fluid">
    <img src="{{ asset('image/Paw.png') }}" alt="Paw" style="position:absolute; top:590px; right:0px; width: 150px;" class="img-fluid">
    <img src="{{ asset('image/Paw.png') }}" alt="Paw" style="width: 160px; position:absolute; top:1150px; transform: rotate(63deg); left:-40px;" class="img-fluid">
    

    <div class="container-fluid">
<!--Ini adalah bagian Navigasi -->
        <div class="row bg-warning-subtle shadow-sm px-5 align-items-center fixed-top">
            <div class="col-3">
                <ul class="nav justify-content-start p-3"> 
                    <li class="nav-item">
                        <img class="img-fluid" src="{{ asset('image/Logo.png') }}" alt="Logo" width=" 35px">
                        <img class="img-fluid" src="{{ asset('image/FontLogo.png') }}" alt="FontLogo" width="110px">
                    </li>
                </ul>
            </div>

            <div class="col-6">
                <ul class="nav justify-content-center">
                    <li class="nav-item">
                        <a class="nav-link active fw-bold" style="color: #FF5800;" aria-current="page" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="#about-us">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="/faq">FAQs</a>  
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="/contactus">Contact Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-black fw-bold" href="/blog">Blog</a>
                    </li>
                </ul>
            </div>
            <div id="nav-right" class="col">
                <ul class="nav justify-content-end">
                    <li class="nav-item">
                        <a class="btn btn-outline-warning mx-2 text-bg-light shadow-sm" href="/signup" style="border-color: #FF5800; color: #FF5800; text-decoration: none;">Sign Up</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-warning shadow-sm text-light" href="/login" style="background-color: #FF5800; text-decoration: none;">Log in</a>
                    </li>
                </ul>
            </div>
        </div>
<!-- Ini bagian Home -->
        <div class="row bg-warning-subtle">
            <br><br><br><br>
        </div>
        <div class="row bg-warning-subtle px-5">
            <div class="col-7 ms-5">
                <div class="h2"><br><br>
                    <span style="color: #FF5800;">Pawsitively </span>Best for Your Furry Friend!
                </div>
                <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                <button type="button" class="btn btn-warning text-light fw-bold hover" style="background-color: #FF5800;">Contact Us ></button><br><br><br><br><br><br><br><br><br><br> 
            </div>
            <div class="col m-auto text-end">
                <img class="img-fluid" src="{{ asset('image/Kucing1Home.png') }}" alt="Kucing1Home">
            </div>
        </div>
        
<!-- Ini bagian why catcation? -->
        <div class="row bg-light">
            <div class="col-2 d-flex align-items-end">
                <img src="{{ asset('image/WhyCatCationGirl.png') }}" alt="WhyCatCationGirl" class="img-fluid">
                <img src="{{ asset('image/CatWhyGirl.png') }}" alt="CatWhyGirl" class="img-fluid">
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="card my-5 border-0 bg-light text-center" style="color: #FF5800;"><div class="h2 fw-bold">Why CatCation?</div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="card border-0 bg-light">
                            <div class="h4" style="color: #FF5800;">Neque Porro quisquam est</div>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-light">
                            <img class="img-fluid" src="{{ asset('image/Kucing2Home.png') }}" alt="Kucing2Home" width="100%">
                        </div>
                    </div>
                </div><br><br><br>
                <div class="row">
                    <div class="col">
                        <div class="card border-0 bg-light">
                            <img class="img-fluid" src="{{ asset('image/Kucing3Home.png') }}" alt="Kucing3Home">
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-light text-end">
                            <div class="h4" style="color: #FF5800;">Neque Porro quisquam est</div>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                        </div>
                    </div>
                </div><br><br><br>
                <div class="row">
                    <div class="col">
                        <div class="card border-0 bg-light">
                            <div class="h4" style="color: #FF5800;">Neque Porro quisquam est</div>
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-light">
                            <img class="img-fluid" src="{{ asset('image/Kucing4Home.png') }}" alt="Kucing4Home" width="100%">
                        </div>
                    </div>
                </div><br><br><br><br id="about-us"><br>
            </div>
            <div class="col-2"></div>
        </div>
<!-- Ini About Us -->
        <div class="row">
            <div class="card border-0 bg-warning-subtle text-center" style="color: #FF5800;"><div class="h2 fw-bold my-5">About Us</div>
            </div>
        </div>
        <div class="row bg-warning-subtle ">
            <div class="col-2"></div>
            <div class="col-8">
                <div class="row">
                    <div class="col">
                        <div class="card border-0 bg-warning-subtle  text-start">
                            <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                            </p>
                        </div>
                    </div>
                    <div class="col">
                        <div class="card border-0 bg-warning-subtle">
                            <img class="img-fluid" src="{{ asset('image/AboutUs.png') }}" alt="AboutUs" width="100%">
                        </div>
                    </div>
                </div><br id="services"><br>
            </div>
            <div class="col-2">
                <img src="{{ asset('image/Paw.png') }}" alt="Paw" style="position:absolute; top:2000px; right:0px; width: 150px;" class="img-fluid">
            </div>
        </div>
    <!-- Ini bagian Services -->
        <div class="row">
            <div class="card border-0 bg-warning-subtle text-center" style="color: #FF5800;"><div class="h2 fw-bold my-5">Our Services</div>
            </div>
        </div>
        <div class="row bg-warning-subtle">
            <div class="col-2">
                <img src="{{ asset('image/Paw.png') }}" alt="Paw" style="position:absolute; transform: rotate(63deg); left:-40px;" class="img-fluid">
            </div>
            <div class="col-8">
                <div class="row">
                    <div class="col-5">
                        <div class="card shadow" >
                            <img src="{{ asset('image/Services1.png') }}" class="card-img-top img-fluid" alt="Services1">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold" style="color: #FF5800;">Cat Grooming</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-5">
                        <div class="card shadow" >
                            <img src="{{ asset('image/Services2.png') }}" class="card-img-top img-fluid" alt="Services2">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold" style="color: #FF5800;">Cat Care</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                            </div>
                        </div>
                    </div>
                </div><br><br>
                <div class="row">
                    <div class="col-5">
                        <div class="card shadow" >
                            <img src="{{ asset('image/Services3.png') }}" class="card-img-top img-fluid" alt="Services3">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold" style="color: #FF5800;">Cat Training</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-2"></div>
                    <div class="col-5">
                        <div class="card shadow" >
                            <img src="{{ asset('image/Services4.png') }}" class="card-img-top img-fluid" alt="Services4">
                            <div class="card-body text-center">
                                <h5 class="card-title fw-bold" style="color: #FF5800;">Cat Hotel</h5>
                                <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore </p>
                            </div>
                        </div>
                    </div>
                </div><br><br><br>
            </div>
            <div class="col-2"></div>
        </div>
<!-- Ini Package -->
        <div class="row bg-warning-subtle text-center">
            <div class="h2 fw-bolder my-5" style="color: #FF5800;">Packages</div>
            <img src="{{ asset('image/Paw.png') }}" alt="Paw" style="position:absolute;  right:0px; width: 180px;" class="img-fluid">
        </div>
        <?php $count = $packages->count(); ?>
        @while($count > 0)
        <div class="row bg-warning-subtle justify-content-center">
            @foreach($packages as $package)
                <div class="col-3">
                    <div class="card shadow text-center border-0 rounded-2 m-auto" style="background: #FF894B; width: 80%;">
                        <h5 id="package-name-basic" class="card-title fw-bold text-light"><br><br>{{ $package->name }}<br><br><br></h5>
                        <div class="card-body text-center bg-light rounded-top-5">
                            <p id="package-desc-basic" class="card-text">
                                {{  $package->description }}
                            </p>
                            <a class="btn btn-warning text-light fw-bold hover" style="background-color: #FF5800;" href="/package/{id}">Details</a>
                        </div>
                    </div>
                </div>
                <?php $count--; ?>
            @endforeach
        </div>
        @endwhile
        <div class="row bg-warning-subtle">
            <div class="col">
                <div class="card border-0 bg-warning-subtle ms-5 mt-3" style="height: 235px;">
                    <img src="{{ asset('image/CatFooter2.png') }}" alt="CatFooter2"  style="width: 140px;" class="img-fluid">
                    <img src="{{ asset('image/Ball.png') }}" alt="Ball"  style="width: 70px;" class="img-fluid ms-auto">
                </div>
            </div>
            <div class="col-9"></div>
        </div>
<!-- Ini Footer -->
        <!-- <div class="row bg-warning-subtle"><br><br><br></div> -->
        <div class="row" style="background-color: #FF7A34;">
            <div class="col-4">
                <div class="card border-0 ms-5 mt-5 mb-2" style="background-color: #FF7A34;"><div class="h4 fw-bold text-light text-start">CatCation.</div></div>
                <div class="card border-0 ms-5 mb-2" style="background-color: #FF7A34;">
                    <div class="h5 fw-bold text-light text-start">Find us</div>
                    <div class="card-text text-start text-light">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore 
                    </div>
                    <br>
                    <p class="lead text-light fw-bold text-start" style="font-size: 15px;">
                        <img class="mx-1 img-fluid" src="{{ asset('image/LogoIG.png') }}" alt="LogoIG" width="30px">
                        <img class="mx-1 img-fluid" src="{{ asset('image/LogoFacebook.png') }}" alt="LogoFacebook" width="30px">
                        <img class="mx-1 img-fluid" src="{{ asset('image/LogoYucub.png') }}" alt="LogoYucub" width="30px">
                    </p>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-0 ms-5 mt-5 mb-2" style="background-color: #FF7A34;">
                    <div class="h5 fw-bold text-light text-start">Services</div>
                    <div class="card-text text-start">
                        <p><a href="/grooming" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-lighter">Cat Grooming</a></p>
                        <p><a href="/care" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-lighter">Cat Care</a></p>
                        <p><a href="/playtime" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-lighter">Cat Playtime</a></p>
                        <p><a href="/hotel" class="link-light link-offset-2 link-underline-opacity-25 link-underline-opacity-100-hover fw-lighter">Cat Hotel</a></p>
                    </div>
                    <div class="h5 fw-bold text-light text-start mt-3">Contact Us</div>
                    <p class="lead text-light fw-bold text-start" style="font-size: 15px;">
                        <img class="mx-1 img-fluid" src="{{ asset('image/LogoWA.png') }}" alt="LogoWA" width="30px">
                        +6282-XXXX-XXXX
                    </p>
                </div>
            </div>
            <div class="col-4">
                <div class="card border-0 m-5 text-start" style="background-color: #FF7A34;">
                    <div class="h4 fw-bold text-light">About Us</div>
                    <p class="lead text-light" style="font-size: 13px;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore, Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore</p>
                </div>
                <div class="card border-0 ms-5 justify-content-end align-content-end align-items-end" style="background-color: #FF7A34;">
                    <img class="ms-5 img-fluid" src="{{ asset('image/CatFooter1.png') }}" alt="CatFooter1" width="200px">
                </div>
            </div>
        </div>
    </div>
</body>
</html>