@extends('layouts.web')

@section('content')



<div class="top-shadow"></div>
<div class="inner-page">
<div class="slider-item" style="background-image: url('asset_files/imgz/IMG_0050-min.JPG');">
<div class="container">
<div class="row slider-text align-items-center justify-content-center">
<div class="col-md-8 text-center col-sm-12 element-animate pt-5">
<h1 class="pt-5"><span>Contact Us</span></h1>
{{-- <p class="mb-5 w-75 pl-0">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p> --}}
</div>
</div>
</div>
</div>
</div>

</div>
<section class="section border-bottom">
<div class="container">
<div class="row">

        @if ($errors->any())
        <div class="col-12 mb-5 order-2">
            <div class="alert alert-danger">
                <strong>Whoops!</strong> There were some problems with your input.<br><br>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endif
    @if ($message = Session::get('success'))
        <div class="col-12 mb-5 order-2">
            <div class="alert alert-success">
                <p>{{ $message }}</p>
            </div>
        </div>
    @endif


<div class="col-md-6 mb-5 order-2">
<form action="{{route('inquiries.store')}}" method="POST">
    @csrf
<div class="row">
<div class="col-md-6 form-group">
<label for="name">Name</label>
<input type="text" id="name" name="name" class="form-control">
</div>
<div class="col-md-6 form-group">
<label for="phone">Phone</label>
<input type="text" id="phone" name="phone" class="form-control ">
</div>
</div>
<div class="row">
<div class="col-md-12 form-group">
</div>
</div>
<div class="row">
<div class="col-md-12 form-group">
<label for="email">Email</label>
<input type="email" id="email"  name="email" class="form-control ">
</div>
</div>
<div class="row">
<div class="col-md-12 form-group">
<label for="message">Write Message</label>
<textarea name="message" id="message" class="form-control " cols="30" rows="8"></textarea>
</div>
</div>
<div class="row">
<div class="col-md-6 form-group">
<input type="submit" value="Send Message" class="btn btn-success px-3 py-3">
</div>
</div>
</form>
</div>
<div class="col-md-6 order-2 mb-5">
<div class="row justify-content-right">
<div class="col-md-8 mx-auto contact-form-contact-info">
<p class="d-flex">
<span class="ion-ios-location icon mr-5"></span>
<span>Plot 68/69 Nakaseta, Kakooge,
    Nakasongola, District,
    Uganda.uganda</span>
</p>
<p class="d-flex">
<span class="ion-ios-telephone icon mr-5"></span>
<span>+43 676 724 1554 / +256 752 383240/ +256 772 570261</span>
</p>
<p class="d-flex">
<span class="ion-android-mail icon mr-5"></span>
<span><a class="__cf_email__" data-cfemail="b2dbdcd4ddf2cbddc7c0d6dddfd3dbdc9cd1dddf">info@kiketropicalfruits.com</a></span>
</p>
</div>
</div>
</div>
</div>
</div>
</section>

{{--
<section class="section block-11">
<div class="container">
<div class="row justify-content-center mb-5">
<div class="col-md-8 text-center">
<h2 class=" heading mb-4">Happy Clients</h2>
</div>
</div>
<div class="nonloop-block-11 owl-carousel">
<div class="item">
<div class="block-33 h-100">
<div class="vcard d-flex mb-3">
<div class="image align-self-center"><img src="asset_files/images/person_3.jpg" alt="Person here"></div>
<div class="name-text align-self-center">
<h2 class="heading">John Smith</h2>
<span class="meta">Companies Client</span>
</div>
</div>
<div class="text">
<blockquote>
<p>&rdquo; The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn’t listen. She packed her seven versalia, put her initial into the belt and made herself on the way. &ldquo;</p>
</blockquote>
</div>
</div>
</div>
<div class="item">
<div class="block-33 h-100">
<div class="vcard d-flex mb-3">
<div class="image align-self-center"><img src="asset_files/images/person_2.jpg" alt="Person here"></div>
<div class="name-text align-self-center">
<h2 class="heading">Joshua Darren</h2>
<span class="meta">Companies Client</span>
</div>
</div>
<div class="text">
<blockquote>
<p>&rdquo; Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar. &ldquo;</p>
</blockquote>
</div>
</div>
</div>
<div class="item">
<div class="block-33 h-100">
<div class="vcard d-flex mb-3">
<div class="image align-self-center"><img src="asset_files/images/person_3.jpg" alt="Person here"></div>
<div class="name-text align-self-center">
<h2 class="heading">John Smith</h2>
<span class="meta">Companies Client</span>
</div>
</div>
<div class="text">
<blockquote>
<p>&rdquo; A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. &ldquo;</p>
</blockquote>
</div>
</div>
</div>
<div class="item">
<div class="block-33 h-100">
<div class="vcard d-flex mb-3">
<div class="image align-self-center"><img src="asset_files/images/person_3.jpg" alt="Person here"></div>
<div class="name-text align-self-center">
<h2 class="heading">John Smith</h2>
<span class="meta">Companies Client</span>
</div>
</div>
<div class="text">
<blockquote>
<p>&rdquo; Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. &ldquo;</p>
</blockquote>
</div>
</div>
</div>
</div>
</div>
</div>

</section> --}}


@endsection
