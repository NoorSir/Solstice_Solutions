<DOCTYPE! HTML>
    <html>
    <head>
        <meta charset="utf-8" />
        <title>Solstice Solution - Pakistan's Leading Digital Marketing & Web Developments</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="keywords" />
        <meta content="" name="description" />
          <!-- Themefisher Icon font -->
       <!-- <link rel="stylesheet" href="{{asset('plugins/themefisher-font/style.css')}}"> -->
         <!-- bootstrap.min css -->
       <link rel="stylesheet" href="{{asset('plugins/bootstrap/bootstrap.min.css')}}">
    
        <!-- Favicon -->
        <link rel="apple-touch-icon" sizes="57x57" href="{{asset('favicons/apple-icon-57x57.png')}}">
        <link rel="apple-touch-icon" sizes="60x60" href="{{asset('favicons/apple-icon-60x60.png')}}">
        <link rel="apple-touch-icon" sizes="72x72" href="{{asset('favicons/apple-icon-72x72.png')}}">
        <link rel="apple-touch-icon" sizes="76x76" href="{{asset('favicons/apple-icon-76x76.png')}}">

        <link rel="android-icon" sizes="57x57" href="{{asset('favicons/android-icon-96x96.png')}}">
        <link rel="android-icon" sizes="60x60" href="{{asset('favicons/android-icon-144x144.png')}}">
        <link rel="android-icon" sizes="72x72" href="{{asset('favicons/android-icon-192x192.png')}}">

        <link rel="ms-icon" sizes="76x76" href="{{asset('favicons/ms-icon-70x70.png')}}">
        <link rel="ms-icon" sizes="114x114" href="{{asset('favicons/ ms-icon-144x144.png')}}">
        <link rel="ms-icon" sizes="120x120" href="{{asset('favicons/ ms-icon-150x150.png')}}">
        <link rel="ms-icon" sizes="144x144" href="{{asset('favicons/ ms-icon-310x310.png')}}">

        <link rel="apple-touch-icon" sizes="114x114" href="{{asset('favicons/apple-icon-114x114.png')}}">
        <link rel="apple-touch-icon" sizes="120x120" href="{{asset('favicons/apple-icon-120x120.png')}}">
        <link rel="apple-touch-icon" sizes="144x144" href="{{asset('favicons/apple-icon-144x144.png')}}">
        <link rel="apple-touch-icon" sizes="152x152" href="{{asset('favicons/apple-icon-152x152.png')}}">
        <link rel="apple-touch-icon" sizes="180x180" href="{{asset('favicons/apple-icon-180x180.png')}}">
        <link rel="icon" type="image/png" sizes="192x192"  href="{{asset('favicons/android-icon-192x192.png')}}">
        <link rel="icon" type="image/png" sizes="32x32" href="{{asset('favicons/favicon-32x32.png')}}">
        <link rel="icon" type="image/png" sizes="96x96" href="{{asset('favicons/favicon-96x96.png')}}">
        <link rel="icon" type="image/png" sizes="16x16" href="{{asset('favicons/favicon-16x16.png')}}">
        <link rel="manifest" href="/manifest.json">
        <meta name="msapplication-TileColor" content="#ffffff">
        <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
        <meta name="theme-color" content="#ffffff">
    
        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com" />
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
        <link
          href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Poppins:wght@600;700&display=swap"
          rel="stylesheet"
        />
    
        <!-- Icon Font Stylesheet -->
        <link
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css"
          rel="stylesheet"
        />
        <link
          href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css"
          rel="stylesheet"
        />
    
        <!-- Libraries Stylesheet -->
        <link href="{{asset('lib\animate\animate.min.css')}}" rel="stylesheet" />
        <link href="{{asset('lib\owlcarousel\assets\owl.carousel.min.css')}}" rel="stylesheet" />
    
        <!-- Customized Bootstrap Stylesheet -->
        <link href="{{asset('css\bootstrap.min.css')}}" rel="stylesheet" />
        
        <!-- "{{asset('image\clinic\footer-house.jpg')}}"  -->
        <!-- Template Stylesheet -->
        <link href="{{asset('css\style.css')}}" rel="stylesheet" />

        <style>
            .portfolio-filter {
  margin-bottom: 40px;
  text-align: center;
}
.portfolio-filter button {
  cursor: pointer;
  display: inline-block;
  font-size: 14px;
  padding: 8px 20px;
  text-transform: uppercase;
  background: #28ABE3;
  border: none;
  color: #fff;
  outline: none;
  margin: 6px 4px;
}
.portfolio-filter button.active {
  background: #28ABE3;
  color: #fff;
  border-radius: 50px;
}

.portfolio-block {
  position: relative;
  margin-bottom: 30px;
}
.portfolio-block:before {
  transition: all 0.3s ease-in-out;
  background: rgba(0, 0, 0, 0.55);
  opacity: 0;
  top: 0;
  right: 0;
  bottom: 0;
  left: 0;
  position: absolute;
  content: "";
}
.portfolio-block:hover:before {
  opacity: 1;
}
.portfolio-block:hover .caption h4 {
  top: 45%;
}
.portfolio-block:hover .caption {
  opacity: 1;
  top: 55%;
}
.portfolio-block .caption {
  position: absolute;
  top: 50%;
  left: 50%;
  opacity: 0;
  transform: translate(-50%, -50%);
  z-index: 9;
  transition: all 0.3s ease-in-out;
  text-align: center;
}
.portfolio-block .caption h4 {
  font-size: 16px;
}
.portfolio-block .caption h4 a {
  color: #fff;
}
.portfolio-block .caption .search-icon {
  background: #28ABE3;
  color: #fff;
  display: inline-block;
  height: 45px;
  width: 45px;
  font-size: 17px;
  border-radius: 30px;
  margin-bottom: 20px;
  text-align: center;
  line-height: 47px;
}
  
        </style>

       
    </head>
    <body>
        <!-- Spinner Start -->
        <div
            id="spinner"
            class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center"
        >
            <div class="spinner-grow text-primary" role="status"></div>
        </div>
        <!-- Spinner End -->

        <!-- Topbar Start -->
        <div
            class="container-fluid topbar  py-2 px-0 d-none d-lg-block"
        >
            <div class="row gx-0 align-items-center">
                <div class="col-lg-7 px-5 text-start">
                    <div class="h-100 d-inline-flex align-items-center me-4">
                    <!-- <small class="fa fa-phone-alt me-2"></small> -->
                    <small><small class="fa fa-phone-alt me-2"></small> Call us today! +92-321-5552245 &nbsp&nbsp|&nbsp&nbsp  <small class="far fa-envelope-open me-2"></small> info@solsticesolution.com</small>
                    </div>
                
                    <!-- <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-envelope-open me-2"></small>
                    <small></small>
                    </div> -->
                    <!-- <div class="h-100 d-inline-flex align-items-center me-4">
                    <small class="far fa-clock me-2"></small>
                    <small>Mon - Fri : 09 AM - 09 PM</small>
                    </div> -->
                </div>
                <div class="col-lg-5 px-5 text-end">
                    <div class="h-100 d-inline-flex align-items-center">
                        <a class="ms-4" href="https://www.facebook.com/SolsticesolutionDigital/"
                            ><i class="fab text-white fa-facebook-f"></i
                        ></a>
                        <!-- <a class="text-white-50 ms-4" href=""
                            ><i class="fab fa-twitter"></i
                        ></a> -->
                        <a class=" ms-4" href="https://www.linkedin.com/company/solstice-solution/"
                            ><i class="fab text-white fa-linkedin-in"></i
                        ></a>
                        <a class=" ms-4" href="#"
                            ><i class="fab text-white fa-instagram"></i
                        ></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Topbar End -->

        <!-- Navbar Start -->
        <nav
            class="navbar  navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5"id="topheader">
            <a href="index.html" class="navbar-brand d-flex align-items-center">
            <h1 class="m-0">
                <img
                class="img-fluid me-3"
                src="{{asset('img\logo-pink.png')}}"
                alt=""
                />
            </h1>
            </a>
            <button
            type="button"
            class="navbar-toggler"
            data-bs-toggle="collapse"
            data-bs-target="#navbarCollapse"
            >
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav  mx-auto rounded pe-4 py-3 py-lg-0">
                    
                    <a href="{{url('/')}}" class=" nav-link  {{request()->is('/') ? 'active': ''}}" >Home</a>
                   
                <a href="{{url('/about-us')}}" class=" nav-link   {{request()->is('about-us') ? 'active' : ''}}">About Us</a>
                    <div class="nav-item dropdown">
                        <a
                            href="#"
                            class="nav-link "
                            data-bs-toggle="dropdown"
                            >Services</a
                        >
                        <div class="dropdown-menu bg-light border-0 m-0">
                            <a href="{{url('webdevelopment')}}" class="dropdown-item  {{request()->is('webdevelopment') ? 'active' : ''}}">Website Development</a>
                            <a href="#" class="dropdown-item">Software Development</a>
                            <a href="#" class="dropdown-item">Mobile App Development</a>
                            <a href="#" class="dropdown-item">Digital Marketing</a>
                            <a href="#" class="dropdown-item">Graphics Designing</a>
                        </div>
                    </div>
                    <!-- <form method="get">
        			<a type ="submit"class="nav-item nav-link" target="_blank" href="{{asset('document\Solstice-Solution-Profile.pdf')}}" >Portfolio</a>
        			</form> -->
                    <!-- <object data="{{asset('document\Solstice-Solution-Profile.pdf')}}" type=”pdf/html”>
                        <a href="{{asset('document\Solstice-Solution-Profile.pdf')}} " target="_blank" class="nav-item nav-link">Portfolio</a>
                    </object> -->
                    <a href="#" class="nav-item nav-link">Process</a>
                    <a href="#" class="nav-item nav-link">Blog</a>
                    <!-- <a href="#" class="nav-item nav-link">Contact Us</a> -->
                </div>
            </div>
            <a href="" class="btn btns px-3 d-none d-lg-block">Contact Us</a>
        </nav>
        <!-- Navbar End -->
  