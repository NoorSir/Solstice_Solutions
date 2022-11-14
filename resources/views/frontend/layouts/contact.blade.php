
    <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
            <h1 class="display-6 mb-5">
              If You Have Any Query, Please Contact Us
            </h1>

            @if(Session::has('success'))
                <script type="text/javascript">
                    function massge() {
                        Swal.fire(
                                    'Request Submitted!',
                                    'We will contact you shortly!',
                                    'success'
                                );
                        }
                        window.onload = massge;
                </script>
            @endif
            <form method="POST" action="{{ route('contact.us.store') }}" id="contactUSForm">
            @csrf
                @if ($errors->count()>0)
                    <div class="w-4/8  text-center  alert alert-danger" id="ERROR_COPY" style="display:none">
                    @foreach($errors->all() as $error)       
                        <b>{{$error}}</b>  </br>      
                    @endforeach
                    </div>
                    @endif
              <div class="row g-3">
                <div class="">
                    <div class="form-floating">
                        <input
                          type="text"
                          class="form-control"
                          id="name"
                          name="name"
                          placeholder="Your Name"
                        />
                        <label for="name">Your Name</label>
                    </div>
                </div>
                <div class="">
                    <div class="form-floating">
                        <input
                          type="email"
                          class="form-control"
                          id="email"
                          name="email"
                          placeholder="Your Email"
                        />
                        <label for="email">Your Email</label>
                    </div>
                </div>
                <div class="">
                    <div class="form-floating">
                        <input
                            type="text"
                            class="form-control"
                            id="subject"
                            placeholder="Subject"
                            name="subject"
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
                        name="message"
                        style="height: 100px"
                    ></textarea>
                    <label for="message">Message</label>
                  </div>
                </div>
                <div class="col-12">
                  <button class="btn btns  py-3 px-5" type="submit">
                    Send Message
                  </button>
                </div>
              </div>
            </form>
          </div>
    <!-- Sweet Alert2 -->
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
    var has_errors = document.querySelector('#ERROR_COPY');
    if(has_errors!==null){
   
   swal.fire({
      title:'Error',
      type:'error',
      icon: 'warning',
      html:jQuery("#ERROR_COPY").html(),
      showCloseButton:true,
   })
   }
    </script>