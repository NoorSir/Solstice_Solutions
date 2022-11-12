@extends('frontend.layouts.main')
@section('main-content')
    <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0.1s">
      <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="img/carousel-1.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class="mb-4 animated slideInDown">
                    <b>Custom Web</b>  <br> Development Services
                    </h1>
                    <p class="fs-5 text-body mb-5">
                     Establishing a comprehensive web development approach to drive tangible desired outcomes.
                    </p>
                    <a href="" class="btn btn-primary py-3 px-5 mt-5"
                      >More Details</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="carousel-item">
            <img class="w-100" src="img/carousel-2.jpg" alt="Image" />
            <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class=" text-white mb-4 animated slideInDown">
                     <b>Ecommerce</b> 
                      <p>Development Services</p>
                    </h1>
                    <p class="fs-5 text-white mb-5">
                      Delight your customers with secure,scable and feature-rich eCommerce Omnichannel solutions.
                    </p>
                    <a href="" class="btn btn-primary py-3 px-5"
                      >More Details</a
                    >
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#header-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->

    <!-- About Start -->
    <!-- <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <div
              class="position-relative overflow-hidden rounded ps-5 pt-5 h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="img/about.jpg"
                alt=""
                style="object-fit: cover"
              />
              <div
                class="position-absolute top-0 start-0 bg-white rounded pe-3 pb-3"
                style="width: 200px; height: 200px"
              >
                <div
                  class="d-flex flex-column justify-content-center text-center bg-primary rounded h-100 p-3"
                >
                  <h1 class="text-white mb-0">25</h1>
                  <h2 class="text-white">Years</h2>
                  <h5 class="text-white mb-0">Experience</h5>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="h-100">
              <h1 class="display-6 mb-5">
                We're Here To Assist You With Exploring Protection
              </h1>
              <p class="fs-5 text-primary mb-4">
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem sed stet
                lorem sit clita duo justo erat amet
              </p>
              <div class="row g-4 mb-4">
                <div class="col-sm-6">
                  <div class="d-flex align-items-center">
                    <img
                      class="flex-shrink-0 me-3"
                      src="img/icon/icon-04-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Flexible Insurance Plans</h5>
                  </div>
                </div>
                <div class="col-sm-6">
                  <div class="d-flex align-items-center">
                    <img
                      class="flex-shrink-0 me-3"
                      src="img/icon/icon-03-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Money Back Guarantee</h5>
                  </div>
                </div>
              </div>
              <p class="mb-4">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet
              </p>
              <div class="border-top mt-4 pt-4">
                <div class="d-flex align-items-center">
                  <img
                    class="flex-shrink-0 rounded-circle me-3"
                    src="img/profile.jpg"
                    alt=""
                  />
                  <h5 class="mb-0">Call Us: +012 345 6789</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- About End -->

    <!-- Facts Start -->
    <!-- <div class="container-fluid overflow-hidden my-5 px-lg-0">
      <div class="container facts px-lg-0">
        <div class="row g-0 mx-lg-0">
          <div class="col-lg-6 facts-text wow fadeIn" data-wow-delay="0.1s">
            <div class="h-100 px-4 ps-lg-0">
              <h1 class="text-white mb-4">For Individuals And Organisations</h1>
              <p class="text-light mb-5">
                Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit.
                Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit,
                sed stet lorem sit clita duo justo magna dolore erat amet
              </p>
              <a href="" class="align-self-start btn btn-secondary py-3 px-5"
                >More Details</a
              >
            </div>
          </div>
          <div class="col-lg-6 facts-counter wow fadeIn" data-wow-delay="0.5s">
            <div class="h-100 px-4 pe-lg-0">
              <div class="row g-5">
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Happy Clients</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Projects Succeed</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Awards Achieved</p>
                </div>
                <div class="col-sm-6">
                  <h1 class="display-5" data-toggle="counter-up">1234</h1>
                  <p class="fs-5 text-primary">Team Members</p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Facts End -->

    <!-- Features Start -->
    <!-- <div class="container-xxl py-5">
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">Few Reasons Why People Choosing Us!</h1>
            <p class="mb-4">
              Tempor erat elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu
              diam amet diam et eos. Clita erat ipsum et lorem et sit, sed stet
              lorem sit clita duo justo magna dolore erat amet
            </p>
            <div class="row g-3">
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.1s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-06-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Easy Process</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.2s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-03-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Fast Delivery</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.3s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-04-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Policy Controlling</h5>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 wow fadeIn" data-wow-delay="0.4s">
                <div class="bg-light rounded h-100 p-3">
                  <div
                    class="bg-white d-flex flex-column justify-content-center text-center rounded h-100 py-4 px-3"
                  >
                    <img
                      class="align-self-center mb-3"
                      src="img/icon/icon-07-primary.png"
                      alt=""
                    />
                    <h5 class="mb-0">Money Saving</h5>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
            <div
              class="position-relative rounded overflow-hidden h-100"
              style="min-height: 400px"
            >
              <img
                class="position-absolute w-100 h-100"
                src="img/feature.jpg"
                alt=""
                style="object-fit: cover"
              />
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Features End -->

    <!-- Service Start -->
    <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">
            Our Services
          </h1>
          <p>WE'RE GOOD AT SOME STUFF AND VERY GOOD AT OTHER STUFF</p>
        </div>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon"
                >
                  <img
                    class="img-fluid"
                    src="img/icon/Webicon.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Web Development</h4>
              </div>
              <p class="mb-4">
                Solstice Solution is one of the best web developers in Lahore, Pakistan. We aim to make websites that not only are easy to use but also capture a market.
              </p>
              <a class="btn btn-light px-3" href="#">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 "
                >
                  <img
                    class="img-fluid"
                    src="img/icon/digitalicon.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Digital Marketing</h4>
              </div>
              <p class="mb-4">
                Social media is one of the strongest modes of marketing and we at Solstice Solution use this weapon to develop a brand image and enhance brand ranking.
              </p>
              <a class="btn btn-light px-3" href="#">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 "
                >
                  <img
                    class="img-fluid"
                    src="img/icon/graphicicon.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Graphic Designing</h4>
              </div>
              <p class="mb-4">
                At Solstice we deploy a skilled team of graphic designers to project our creative ideas onto the screen. The vibrant, colorful designs add value to the social media marketing.
              </p>
              <a class="btn btn-light px-3" href="">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 "
                >
                  <img
                    class="img-fluid"
                    src="img/icon/appicon.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">App Development</h4>
              </div>
              <p class="mb-4">
                Why restrict your business only to a website? We provide the best mobile app development services in Lahore, Pakistan. We design user-friendly and efficient interfaces.
              </p>
              <a class="btn btn-light px-3" href="">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 me-4"
                >
                  <img
                    class="img-fluid"
                    src="img/icon/Ecommerceicon.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Ecommerce Development</h4>
              </div>
              <p class="mb-4">
                As the world has digitalized we tend to use E-Commerce as the main tool to process and progress. We provide impressive web design and development.
              </p>
              <a class="btn btn-light px-3" href="">Read More</a>
            </div>
          </div>
          <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0  me-4"
                >
                  <img
                    class="img-fluid"
                    src="img/icon/contenticon.png"
                    alt=""
                  />
                </div>
                <h4 class="mb-0">Content Writing</h4>
              </div>
              <p class="mb-4">
                Millions of users ranging from small businesses to big enterprises use effective content to turn their ideas into reality. Content is the first and foremost trait of communication.
              </p>
              <a class="btn btn-light px-3" href="#">Read More</a>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Service End -->

    <!-- Appointment Start -->
    <!-- <div
      class="container-fluid appointment my-5 py-5 wow fadeIn"
      data-wow-delay="0.1s"
    >
      <div class="container py-5">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.3s">
            <h1 class="display-6 text-white mb-5">
              We're Award Winning Insurance Company
            </h1>
            <p class="text-white mb-5">
              Aliqu diam amet diam et eos. Clita erat ipsum et lorem et sit, sed
              stet lorem sit clita duo justo magna dolore erat amet. Tempor erat
              elitr rebum at clita. Diam dolor diam ipsum sit. Aliqu diam amet
              diam et eos. Clita erat ipsum et lorem et sit, sed stet lorem sit
              clita duo justo magna.
            </p>
            <div class="bg-white rounded p-3">
              <div class="d-flex align-items-center bg-primary rounded p-3">
                <img
                  class="flex-shrink-0 rounded-circle me-3"
                  src="img/profile.jpg"
                  alt=""
                />
                <h5 class="text-white mb-0">Call Us: +012 345 6789</h5>
              </div>
            </div>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="bg-white rounded p-5">
              <form>
                <div class="row g-3">
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="gname"
                        placeholder="Gurdian Name"
                      />
                      <label for="gname">Your Name</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="email"
                        class="form-control"
                        id="gmail"
                        placeholder="Gurdian Email"
                      />
                      <label for="gmail">Your Email</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cname"
                        placeholder="Child Name"
                      />
                      <label for="cname">Your Mobile</label>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-floating">
                      <input
                        type="text"
                        class="form-control"
                        id="cage"
                        placeholder="Child Age"
                      />
                      <label for="cage">Service Type</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-floating">
                      <textarea
                        class="form-control"
                        placeholder="Leave a message here"
                        id="message"
                        style="height: 80px"
                      ></textarea>
                      <label for="message">Message</label>
                    </div>
                  </div>
                  <div class="col-12">
                    <button class="btn btn-primary py-3 px-5" type="submit">
                      Get Appointment
                    </button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Appointment End -->

    <!-- Team Start -->
    <!-- <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">Meet Our Professional Team Members</h1>
        </div>
        <div class="row g-4">
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
            <div class="team-item rounded">
              <img class="img-fluid" src="img/team-1.jpg" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
            <div class="team-item rounded">
              <img class="img-fluid" src="img/team-2.jpg" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
            <div class="team-item rounded">
              <img class="img-fluid" src="img/team-3.jpg" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
            <div class="team-item rounded">
              <img class="img-fluid" src="img/team-4.jpg" alt="" />
              <div class="text-center p-4">
                <h5>Full Name</h5>
                <span>Designation</span>
              </div>
              <div class="team-text text-center bg-white p-4">
                <h5>Full Name</h5>
                <p>Designation</p>
                <div class="d-flex justify-content-center">
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-twitter"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-facebook-f"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-youtube"></i
                  ></a>
                  <a class="btn btn-square btn-light m-1" href=""
                    ><i class="fab fa-linkedin-in"></i
                  ></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Team End -->

    <!-- Testimonial Start -->
    <!-- <div class="container-xxl py-5">
      <div class="container">
        <div class="text-center mx-auto" style="max-width: 500px">
          <h1 class="display-6 mb-5">What They Say About Our Insurance</h1>
        </div>
        <div class="row g-5">
          <div class="col-lg-3 d-none d-lg-block">
            <div class="testimonial-left h-100">
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-1.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-2.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-3.jpg"
                alt=""
              />
            </div>
          </div>
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
            <div class="owl-carousel testimonial-carousel">
              <div class="testimonial-item text-center">
                <img
                  class="img-fluid rounded mx-auto mb-4"
                  src="img/testimonial-1.jpg"
                  alt=""
                />
                <p class="fs-5">
                  Dolores sed duo clita tempor justo dolor et stet lorem kasd
                  labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                  et labore et tempor diam tempor erat.
                </p>
                <h5>Client Name</h5>
                <span>Profession</span>
              </div>
              <div class="testimonial-item text-center">
                <img
                  class="img-fluid rounded mx-auto mb-4"
                  src="img/testimonial-2.jpg"
                  alt=""
                />
                <p class="fs-5">
                  Dolores sed duo clita tempor justo dolor et stet lorem kasd
                  labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                  et labore et tempor diam tempor erat.
                </p>
                <h5>Client Name</h5>
                <span>Profession</span>
              </div>
              <div class="testimonial-item text-center">
                <img
                  class="img-fluid rounded mx-auto mb-4"
                  src="img/testimonial-3.jpg"
                  alt=""
                />
                <p class="fs-5">
                  Dolores sed duo clita tempor justo dolor et stet lorem kasd
                  labore dolore lorem ipsum. At lorem lorem magna ut et, nonumy
                  et labore et tempor diam tempor erat.
                </p>
                <h5>Client Name</h5>
                <span>Profession</span>
              </div>
            </div>
          </div>
          <div class="col-lg-3 d-none d-lg-block">
            <div class="testimonial-right h-100">
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-1.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-2.jpg"
                alt=""
              />
              <img
                class="img-fluid animated pulse infinite"
                src="img/testimonial-3.jpg"
                alt=""
              />
            </div>
          </div>
        </div>
      </div>
    </div> -->
    <!-- Testimonial End -->

    <!-- Winning Stories -->
    <div class="container-fluid px-5 col-10 text-center">
      <h1>Have a Look at our Winning Stories</h1>
      <p>We, as a Leading Custom Software Development Company in Pakistan, set industry standards by offering the newest technological solutions and services that deliver value, from strategy consulting to roadmaps.</p>

      <!-- Carousel Start -->
    <div class="container-fluid p-0 mb-5 wow fadeIn" data-wow-delay="0s">
      <div id="services-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="w-100" src="img/carousel-1.jpg" alt="Image" />
            <!-- <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class="mb-4 animated slideInDown">
                    <b>Custom Web</b>  <br> Development Services
                    </h1>
                    <p class="fs-5 text-body mb-5">
                     Establishing a comprehensive web development approach to drive tangible desired outcomes.
                    </p>
                    <a href="" class="btn btn-primary py-3 px-5 mt-5"
                      >More Details</a
                    >
                  </div>
                </div>
              </div>
            </div> -->
          </div>
          <div class="carousel-item">
            <img class="w-100" src="img/carousel-2.jpg" alt="Image" />
            <!-- <div class="carousel-caption">
              <div class="container">
                <div class="row">
                  <div class="col-12 col-lg-6">
                    <h1 class=" text-white mb-4 animated slideInDown">
                     <b>Ecommerce</b> 
                      <p>Development Services</p>
                    </h1>
                    <p class="fs-5 text-white mb-5">
                      Delight your customers with secure,scable and feature-rich eCommerce Omnichannel solutions.
                    </p>
                    <a href="" class="btn btn-primary py-3 px-5"
                      >More Details</a
                    >
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
        <button
          class="carousel-control-prev"
          type="button"
          data-bs-target="#servies-carousel"
          data-bs-slide="prev"
        >
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button
          class="carousel-control-next"
          type="button"
          data-bs-target="#services-carousel"
          data-bs-slide="next"
        >
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    </div>
    <!-- Carousel End -->
    </div>

    <!-- oUR wORKING pROCESS -->

    <div class="mx-5">
      <h1 class="text-center">Our Work Process</h1>
        <div class="row g-4 justify-content-center">
          <div class="col-lg-3 col-md-6 wow fadeInUp working" data-wow-delay="0.1s">
            <div class="service-item  p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon"
                >
                  <img
                    class="img-fluid"
                    src="img/icon/Webicon.png"
                    alt=""
                  />
                </div>
                <h6 class="mb-0">Web Development</h6>
              </div>
              <p class="mb-4">
                Solstice Solution is one of the best web developers in Lahore, Pakistan. We aim to make websites that not only are easy to use but also capture a market.
              </p>
              
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp working" data-wow-delay="0.3s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 "
                >
                  <img
                    class="img-fluid"
                    src="img/icon/digitalicon.png"
                    alt=""
                  />
                </div>
                <h6 class="mb-0">Digital Marketing</h6>
              </div>
              <p class="mb-4">
                Social media is one of the strongest modes of marketing and we at Solstice Solution use this weapon to develop a brand image and enhance brand ranking.
              </p>
           
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp working" data-wow-delay="0.5s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 "
                >
                  <img
                    class="img-fluid"
                    src="img/icon/graphicicon.png"
                    alt=""
                  />
                </div>
                <h6 class="mb-0">Graphic Designing</h6>
              </div>
              <p class="mb-4">
                At Solstice we deploy a skilled team of graphic designers to project our creative ideas onto the screen. The vibrant, colorful designs add value to the social media marketing.
              </p>
             
            </div>
          </div>
          <div class="col-lg-3 col-md-6 wow fadeInUp working" data-wow-delay="0.1s">
            <div class="service-item rounded h-100 p-5">
              <div class="d-flex align-items-center ms-n5 mb-4">
                <div
                  class="service-icon flex-shrink-0 "
                >
                  <img
                    class="img-fluid"
                    src="img/icon/appicon.png"
                    alt=""
                  />
                </div>
                <h6 class="mb-0">App Development</h6>
              </div>
              <p class="mb-4">
                Why restrict your business only to a website? We provide the best mobile app development services in Lahore, Pakistan. We design user-friendly and efficient interfaces.
              </p>
             
            </div>
          </div>
        
        </div>
      </div>
      <div class="text-center mt-5">
      <button class="btn btn-primary "><a href="#" class="" style="color:white">Get Started</a></button>
    </div>
    </div>
    <!-- Our Team & Culture -->
    <div class=" mt-5 mx-3">
      <div class="row container-fluid">
        <div class="col-12 col-md-6 col-lg-6 wow fadeInLeft ">
          <h2 class="">Our Team & Culture</h2>
          <p>We’re a cultural melting pot and the Best Custom Software Development Services Company. People from many backgrounds and regions work together to achieve a shared goal: to provide purposeful and impactful software development services, which is the foundation of today’s digital world.</p>

          <h2>Looking to Work with us?</h2>
          <p> We believe in providing limitless custom software development services to everyone. There is always an opportunity to shine, stand out, learn, and progress no matter what department or project you work on.</p>
        </div>
        <div class="col-12 mx-col-3 mx-sm-3 mx-md-0 col-md-6 col-lg-6 wow fadeInRight d-flex justify-content-center align-items-center d-md-flex justify-content-md-start align-items-md-start">
          <img class="col-11 col-lg-12 col-md-12" src="img/group.jpg" alt="">
        </div>
      </div>
    </div>
    <div class="container-xxl py-5">
      <h1 class="text-center">Our Location</h1>
      <div class="container">
        <div class="row g-5">
          <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">
              If You Have Any Query, Please Contact Us
            </h1>
            <p class="mb-4">
              The contact form is currently inactive. Get a functional and
              working contact form with Ajax & PHP in a few minutes. Just copy
              and paste the files, add a little code and you're done.
              <a href="https://htmlcodex.com/contact-form">Download Now</a>.
            </p>
            <form>
              <div class="row g-3">
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="name"
                      placeholder="Your Name"
                    />
                    <label for="name">Your Name</label>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-floating">
                    <input
                      type="email"
                      class="form-control"
                      id="email"
                      placeholder="Your Email"
                    />
                    <label for="email">Your Email</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <input
                      type="text"
                      class="form-control"
                      id="subject"
                      placeholder="Subject"
                    />
                    <label for="subject">Subject</label>
                  </div>
                </div>
                <div class="col-12">
                  <div class="form-floating">
                    <textarea
                      class="form-control"
                      placeholder="Leave a message here"
                      id="message"
                      style="height: 100px"
                    ></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btn-primary py-3 px-5" type="submit">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
          <div
            class="col-lg-6 wow fadeIn"
            data-wow-delay="0.5s"
            style="min-height: 450px"
          >
            <div class="position-relative rounded overflow-hidden h-100">
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3402.79695569831!2d74.30056661541032!3d31.474771156540957!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39190455f371ce3b%3A0x100eabab1546ba89!2sSolstice%20Solution!5e0!3m2!1sen!2s!4v1668159226566!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" frameborder="0"
                style="min-height: 450px; border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"></iframe>
              <!-- <iframe
                class="position-relative w-100 h-100"
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
                frameborder="0"
                style="min-height: 450px; border: 0"
                allowfullscreen=""
                aria-hidden="false"
                tabindex="0"
              ></iframe> -->
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class=" mt-5 get-touch d-flex align-items-center justify-content-center wow fadeInUp">
      <a href="contact.html" target="_blank">
        <h1 >Get in Touch with US <img src="img/icon/anchor.png" alt="" width="20px"></h1>
      </a>
    </div>
@endsection