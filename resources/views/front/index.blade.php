@extends('layouts.app')

@section('content')
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <a class="navbar-brand" href="#">Navigation Bar</a>
      <a href="{{ url('about') }}" style="position: absolute; right: 10px; top: 10px;">About</a>
      <a target="_blank" href="{{ url('calculator') }}" style="position: absolute; right: 100px; top: 10px;">My Project</a>
    </div>
  </div>
</nav>

<section class="carousel slide cid-rp4ZhrrEpt" data-interval="false" id="slider1-a">

    <div class="full-screen">
        <div class="mbr-slider slide carousel" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="4000">
            <ol class="carousel-indicators">
                @foreach($mySliders as $key => $slider)
                @if($key > 0)
                <li data-app-prevent-settings="" data-target="#slider1-a" data-slide-to="{{ $key }}"></li>
                @else
                <li data-app-prevent-settings="" data-target="#slider1-a" class="active" data-slide-to="{{ $key }}"></li>
                @endif
                @endforeach
            </ol>
        <div class="carousel-inner" role="listbox">
            @foreach($mySliders as $key => $slider)
            @if($key > 0)
            <div class="carousel-item slider-fullscreen-image" data-bg-video-slide="false" style="background-image: url({{ url('slider/'.$slider->photo_background) }});">
                <div class="container container-slide">
                    <div class="image_wrapper">
                        <div class="mbr-overlay" style="opacity: 0.7;"></div>
                        <img src="{{ url('assets/images/e15042c9-f518-4a70-b8f8-0f8ba0d423ca-1836x1377-800x600.jpg') }}">
                        <div class="carousel-caption justify-content-center">
                            <div class="col-10 align-center">
                                <h2 class="mbr-fonts-style display-1"><strong>{{ $slider->title }}</strong></h2>
                                <p class="lead mbr-text mbr-fonts-style display-5">{{ $slider->description }}</p>
                                <div class="mbr-section-btn" buttons="0">
                                    <a class="btn btn-success display-4" href="#social-buttons2-f">FOLLOW ME</a> 
                                    <a class="btn  btn-white-outline display-4" href="#testimonials2-d">ABOUT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            @else
            <div class="carousel-item slider-fullscreen-image active" data-bg-video-slide="false" style="background-image: url({{ url('slider/'.$slider->photo_background) }});">
                <div class="container container-slide">
                    <div class="image_wrapper">
                        <div class="mbr-overlay" style="opacity: 0.7;"></div>
                        <img src="{{ url('assets/images/e15042c9-f518-4a70-b8f8-0f8ba0d423ca-1836x1377-800x600.jpg') }}">
                        <div class="carousel-caption justify-content-center">
                            <div class="col-10 align-center">
                                <h2 class="mbr-fonts-style display-1"><strong>{{ $slider->title }}</strong></h2>
                                <p class="lead mbr-text mbr-fonts-style display-5">{{ $slider->description }}</p>
                                <div class="mbr-section-btn" buttons="0">
                                    <a class="btn btn-success display-4" href="#social-buttons2-f">FOLLOW ME</a> 
                                    <a class="btn  btn-white-outline display-4" href="#testimonials2-d">ABOUT</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>    
            @endif
            @endforeach
        </div>

</section>

<section class="engine"><a href="https://mobirise.info/g">build your own site</a></section><section class="mbr-gallery mbr-slider-carousel cid-rnLKGtk8bU" id="gallery2-2">

    <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    GALLERY
                </h2>

    <div class="container">
        <div>
            <div class="mbr-gallery-row">
                <div class="mbr-gallery-layout-default">
                    
                    <div>
                        <div>
                            @foreach($myGalleries as $gallery)
                            <div class="mbr-gallery-item mbr-gallery-item--p2" data-video-url="false" data-tags="Awesome">
                                <div href="#lb-gallery2-2" data-slide-to="0" data-toggle="modal">
                                    <img src="{{ url('gallery/'.$gallery->name) }}" alt="" title="">
                                    <span class="icon-focus"></span>
                                </div>
                            </div>
                            @endforeach

                        </div>
                    </div>

                    <div class="clearfix">
                        
                    </div>

                        <div data-app-prevent-settings="" class="mbr-slider modal fade carousel slide" tabindex="-1" data-keyboard="true" data-interval="false" id="lb-gallery2-2">
                            <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-body">
                                    
                                        <div class="carousel-inner">
                                        @foreach($myGalleries as $key => $gallery)
                                            @if($key > 0)
                                                <div class="carousel-item">
                                                    <img src="{{ url('gallery/'.$gallery->name) }}" alt="" title="">
                                                </div>
                                            @else
                                                <div class="carousel-item active">
                                                    <img src="{{ url('gallery/'.$gallery->name) }}" alt="" title="">
                                                </div>
                                            @endif
                                        @endforeach
                                        </div>
                                        
                                    <a class="carousel-control carousel-control-prev" role="button" data-slide="prev" href="#lb-gallery2-2">
                                        <span class="mbri-left mbr-iconfont" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control carousel-control-next" role="button" data-slide="next" href="#lb-gallery2-2">
                                        <span class="mbri-right mbr-iconfont" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                    <a class="close" href="#" role="button" data-dismiss="modal">
                                        <span class="sr-only">Close</span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
    </div>
    <!-- <div class="mbr-section-btn text-center"><a href="https://instagram.com/difaandika/?hl=id" class="btn btn-primary display-4">
                          See  More
                        </a></div> -->

</section>

<section class="testimonials2 cid-rp7JU8ucGe" id="testimonials2-d">

    <div class="container">
        <div class="media-container-row">
            <div class="mbr-figure pr-lg-5" style="width: 25%;">
              <img src="{{ url('mybio/'.$myAbout->photo_profile) }}" alt="" title="">
            </div>
            <div class="media-content px-3 align-self-center mbr-white py-2">
                    <p class="mbr-text testimonial-text mbr-fonts-style display-7">{!! $myAbout->description !!}</p>
                    <p class="mbr-author-name pt-4 mb-2 mbr-fonts-style display-7">
                       {{ $myAbout->name }}</p>
                    <p class="mbr-author-desc mbr-fonts-style display-7">{{ $myAbout->study }}<br>{{ $myAbout->university }}</p>
            </div>
        </div>
    </div>
</section>

<section class="features8 cid-rnLKMxLFa5 mbr-parallax-background" id="features8-3">

    <div class="mbr-overlay" style="opacity: 0.5; background-color: rgb(118, 118, 118);">
    </div>

    <div class="container">
        <div class="media-container-row">

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <span class="mbr-iconfont mbri-desktop "></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">
                        Ngoding
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Bukan programer jago, masih amatiran 
                    </p>
                    
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <span class="mbri-touch mbr-iconfont"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">
                        Play Games
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Mabar? kuy kontak ada dibawah
                    </p>
                    
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <span class="mbri-responsive mbr-iconfont"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">
                        Pray
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Utamakan ibadah (: Hormati orang tua 
                    </p>
                    
                </div>
            </div>

            <div class="card  col-12 col-md-6 col-lg-3">
                <div class="card-img">
                    <span class="mbri-bootstrap mbr-iconfont"></span>
                </div>
                <div class="card-box align-center">
                    <h4 class="card-title mbr-fonts-style display-7">
                         Work
                    </h4>
                    <p class="mbr-text mbr-fonts-style display-7">
                       Bekerja keras 
                    </p>
                    
                </div>
            </div>
        </div>
    </div>
</section>

<section class="mbr-section form1 cid-rnLKUM3p0O" id="form1-4">
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="title col-12 col-lg-8">
                <h2 class="mbr-section-title align-center pb-3 mbr-fonts-style display-2">
                    CONTACT FORM
                </h2>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="media-container-column col-lg-8" >
                <!---Formbuilder Form--->
                <form action="{{ url('send-message') }}" method="POST" class="mbr-form form-with-styler">
                    {{ csrf_field() }}
                    <div class="row row-sm-offset">
                        <div hidden="hidden" data-form-alert="" class="alert alert-success col-12">Thanks for filling out the form!</div>
                        <div hidden="hidden" data-form-alert-danger="" class="alert alert-danger col-12">
                        </div>
                    </div>
                    <div class="dragArea row row-sm-offset">
                        <div class="col-md-4  form-group" data-for="name">
                            <label for="name-form1-4" class="form-control-label mbr-fonts-style display-7">Name</label>
                            <input type="text" name="name" data-form-field="Name" required="required" class="form-control display-7" id="name-form1-4">
                        </div>
                        <div class="col-md-4  form-group" data-for="email">
                            <label for="email-form1-4" class="form-control-label mbr-fonts-style display-7">Email</label>
                            <input type="email" name="email" data-form-field="Email" required="required" class="form-control display-7" id="email-form1-4">
                        </div>
                        <div data-for="phone" class="col-md-4  form-group">
                            <label for="phone-form1-4" class="form-control-label mbr-fonts-style display-7">Phone</label>
                            <input type="tel" name="hp" data-form-field="Phone" class="form-control display-7" id="phone-form1-4">
                        </div>
                        <div data-for="message" class="col-md-12 form-group">
                            <label for="message-form1-4" class="form-control-label mbr-fonts-style display-7">Message</label>
                            <textarea name="description" data-form-field="Message" class="form-control display-7" id="message-form1-4"></textarea>
                        </div>
                        <div class="col-md-12 input-group-btn align-center">
                            <button type="submit" class="btn btn-primary display-4">SEND FORM</button>
                        </div>
                    </div>
                </form><!---Formbuilder Form--->
            </div>
        </div>
    </div>
</section>

<section class="cid-rnLLhr9dIq" id="footer2-9">

    

    

    <div class="container">
        <div class="media-container-row content mbr-white">
            <div class="col-12 col-md-6 mbr-fonts-style display-7">
                <p class="mbr-text">
                    <strong>Address</strong>
                    <br>
                    <br>{{ $myAbout->address }}<br>
                    <br><strong>Contacts</strong>
                    <br>
                    <br>Email: {{ $myAbout->email }}<br>Phone: {{ $myAbout->hp }}<br>Line: {{ $myAbout->line }}</p>
            </div>
            <div class="col-12 col-md-6">
                <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCy9r70T3NYf3PhvVflTo0_zdif2_IoIYs&amp;q=place_id:ElBKbC4gUGFsYXNhcmkgMiBOby43LCBQYWxhc2FyaSwgQ2liaXJ1LCBLb3RhIEJhbmR1bmcsIEphd2EgQmFyYXQgNDA2MTUsIEluZG9uZXNpYSIaEhgKFAoSCaGdybMq3WguEeK5m8PMppqYEAc" allowfullscreen=""></iframe></div>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-sm-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row mbr-white">
                <div class="col-sm-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7"></p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="cid-rp7LNnsAbA" id="social-buttons2-f">

    

    

    <div class="container">
        <div class="media-container-row">
            <div class="col-md-8 align-center">
                <h2 class="pb-3 mbr-fonts-style display-2">
                    FOLLOW ME!
                </h2>
                <div class="social-list pl-0 mb-0">
                    <a href="{{ $myAbout->twitter }}" target="_blank">
                        <span class="px-2 mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span>
                    </a>
                    <a href="{{ $myAbout->fb }}" target="_blank">
                        <span class="px-2 mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span>
                    </a>
                    <a href="{{ $myAbout->ig }}">
                        <span class="px-2 mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                    </a>
                    <a href="{{ $myAbout->yt }}" target="_blank">
                        <span class="px-2 mbr-iconfont mbr-iconfont-social socicon-youtube socicon"></span>
                    </a>
                    <a href="{{ $myAbout->wa }}">
                        <span class="px-2 mbr-iconfont mbr-iconfont-social socicon-viber socicon"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section once="footers" class="cid-rp7JDdErtL mbr-reveal" id="footer7-c">

    <div class="container">
        <div class="media-container-row align-center mbr-white">
            <div class="row row-links">
            </div>
            <div class="row row-copirayt">
                <p class="mbr-text mb-0 mbr-fonts-style mbr-white align-center display-7">
                    © Copyright 2019 Difaandika - All Rights Reserved
                </p>
            </div>
        </div>
    </div>
</section>

@endsection