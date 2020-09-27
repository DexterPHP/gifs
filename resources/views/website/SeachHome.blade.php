
@include('website.static.header')
<section class="team-main text-center py-5 py-3">
    <!------------------ Hover Effect Style : Demo - 16 --------------->




    <div class="container gallery-lightbox my-5 inner-page">

        <div class="row m-0">
            @foreach($images as $image)
                <div class="col-lg-2 col-md-2 col-sm-3 p-0 snap-img">
                    <div class="gallery_grid1 hover08" data-aos="fade-up">
                        <div class="gallery_effect">
                            <a href="{{$image->url}}" data-lightbox="example-set" data-title-wthree="Lorem Ipsum is simply dummy the when an unknown galley of type and scrambled it to make a type specimen.">
                                <figure> <img src="{{$image->url}}" alt=" " style="width:{{$image->dims[0]}}px;height:{{$image->dims[1]}}px" class="img-fluid"> </figure>
                            </a>
                        </div>
                    </div>

                </div>
            @endforeach
        </div>
    </div>

</section>

@include('website.static.footer')
