@extends('layouts.web')
@section('content')

<div class="top-shadow"></div>
<div class="inner-page">
<div class="slider-item" style="background-image: url('/asset_files/images/hero_2.jpg');">
<div class="container">
<div class="row slider-text align-items-center justify-content-center">
<div class="col-md-8 text-center col-sm-12 element-animate pt-5">
<h1 class="pt-5"><span>About Us</span></h1>
{{-- <p class="mb-5 w-75 pl-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
</div>
</div>
</div>
</div>
</div>

</div>
<section class="section">
    <div class="container">
        <div class="row justify-content-center mb-5 element-animate">
        <div class="col-md-8 text-center">
            <h2 class="heading mb-4">History</h2>
        </div>
        <div class="row justify-content-around mb-5 element-animate">
            <div class="col-md-4 text-left">
                <p class="mb-0 lead">
                    In 1999, Kike started as a
                    retailer of edible table salt
                    and kitchen ware in
                    downtown of Kampala
                </p>
                <p class="mb-0 lead">
                    In 2007, Kike started to import
                    agro sacks, the packaging
                    material used in packaging
                    agricultural produce
                </p>
            </div>
            <div class="col-md-4 text-left">
                <p class="mb-0 lead">
                    In 2014, Kike established an
                    agro sacks manufacturing plant
                    at plot 4b mutudwe road
                    alukolongo industrial zone,
                    kampala
                </p>
                <p  class="mb-0 lead">
                    Through extensive sales of
                    agricultural packaging
                    material, Kike came to know
                    the abundant and excess
                    availability of fruits from our
                    local farmers that did not have
                    market. The fruits in most
                    cases rot and are thrown away.
                </p>
            </div>
            <div class="col-md-4 text-left">
                <p class="mb-0 lead">
                    Kike saw the wasted fruits as
                    and opportunity to invest in
                    fruit processing and value
                    addition.
                </p>
                <p  class="mb-0 lead">
                    In 2019, Kike established an
                    Aseptic Tropical Fruit
                    extraction and refinery plant at
                    plot 68/69 Kakooge,
                    Nakasongola district which is
                    the biggest pineapple growing
                    area in East Africa.
                </p>
            </div>

        </div>
        </div>
    </div>

</section>
<section class="section bg-light">
<div class="container">
<div class="row justify-content-around">
<div class="col-md-6 col-lg-4 element-animate ">
<div class="media block-6 d-block text-center">
<div class="icon mb-6"><span class="ion-eye text-success"></span></div>
<div class="media-body">
<h2 class="heading">VISION</h2>
<p>To improve the
    livelihoods of
    organic fruit
    farmers by
    providing ready
    market for their
    fruits.</p>
</div>
</div>
</div>
<div class="col-md-6 col-lg-4 element-animate ">
<div class="media block-6 d-block text-center">
<div class="icon mb-6"><span class="ion-leaf text-success"></span></div>
<div class="media-body">
<h3 class="heading">MISSION</h3>
<p>
    We want to provide a
lasting solution to our
local fruits farmers and
transform our local
fruits into a high quality
global fruit product.
</p>
</div>
</div>
</div>

</div>
</div>
</section>

<section class="section">
<div class="container">
<div class="row justify-content-center mb-5 element-animate">
<div class="col-md-8 text-center">
<h2 class="heading mb-4">Meet The Team</h2>
{{-- <p class="mb-5 lead">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove.</p> --}}
</div>
</div>
<div class="row">
<div class="col-lg-3">
<div class="media d-block media-custom text-center">
<a href="#"><img src="/asset_files/images/person_1.jpg" alt="Image Placeholder" class="img-fluid"></a>
<div class="media-body">
<h3 class="mt-0 text-black">MUGABE FRANCIS</h3>

<p><span class="text-success">Managing Director</span></p>
</div>
</div>
</div>
<div class="col-lg-3">
<div class="media d-block media-custom text-center">
<a href="#"><img src="/asset_files/images/person_2.jpg" alt="Image Placeholder" class="img-fluid"></a>
<div class="media-body">
    <h3 class="mt-0 text-black">NSABA BOB KABANZA</h3>

    <p><span class="text-success">Co-Director</span></p>
</div>
</div>
</div>
<div class="col-lg-3">
<div class="media d-block media-custom text-center">
<a href="#"><img src="/asset_files/images/person_4.jpg" alt="Image Placeholder" class="img-fluid"></a>
<div class="media-body">
    <h3 class="mt-0 text-black">OLIVIA MUGABE MITTERER</h3>

    <p><span class="text-success">International sales &
        marketing manager</span></p>
</div>
</div>
</div>
<div class="col-lg-3">
<div class="media d-block media-custom text-center">
<a href="#"><img src="/asset_files/images/person_3.jpg" alt="Image Placeholder" class="img-fluid"></a>
<div class="media-body">
    <h3 class="mt-0 text-black">NIGHT CAROL</h3>

    <p><span class="text-success">General Manager</span></p>
</div>
</div>
</div>
</div>

</div>
</section>


@endsection
