
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">

    <link href="{!! asset('css/app.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <script type="text/javascript" src="{!! asset('js/app.js') !!}"></script>

    <title>{{ config('app.name') }}</title>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Bootstrap core CSS -->
    <link href="{!! asset('css/bootstrap.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <!-- Material Design Bootstrap -->
    <link href="{!! asset('css/mdb.min.css') !!}" media="all" rel="stylesheet" type="text/css" />
    <!-- Your custom styles (optional) -->
    <link href="{!! asset('css/style.css') !!}" media="all" rel="stylesheet" type="text/css" />
</head>

<body>

    @include('includes.navbar')

    <button id="myBtn" class="btn btn-outline-dark scroll-top" title="Go to top"> <i class="fa fa-arrow-up"></i> </button>
    <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {scrollFunction()};
            
            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("myBtn").style.display = "block";
                } else {
                    document.getElementById("myBtn").style.display = "none";
                }
            }
            
            // When the user clicks on the button, scroll to the top of the document
                $(".scroll-top").click(function() {
                $('html,body').animate({
                    scrollTop: $(".view").offset().top},
                    'slow');
                });
            </script>
    <!--Main Navigation-->
    <header>
 
        <!--Mask-->
        <div id="intro" class="view">

            <div class="mask rgba-black-strong">

                <div class="container-fluid d-flex align-items-center justify-content-center h-100">

                    <div class="row d-flex justify-content-center text-center">

                        <div class="col-ml-8">

                            <!-- Heading -->
                            <h2 class="display-4 font-weight-bold white-text pt-5 mb-2">මේකට නමක් දාපන්</h2>

                            <!-- Divider -->
                            <hr class="hr-light">

                            <!-- Description -->
                            <h4 class="white-text my-4">
                                
                            </h4>
                            <button type="button" class="btn btn-outline-white scroll-join">
                                Join Us
                                <i class="fa fa-user-plus ml-2"></i> 
                            </button>
                            

                            <script>
                                $(".scroll-join").click(function() {
                                $('html,body').animate({
                                    scrollTop: $("#join").offset().top},
                                    'slow');
                                });
                            </script>
                        </div>

                    </div>

                </div>

            </div>

        </div>
        <!--/.Mask-->

    </header>
    <!--Main Navigation-->

    <!--Main layout-->
    <main class="mt-5">
        <div class="container">

            
            <!--Section: Contact-->
            <section id="join">
<br><br><br><br>
                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center txtLogin">Join Us</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-5 logindiv">
                        <h3 class="mb-5 font-weight-bold text-center">Log In</h3>
                        <!-- Form contact -->
                            <form class="p-5" method="POST" action="{{ route('login') }}">
                                @csrf
                                
                                <div class="md-form form-sm"> <i class="fa fa-at prefix grey-text"></i>
                                    <input id="email" name="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-sm" required>
                                    <label for="email">E Mail</label>

                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif
                                </div>

                                <div class="md-form form-sm"> <i class="fa fa-key prefix grey-text"></i>
                                    <input id="password" name="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-sm" required>
                                    <label for="password">Password</label>

                                    @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                </div>

                                <div class="text-center mt-4">
                                    <button type="submit" class="btn btn-primary">{{ __('Login') }} <i class="fa fa-sign-in-alt ml-1"></i></button>

                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                </div>
        
                    </form>
                    </div>
                    <!--Grid column-->
                     <div class="col-md-2"></div>
                    <div class="col-md-5 signupdiv">
                            <h3 class="mb-5 font-weight-bold text-center">Sign Up</h3>
                            <form class="p-5" method="POST" action="{{ route('register') }}">
                                    @csrf
                                    
                                    
                                    <div class="md-form form-sm"> <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" name="username" id="username" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }} form-control-sm" value="{{ old('username') }}" required>
                                        <label for="username">Username</label>
    
                                        @if ($errors->has('username'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('username') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="md-form form-sm"> <i class="fa fa-at prefix grey-text"></i>
                                        <input type="email" name="email" id="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }} form-control-sm" value="{{ old('email') }}" required>
                                        <label for="email">Your Email</label>
    
                                        @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="md-form form-sm"> <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" name="f_name" id="f_name" class="form-control{{ $errors->has('f_name') ? ' is-invalid' : '' }} form-control-sm" value="{{ old('f_name') }}" required>
                                        <label for="f_name">First Name</label>
    
                                        @if ($errors->has('f_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('f_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>

                                    <div class="md-form form-sm"> <i class="fa fa-user prefix grey-text"></i>
                                        <input type="text" name="l_name" id="l_name" class="form-control{{ $errors->has('l_name') ? ' is-invalid' : '' }} form-control-sm" value="{{ old('l_name') }}" required>
                                        <label for="l_name">Last Name</label>
    
                                        @if ($errors->has('l_name'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('l_name') }}</strong>
                                            </span>
                                        @endif
                                    </div>
    
                                    <div class="md-form form-sm"> <i class="fa fa-key prefix grey-text"></i>
                                        <input type="password" name="password" id="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }} form-control-sm" required>
                                        <label for="password">Password</label>
    
                                        @if ($errors->has('password'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                        @endif
                                    </div>
    
                                    <div class="md-form form-sm"> <i class="fa fa-key prefix grey-text"></i>
                                        <input type="password" name="password_confirmation" id="password-confirm" class="form-control form-control-sm" required>
                                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                    </div>
    
                                    <div class="text-center mt-4">
                                        <button type="submit" class="btn btn-primary">{{ __('Signup') }} <i class="fa fa-user-plus ml-1"></i></button>
                                    </div>  
                                    
                            <!-- Form contact -->
                        </form>
                    </div>
                </div>
                <!--Grid row-->

            </section>
            <!--Section: Join-->
<br><br><br><br><br><br><br>
            <!--Section: Best Features-->
            <section id="best-features" class="text-center">
                <br><br><br><br>
                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold">Features of C H A T T E R</h2>

                <!--Grid row-->
                <div class="row d-flex justify-content-center mb-4">

                    <!--Grid column-->
                    <div class="col-md-8">

                        <!-- Description -->
                        

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-4 mb-5">
                        <i class="fa fa-lock fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Security</h4>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-users fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">User Friendly</h4>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-share-square fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Easy Document Sharing</h4>
                    </div>
                    <!--Grid column-->
                </div>
<br><br><br><br>
                <div class="row">
                    <!--Grid column-->
                    <div class="col-md-4 mb-5">
                        <i class="fa fa-comment fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Reliable Messaging</h4>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-phone fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Free and Clear Voice Chat</h4>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-4 mb-1">
                        <i class="fa fa-tachometer fa-4x orange-text"></i>
                        <h4 class="my-4 font-weight-bold">Low Data Usage</h4>
                    </div>
                    <!--Grid column-->
                </div>
                <!--Grid row-->

            </section>
            <!--Section: Best Features-->

            <hr class="my-5">

            <!--Section: Examples-->
            <section id="examples" class="text-center">
<br><br><br><br>
                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold">Stunning Examples</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/48.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Heading</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                            assumenda deleniti hic.</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/49.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Heading</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                            assumenda deleniti hic.</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/29.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Heading</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                            assumenda deleniti hic.</p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-12 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/10.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Heading</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                            assumenda deleniti hic.</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/11.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Heading</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                            assumenda deleniti hic.</p>

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-lg-4 col-md-6 mb-4">

                        <div class="view overlay z-depth-1-half">
                            <img src="https://mdbootstrap.com/img/Photos/Others/images/13.jpg" class="img-fluid" alt="">
                            <div class="mask rgba-white-slight"></div>
                        </div>

                        <h4 class="my-4 font-weight-bold">Heading</h4>
                        <p class="grey-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Reprehenderit maiores nam, aperiam minima
                            assumenda deleniti hic.</p>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Examples-->

            <hr class="my-5">

            <!--Section: Gallery-->
            <section id="gallery">

                <!-- Heading -->
                <h2 class="mb-5 font-weight-bold text-center">Gallery heading</h2>

                <!--Grid row-->
                <div class="row">

                    <!--Grid column-->
                    <div class="col-md-6 mb-4">

                        <!--Carousel Wrapper-->
                        <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">
                            <!--Indicators-->
                            <ol class="carousel-indicators">
                                <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="1"></li>
                                <li data-target="#carousel-example-1z" data-slide-to="2"></li>
                            </ol>
                            <!--/.Indicators-->
                            <!--Slides-->
                            <div class="carousel-inner z-depth-1-half" role="listbox">
                                <!--First slide-->
                                <div class="carousel-item active">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/84.jpg" alt="First slide">
                                </div>
                                <!--/First slide-->
                                <!--Second slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/85.jpg" alt="Second slide">
                                </div>
                                <!--/Second slide-->
                                <!--Third slide-->
                                <div class="carousel-item">
                                    <img class="d-block w-100" src="https://mdbootstrap.com/img/Photos/Others/images/86.jpg" alt="Third slide">
                                </div>
                                <!--/Third slide-->
                            </div>
                            <!--/.Slides-->
                            <!--Controls-->
                            <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="sr-only">Previous</span>
                            </a>
                            <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="sr-only">Next</span>
                            </a>
                            <!--/.Controls-->
                        </div>
                        <!--/.Carousel Wrapper-->

                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6">

                        <!--Excerpt-->
                        <a href="" class="teal-text">
                            <h6 class="pb-1">
                                <i class="fa fa-heart"></i>
                                <strong> Lifestyle </strong>
                            </h6>
                        </a>
                        <h4 class="mb-3">
                            <strong>This is title of the news</strong>
                        </h4>
                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                            placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
                            debitis aut rerum.</p>

                        <p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime
                            placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus et aut officiis
                            debitis aut rerum.</p>
                        <p>by
                            <a>
                                <strong>Jessica Clark</strong>
                            </a>, 26/08/2016</p>
                        <a class="btn btn-primary btn-md">Read more</a>

                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->

            </section>
            <!--Section: Gallery-->

            <hr class="my-5">

        </div>
    </main>
    <!--Main layout-->

    <!--Footer-->
    <footer class="page-footer font-small unique-color-dark pt-0">

        <!-- Social buttons -->
        <div class="primary-color">
            <div class="container">
                <!--Grid row-->
                <div class="row py-4 d-flex align-items-center">

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                        <h6 class="mb-0 white-text">Get connected with us on social networks!</h6>
                    </div>
                    <!--Grid column-->

                    <!--Grid column-->
                    <div class="col-md-6 col-lg-7 text-center text-md-right">
                        <!--Facebook-->
                        <a class="fb-ic ml-0">
                            <i class="fa fa-facebook white-text mr-4"> </i>
                        </a>
                        <!--Twitter-->
                        <a class="tw-ic">
                            <i class="fa fa-twitter white-text mr-4"> </i>
                        </a>
                        <!--Google +-->
                        <a class="gplus-ic">
                            <i class="fa fa-google-plus white-text mr-4"> </i>
                        </a>
                        <!--Linkedin-->
                        <a class="li-ic">
                            <i class="fa fa-linkedin white-text mr-4"> </i>
                        </a>
                        <!--Instagram-->
                        <a class="ins-ic">
                            <i class="fa fa-instagram white-text mr-lg-4"> </i>
                        </a>
                    </div>
                    <!--Grid column-->

                </div>
                <!--Grid row-->
            </div>
        </div>
        <!-- Social buttons -->

        <!--Footer Links-->
        <div class="container mt-5 mb-4 text-center text-md-left">
            <div class="row mt-3">

                <!--First column-->
                <div class="col-md-3 col-lg-4 col-xl-3 mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Company name</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>Here you can use rows and columns here to organize your footer content. Lorem ipsum dolor sit
                        amet, consectetur adipisicing elit.</p>
                </div>
                <!--/.First column-->

                <!--Second column-->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Products</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">MDBootstrap</a>
                    </p>
                    <p>
                        <a href="#!">MDWordPress</a>
                    </p>
                    <p>
                        <a href="#!">BrandFlow</a>
                    </p>
                    <p>
                        <a href="#!">Bootstrap Angular</a>
                    </p>
                </div>
                <!--/.Second column-->

                <!--Third column-->
                <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Useful links</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <a href="#!">Your Account</a>
                    </p>
                    <p>
                        <a href="#!">Become an Affiliate</a>
                    </p>
                    <p>
                        <a href="#!">Shipping Rates</a>
                    </p>
                    <p>
                        <a href="#!">Help</a>
                    </p>
                </div>
                <!--/.Third column-->

                <!--Fourth column-->
                <div class="col-md-4 col-lg-3 col-xl-3">
                    <h6 class="text-uppercase font-weight-bold">
                        <strong>Contact</strong>
                    </h6>
                    <hr class="deep-purple accent-2 mb-4 mt-0 d-inline-block mx-auto" style="width: 60px;">
                    <p>
                        <i class="fa fa-home mr-3"></i> New York, NY 10012, US</p>
                    <p>
                        <i class="fa fa-envelope mr-3"></i> info@example.com</p>
                    <p>
                        <i class="fa fa-phone mr-3"></i> + 01 234 567 88</p>
                    <p>
                        <i class="fa fa-print mr-3"></i> + 01 234 567 89</p>
                </div>
                <!--/.Fourth column-->

            </div>
        </div>
        <!--/.Footer Links-->

        <!--Copyright-->
        <div class="footer-copyright py-3 text-center">
            © 2018 Copyright:
            <a href="https://mdbootstrap.com/bootstrap-tutorial/"> MDBootstrap.com </a>
        </div>
        <!--/.Copyright-->

    </footer>
    <!--/.Footer--> 


    <!-- SCRIPTS -->
    <!-- JQuery -->
    <script type="text/javascript" src= {!! asset('js/jquery-3.3.1.min.js') !!}></script>
    <!-- Bootstrap tooltips -->
    <script type="text/javascript" src= {!! asset('js/popper.min.js') !!}></script>
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src= {!! asset('js/bootstrap.min.js') !!}></script>
    <!-- MDB core JavaScript -->
    <script type="text/javascript" src= {!! asset('js/mdb.min.js') !!}></script>

    <!--Google Maps-->
    <script src="https://maps.google.com/maps/api/js"></script>

    

    <!-- Carousel options -->
    <script>
        $('.carousel').carousel({
            interval: 3000,
        })
    </script> 
</body>

</html>
