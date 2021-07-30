@layout('views/layouts/master_v2')


@section('content')
    <!--timetable end-->
<!--about us start-->
<!--header end-->
<!--hero section start-->

<section class="fullscreen-banner dark-bg banner-2 text-center grediant-overlay p-0 o-hidden" data-bg-img="<?=base_url($frontendThemePath.'assets/img/bg/school-building-educational.png')?>"  data-overlay="7">
    <div class="align-center">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-md-12 ml-auto mr-auto">
                    <div class="video-btn">
                        <a class="popup-youtube" href="https://www.youtube.com/watch?v=P_wKDMcr1Tg"><span class="btn-play"><i class="flaticon-play-button"></i></span></a>
                    </div>
                    <h1 class="text-white mt-8 animated8 font-w-7">Yayasan Yasbu </h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!--hero section end-->
<!--body content start-->
<!--timetable start-->

<section class="pt-sm-0 pb-0 custom-mt-10 xs-mt-0">
    <div class="container">
        <div class="row box-shadow">
            <div class="col-lg-4 col-md-12 px-5 py-5 lg-px-3 lg-py-3 white-bg">
                <h4 class="text-theme text-capitalize">Informasi Yayasan</h4>
                <p class="lead">Informasi Mengenai yayasan <u class="text-black font-w-6">Yasbu</u> </p> <a class="btn-simple btn-lg" href="about-us.html"><span>Read More <i class="ml-2 fas fa-long-arrow-alt-right"></i></span></a>
            </div>
            <div class="col-lg-4 col-md-12 px-5 py-5 lg-px-3 lg-py-3 dark-bg text-white">
                <h4 class="text-white text-capitalize">Jam Operasional</h4>
                <ul class="list-unstyled working-hours">
                    <li><span>Monday - Friday</span> 8:00 to 17:00</li>
                    <li><span>Saturday</span> 9:00 to 18:00</li>
                    <li><span>Sunday</span> 9:00 to 13:00</li>
                </ul>
            </div>
            <div class="col-lg-4 col-md-12 px-5 py-5 lg-px-3 lg-py-3 theme-bg text-white">
                <h4 class="text-white text-capitalize">Kegiatan Sekolah</h4>
                <p class="lead">Informasi Kegiatan Sekolah</p>
                <h5 class="mb-0"><a class="btn-simple btn-lg" href="javascript:void(0)"><span>
                    <i class="mr-2 flaticon-phone-call"></i> 0262 - 43211</span></a></h5>
            </div>
        </div>
    </div>
</section>

<section>
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-5 col-md-12">
                <img class="img-fluid rounded box-shadow w-100" src="<?php ?>" alt="">
            </div>
            <div class="col-lg-7 col-md-12 md-mt-5">
                <div class="section-title mb-2">
                    <h6>Mengenai Yasbu</h6>
                    <h2 class="title">Tentang Yayasan  <span>Yasbu</span></h2>
                    <p class="mb-0">Informasi Singkat Yayasan Yasbu.</p>
                </div>
                <div class="row mt-4">
                    <div class="col-md-6">
                        <div class="featured-item text-left">
                            <div class="featured-icon">
                                <i class="flaticon-stethoscope"></i>
                            </div>
                            <div class="featured-title text-uppercase">
                                <h5>Visi</h5>
                            </div>
                            <div class="featured-desc">
                                <p>Isi Visi dan Misi</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 sm-mt-3">
                        <div class="featured-item text-left">
                            <div class="featured-icon">
                                <i class="flaticon-doctor-1"></i>
                            </div>
                            <div class="featured-title text-uppercase">
                                <h5>Misi</h5>
                            </div>
                            <div class="featured-desc">
                                <p>Isi Misi</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!--about us end-->
<!--body content end-->
@endsection
