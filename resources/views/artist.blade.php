<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Artist</title>
    <link rel="stylesheet" href="{{asset('/bootstrap/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('/fonts/ionicons.min.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Features-Boxed.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Footer-Basic.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css">
    <link rel="stylesheet" href="{{asset('/css/Login-Form-Dark.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Media-Slider-Bootstrap-3.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Media-Slider-Bootstrap-3.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Navigation-with-Search.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Pretty-Registration-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Profile-Edit-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Profile-Edit-Form.css')}}">
    <link rel="stylesheet" href="{{asset('/css/Registration-Form-with-Photo.css')}}">
    <link rel="stylesheet" href="{{asset('/css/styles.css')}}">

<link rel="shortcut icon" type="image/x-icon" href="/FavIcon.png">

</head>

<body>
    <nav class="navbar navbar-light navbar-expand-md navigation-clean-search" style="background-color:rgba(52,54,66,0);">
        <div class="container"><a class="navbar-brand" href="/index.html" style="background-image:url({{asset('/img/Logo.png')}});max-width:none;width:160px;height:80px;background-repeat:no-repeat;background-size:contain;"></a><button class="navbar-toggler" data-toggle="collapse"
                data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="navbar-toggler-icon"></span></button>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/featured.html">Featured</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/genre.html">Genre</a></li>
                    <li class="nav-item" role="presentation"><a class="nav-link" href="/location.html">Location</a></li>
                </ul>
                <form class="form-inline mr-auto" target="_self">
                    <div class="form-group"><label for="search-field"><i class="fa fa-search"></i></label><input class="form-control search-field" type="search" name="search" data-bs-hover-animate="pulse" id="search-field"></div>
<<<<<<< HEAD
                </form><a class="btn btn-primary" role="button" href="warenkorb.html" style="width:40px;height:40px;margin:0px;padding-top:6px;background-image:url({{asset('/img/Warenkorb.png')}});background-size:contain;background-repeat:no-repeat;background-color:rgba(255,255,255,0);color:rgb(255,255,255);"></a>
                <a
                    class="btn btn-light action-button" role="button" href="signUp.html" style="background-color:#979c9c;">Sign Up</a><a class="btn btn-light action-button" role="button" href="logIn.html">Login</a></div>
=======
                </form>

                @auth
                    <a class="btn btn-primary" role="button" href="warenkorb.html" style="width:40px;height:40px;margin:0px;padding-top:6px;background-image:url({{asset('/img/Warenkorb.png')}});background-size:contain;background-repeat:no-repeat;background-color:rgba(255,255,255,0);color:rgb(255,255,255);"></a>
                    <a class="btn btn-light action-button" role="button" href="userProfil.html" style="background-color:#979c9c;">Profil</a>
                    <a class="btn btn-light action-button" role="button" href="{{ route('logout') }}">Logout</a>
                @endauth
                @guest()
                    <a class="btn btn-light action-button" role="button" href="signup.html" style="background-color:#979c9c;">Sign Up</a>
                    <a class="btn btn-light action-button" role="button" href="login.html">Login</a>
                @endguest

            </div>
>>>>>>> a93da9f9e546aab0c4672e09e07b1850f0576ed4
        </div>
    </nav>
    <div class="row">
        <div class="col" style="background-color:#ffffff;max-height:none;min-height:1;height:208px;"><img src="assets/img/justin_timberlake_2.jpg" style="width:282px;max-width:282px;">
            <p class="text-left" style="font-size:40px;margin-top:-145px;margin-right:0px;margin-bottom:15px;margin-left:none;width:600px;height:121px;padding-left:30px;max-width:450px;min-width:auto; color: black;">
                {{$bandinfos[0]}}
            </p>
        </div>
    </div>
    <div class="carousel slide" data-ride="carousel" id="carousel-1" style="background-color:#ffffff;">
        <div class="carousel-inner" role="listbox">
            <div class="carousel-item active"><img class="w-100 d-block" src="{{asset('img/dbImages/artists/' . $bandinfos[1] . '.jpg')}}" style="width: 800px;" alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="{{asset('img/dbImages/artists/' . $bandinfos[1] . '.jpg')}}" style="width: 800px;"  alt="Slide Image"></div>
            <div class="carousel-item"><img class="w-100 d-block" src="{{asset('img/dbImages/artists/' . $bandinfos[1] . '.jpg')}}" style="width: 800px;"  alt="Slide Image"></div>
        </div>
        <div><a class="carousel-control-prev" href="#carousel-1" role="button" data-slide="prev"><span class="carousel-control-prev-icon"></span><span class="sr-only">Previous</span></a><a class="carousel-control-next" href="#carousel-1" role="button" data-slide="next"><span class="carousel-control-next-icon"></span><span class="sr-only">Next</span></a></div>
        <ol
            class="carousel-indicators" style="margin-left:0px;margin-right:0px;margin-bottom:0px;width:auto;height:0px;max-width:auto;padding-left:0px;min-width:auto;">
            <li data-target="#carousel-1" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-1" data-slide-to="1"></li>
            <li data-target="#carousel-1" data-slide-to="2"></li>
            </ol>
    </div>
    <div role="tablist" id="accordion-1" style="margin-top:20px;">
        <div class="card" style="border-radius:0px;">
            <div class="card-header" role="tab">
                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-1" href="div#accordion-1 .item-1" data-bs-hover-animate="flash" style="color:rgb(0,0,0);">Berlin Sa. 21.07.18</a></h5>
            </div>
            <div class="collapse item-1" role="tabpanel" data-parent="#accordion-1" style="height:200px;">
                <div class="card-body">
                    <p style="font-size:16px;margin:0px;margin-top:0px;margin-right:0px;margin-left:0px;width:139px;height:0px;">Uhrzeit: 18:00 Uhr</p>
                    <p style="font-size:16px;width:211px;height:0px;margin:0px;margin-top:35px;">Location: Pierre Boulez Saal</p>
                    <p style="width:196px;font-size:16px;height:0px;margin:0px;margin-top:35px;">Album: Man of the Woods</p><button class="btn btn-primary" type="button" data-bs-hover-animate="pulse" style="width:120px;margin-top:35px;border:1px solid #348899;border-radius:20px;background-color:#348899;">Favorisieren</button>
                    <a
                        class="btn btn-primary" role="button" href="platzwahl.html" data-bs-hover-animate="pulse" style="width:120px;margin-top:35px;border:1px solid #348899;border-radius:20px;background-color:#348899;margin-left:35px;">Platz buchen</a>
                </div>
            </div>
        </div>
        <div class="card" style="margin:0px;margin-top:20px;border-radius:0px;">
            <div class="card-header" role="tab" style="margin-top:0px;">
                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-2" href="div#accordion-1 .item-2" data-bs-hover-animate="flash" style="color:rgb(0,0,0);">Stuttgart Sa. 28.07.18&nbsp;</a></h5>
            </div>
            <div class="collapse item-2" role="tabpanel" data-parent="#accordion-1" style="height:200px;">
                <div class="card-body">
                    <p style="font-size:16px;margin:0px;margin-top:0px;margin-right:0px;margin-left:0px;width:139px;height:0px;">Uhrzeit: 18:00 Uhr</p>
                    <p style="width:287px;font-size:16px;height:0px;margin:0px;margin-top:35px;">Location: Hans-Martin-Schleyer-Halle</p>
                    <p style="width:196px;font-size:16px;height:0px;margin:0px;margin-top:35px;">Album: Man of the Woods</p><button class="btn btn-primary" type="button" data-bs-hover-animate="pulse" style="width:120px;margin-top:35px;border:1px solid #348899;border-radius:20px;background-color:#348899;">Favorisieren</button>
                    <a
                        class="btn btn-primary" role="button" href="platzwahl.html" data-bs-hover-animate="pulse" style="width:120px;margin-top:35px;border:1px solid #348899;border-radius:20px;background-color:#348899;margin-left:35px;">Platz buchen</a>
                </div>
            </div>
        </div>
        <div class="card" style="margin-top:20px;border-radius:0px;">
            <div class="card-header" role="tab">
                <h5 class="mb-0"><a data-toggle="collapse" aria-expanded="false" aria-controls="accordion-1 .item-3" href="div#accordion-1 .item-3" data-bs-hover-animate="flash" style="color:rgb(0,0,0);">Frankfurt am Main Fr. 03.08.18&nbsp;</a></h5>
            </div>
            <div class="collapse item-3" role="tabpanel" data-parent="#accordion-1" style="height:200px;">
                <div class="card-body">
                    <p style="font-size:16px;margin:0px;margin-top:0px;margin-right:0px;margin-left:0px;width:139px;height:0px;">Uhrzeit: 18:00 Uhr</p>
                    <p style="width:202px;font-size:16px;height:0px;margin:0px;margin-top:35px;">Location: Jahrhunderthalle</p>
                    <p style="width:196px;font-size:16px;height:0px;margin:0px;margin-top:35px;">Album: Man of the Woods</p><button class="btn btn-primary" type="button" data-bs-hover-animate="pulse" style="width:120px;margin-top:35px;border:1px solid #348899;border-radius:20px;background-color:#348899;">Favorisieren</button>
                    <a
                        class="btn btn-primary" role="button" href="platzwahl.html" data-bs-hover-animate="pulse" style="width:120px;margin-top:35px;border:1px solid #348899;border-radius:20px;background-color:#348899;margin-left:35px;">Platz buchen</a>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-basic">
        <footer>
            <div class="social"><a href="http://www.instagram.com"><i class="icon ion-social-instagram"></i></a><a href="http://www.snapchat.de"><i class="icon ion-social-snapchat"></i></a><a href="http://www.twitter.de"><i class="icon ion-social-twitter"></i></a><a href="http://www.facebook.de"><i class="icon ion-social-facebook"></i></a></div>
            <ul
                class="list-inline">
                <li class="list-inline-item"><a href="#">Home</a></li>
                <li class="list-inline-item"><a href="#">Services</a></li>
                <li class="list-inline-item"><a href="#">About</a></li>
                <li class="list-inline-item"><a href="#">Terms</a></li>
                <li class="list-inline-item"><a href="#">Privacy Policy</a></li>
                </ul>
                <p class="copyright">NEITQEY © 2018</p>
        </footer>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/js/bs-animation.js"></script>
    <script src="assets/js/Media-Slider-Bootstrap-3.js"></script>
    <script src="assets/js/Profile-Edit-Form.js"></script>
</body>

</html>