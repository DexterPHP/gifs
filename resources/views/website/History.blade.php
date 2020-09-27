@include('website.static.header')
<section class="team-main text-center py-5 py-3">
    <!------------------ Hover Effect Style : Demo - 16 --------------->
    <div class="container">
        <div class="inner-sec-w3ls py-lg-5 py-3">
            <h2 class="title-wthree text-center mb-lg-5 mb-3">Your History ({{ Auth::user()->name }} ) </h2>
            <div class="row t-in mt-3">
                @foreach($history as $historty)
                <div class="col-md-4 price-main-info text-center aos-init aos-animate" data-aos="fade-up">
                    <div class="price-inner card box-shadow">

                        <div class="card-body">
                            <h4 class="text-uppercase mb-3">Search Key</h4>
                            <h5 class="card-title-wthree pricing-card-title-wthree">
                                <a class="" href="/search/{{$historty->SearchKey}}">
                                    {{$historty->SearchKey}}
                                </a>

                            </h5>
                            <ul class="list-unstyled mt-3 mb-4">
                                <li>{{$historty->created_at->diffForHumans()}}</li>

                            </ul>
                            <div class="log-in mt-md-3 mt-2">
                                <a class="hover-2 btn text-uppercase" href="/search/{{$historty->SearchKey}}">View</a>
                            </div>
                        </div>
                    </div>
                </div>
                 @endforeach


            </div>

        </div>
    </div>
</section>
@include('website.static.footer')
