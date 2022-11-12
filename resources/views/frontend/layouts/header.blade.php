<DOCTYPE! html>
    <html>

    <head>
        <meta charset="utf-8" />
        <title>Solstice Solution - Pakistan's Leading Digital Marketing & Web Developments</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport" />
        <meta content="" name="keywords" />
        <meta content="" name="description" />
    
        <!-- Favicon -->
        <link href="img/favicon.ico" rel="icon" />
    
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
            class="navbar navbar-expand-lg bg-white navbar-light sticky-top px-4 px-lg-5"
        >
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
            <div class="navbar-nav mx-auto rounded pe-4 py-3 py-lg-0">
                <a href="{{url('/')}}" class="nav-item nav-link active">Home</a>
                <a href="{{url('/about-us')}}" class="nav-item nav-link">About Us</a>
                <div class="nav-item dropdown">
                <a
                    href="#"
                    class="nav-link "
                    data-bs-toggle="dropdown"
                    >Services</a
                >
                <div class="dropdown-menu bg-light border-0 m-0">
                    <a href="webdevelopment" class="dropdown-item">Website Development</a>
                    <a href="#" class="dropdown-item">Software Development</a>
                    <a href="#" class="dropdown-item">Mobile App Development</a>
                    <a href="#" class="dropdown-item">Digital Marketing</a>
                    <a href="#" class="dropdown-item">Graphics Designing</a>
                </div>
                </div>
                <!-- <form method="get">
			<a type ="submit"class="nav-item nav-link" target="_blank" href="{{asset('document\Solstice-Solution-Profile.pdf')}}" >Portfolio</a>
			</form> -->

            <object data="{{asset('document\Solstice-Solution-Profile.pdf')}}" type=”pdf/html”>

                <a href="{{asset('document\Solstice-Solution-Profile.pdf')}} " target="_blank" class="nav-item nav-link">Portfolio</a>

                </object>
                <a href="#" class="nav-item nav-link">Process</a>
                <a href="#" class="nav-item nav-link">Blog</a>
                <!-- <a href="#" class="nav-item nav-link">Contact Us</a> -->
            </div>
            </div>
            <a href="" class="btn btns px-3 d-none d-lg-block">Contact Us</a>
        </nav>
        <!-- Navbar End -->
    