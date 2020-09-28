@include('website.static.header')
<section class="banner-bottom-w3layouts pt-lg-5 pt-md-3 pt-3">
    <div class="inner-sec-w3ls pt-md-5 pt-md-3 pt-3">
        <h4 class="sub-tittle text-uppercase text-center">Find us</h4>
        <h2 class="title-wthree text-center mb-lg-5 mb-3">Contact</h2>
        <div class="container">
            <div class="address row mb-5">
                <div class="col-lg-4 address-grid-w3ls">
                    <div class="row address-info aos-init aos-animate" data-aos="fade-up">
                        <div class="col-md-3 address-left text-center">
                            <i class="far fa-map"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6 class="ad-info text-uppercase mb-2">Address</h6>
                            <p> Hims, Syria

                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 address-grid-w3ls">
                    <div class="row address-info aos-init aos-animate" data-aos="fade-up">
                        <div class="col-md-3 address-left text-center">
                            <i class="far fa-envelope"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6 class="ad-info text-uppercase mb-2">Email</h6>
                            <p>Email :
                                <a href="mailto:example@email.com"> fenixthelord@gmail.com</a>
                            </p>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 address-grid-w3ls">
                    <div class="row address-info aos-init aos-animate" data-aos="fade-up">
                        <div class="col-md-3 address-left text-center">
                            <i class="fas fa-mobile-alt"></i>
                        </div>
                        <div class="col-md-9 address-right text-left">
                            <h6 class="ad-info text-uppercase mb-2">Phone</h6>
                            <p>+963 945 235 962</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            @if(session('Dexter'))
                <div class="alert alert-success alert-dismissible text-right">
                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                    <h5><i class="icon fas fa-stop"></i> شكراً لك </h5>
                    لقد تم إرسال الرسالة بشكل سليم نتمنى إن نكون عند حسن ظنكم
                </div>
            @endif
            <div class="row">
                <div class="col-lg-6 map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d11352.278792957337!2d36.7084783132766!3d34.731112697583626!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x15230ec40a6b404b%3A0x4d7a305ab79e3404!2zQ2l0eSBDZW50ZXIsIEhvbXPigI4sIFN5cmlh!5e0!3m2!1sen!2sin!4v1601203249482!5m2!1sen!2sin" allowfullscreen=""></iframe>
                </div>
                <div class="col-lg-6 main_grid_contact">
                    <div class="form">
                        <h4 class="mb-4 text-left">Send us a message</h4>
                        <form  method="post">
                            {{csrf_field()}}
                            <div class="form-group">
                                <label class="my-2">Name</label>
                                <input class="form-control" type="text" name="msg_sender" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="msg_email" placeholder="" required="">
                            </div>
                            <div class="form-group">
                                <label>Message</label>
                                <textarea id="textarea" placeholder="" name="msg_subject"></textarea>
                            </div>
                            <div class="input-group1">
                                <input class="form-control" type="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@include('website.static.footer')
