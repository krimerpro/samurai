@extends('layouts.default')
@section('content')

<video autoplay muted loop id="myVideo">
  <source src="{{ asset('images/samurai.mp4') }}" type="video/mp4">
</video>

<!-- //////////////////////////////////// CONTAINER ////////////////////////////////////-->
<div class="content-wrapper">
  <div class="content-body">
    <main><!-- Header: 3D Animation -->
<section class="head-area" id="head-area">
<div></div>
<div class="head-content d-flex align-items-center">
    <div class="container">
      <div class="banner-wrapper">

            <div class="row align-items-right">
                <div class="col-lg-12 col-md-12">
                    <div class="banner-content">
                      <div id="svg-animation">
                         <img src="{{ asset('images/logo.png') }}" style="width:40%;height:40%;display: block;margin-left: auto;margin-right: auto">
                      </div>

                          <h1 class="best-template animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.5s" style="color:white;margin-top:20px;font-weight:bold">JAPANESE WARRIOR</h1>
                        <h5 class="d-block white animated text-center" data-animation="fadeInUpShorter" data-animation-delay="1.6s" style="color:white;font-weight:bold">SAMURAI</h5>
                        <div class="mt-5 text-center">
                          <a href="" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:red;color:white">MEDIUM</a>
                          <a href="https://www.dextools.io/app/en/ether/pair-explorer/" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:red;color:white">CHART</a><br/>
                          <a href="https://t.me/" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:red;color:white">TELEGRAM</a>
                          <a href="https://twitter.com/SamuraiEthereum" class="btn btn-lg btn-gradient-purple btn-glow mb-2 animated" target="_blank" data-animation="fadeInUpShorter" data-animation-delay="1.8s" style="margin-left: 25px;background:red;color:white">TWITTER</a><br/>

                          <div class="copyright" style="color:white;margin-top:50px">Copyright &copy; 2022, SAMURAI - TEAM</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</section>
<!--/ Header: 3D Animation -->

    </main>
  </div>
</div>
<!-- //////////////////////////////////// FOOTER ////////////////////////////////////-->

@stop
