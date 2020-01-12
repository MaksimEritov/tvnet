@extends('layout.app')

@section('content')
    <div class="wrapper">
        <!-- Banner -->
        <section>
            <div class="main-slider swiper-container">
                <div class="swiper-wrapper">
                    <!-- Single slide -->
                    <div class="swiper-slide position-relative">
                        <img src="img/slides/slide_5.jpg" data-rjs="2" alt="">
                        <div class="slide-content container">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-8">
                                    <div class="slide-content-inner">
                                        <h4 data-animate="fadeInUp" data-delay=".05">Best Internet Service Provider In Armenia</h4>
                                        <h2 data-animate="fadeInUp" data-delay=".3">Don’t Suffer The Buffer Speeds Up to 1 Gbps with Unlimited Data</h2>
                                        <a data-animate="fadeInUp" data-delay=".6" href="#" class="btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Single slide -->
                    
                    <!-- Single slide -->
                    <div class="swiper-slide position-relative">
                        <img src="img/slides/slide_4.jpg" data-rjs="2" alt="">
                        <div class="slide-content container">
                            <div class="row align-items-center">
                                <div class=" col-xl-6 col-lg-8">
                                    <div class="slide-content-inner">
                                        <h4 data-animate="fadeInUp" data-delay=".05">There is Now Way to Become a Internet User</h4>
                                        <h2 data-animate="fadeInUp" data-delay=".3">Now a Days Internet Is a Useful Thing, Not Passion</h2>
                                        <a data-animate="fadeInUp" data-delay=".6" href="#" class="btn">Learn More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Single slide -->
                </div>
                <!-- Banner Pagination -->
                <div class="swiper-pagination main-slider-pagination"></div>
            </div>
        </section>
        <!-- End of Banner -->

        <!-- Abut Us -->
        <section class="pt-120 pb-55">
            <div class="container">
                <div class="row align-items-center pb-80">
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="text-center" data-animate="fadeInUp" data-delay=".1">
                            <img src="img/number-one.png" alt="" data-rjs="2">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="number-one-content" data-animate="fadeInUp" data-delay=".5">
                            <h2 class="mb-3">We are no. 1 internet service provider company in United States.</h2>
                            <p>On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain.</p>
                            <a href="#" class="btn">View Details</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".1">
                            <div class="single-feature-img">
                                <img src="img/icons/setup.svg" alt="" class="svg">
                            </div>
                            <div class="single-feature-content">
                                <h4>Free Installations & Setup</h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".4">
                            <div class="single-feature-img">
                                <img src="img/icons/download.svg" alt="" class="svg">
                            </div>
                            <div class="single-feature-content">
                                <h4>Up to 1 Gpbs Download Speed</h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".7">
                            <div class="single-feature-img">
                                <img src="img/icons/support.svg" alt="" class="svg">
                            </div>
                            <div class="single-feature-content">
                                <h4>24/7 Customer Support</h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of About Us -->

        <!-- Services -->
        <section class="services-section theme-bg-overlay bg-img-md-none pt-120 pb-90" data-rjs="2"> <!-- data-bg-img="img/services.jpg" data-rjs="2" -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                            <h2>Services We Provide</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".1">
                            <img src="img/icons/earth.svg" alt="" class="svg">
                            <h4>High Speed Internet</h4>
                            <p>Lorem ipsum dolor sit ametteturmpor incididunt most popular.</p>
                            <a href="internet.html">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".4">
                            <img src="img/icons/phone.svg" alt="" class="svg">
                            <h4>Phone Service</h4>
                            <p>Lorem ipsum dolor sit ametteturmpor incididunt most popular.</p>
                            <a href="mobile.html">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".7">
                            <img src="img/icons/tv.svg" alt="" class="svg">
                            <h4>Cable TV</h4>
                            <p>Lorem ipsum dolor sit ametteturmpor incididunt most popular.</p>
                            <a href="cable-tv.html">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay="1">
                            <img src="img/icons/server.svg" alt="" class="svg">
                            <h4>Dedicated Server</h4>
                            <p>Lorem ipsum dolor sit ametteturmpor incididunt most popular.</p>
                            <a href="dedicated-server.html">Learn More <i class="fa fa-angle-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Services -->

        <!-- Packages Wrap -->
        <section class="pt-120 pb-55">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                            <h2>Choose Affordable Packages</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
                        </div>
                    </div>
                </div>
                
                <!-- Packages -->
                <div class="row pb-90">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-package text-center" data-animate="fadeInUp" data-delay=".1">
                            <h4>Personal Pack</h4>
                            <span>for personal user</span>
                            <hr>
                            <ul class="list-unstyled">
                                <li>Free installation</li>
                                <li>Up to <span>30 Mpbs</span> download speed</li>
                                <li>Up to <span>100</span> TV channels</li>
                                <li>Unlimited data usages</li>
                                <li><span>01 year</span> pricing lock guarantee</li>
                                <li>Unlimited bandwidth</li>
                            </ul>
                            <p><sup>֌</sup> 7000 <span>/Monthly</span></p>
                            <a href="#" class="btn">Order This Plan</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-package text-center" data-animate="fadeInUp" data-delay=".4">
                            <span class="pupular-pack">Most popular package</span>
                            <h4>Family Pack</h4>
                            <span>for family user</span>
                            <hr>
                            <ul class="list-unstyled">
                                <li>Free installation</li>
                                <li>Up to <span>40 Mpbs</span> download speed</li>
                                <li>Up to <span>100</span> TV channels</li>
                                <li>Unlimited data usages</li>
                                <li><span>01 year</span> pricing lock guarantee</li>
                                <li>Unlimited bandwidth</li>
                            </ul>
                            <p><sup>֌</sup> 8000 <span>/Monthly</span></p>
                            <a href="#" class="btn">Order This Plan</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-package text-center" data-animate="fadeInUp" data-delay=".7">
                            <h4>Business Pack</h4>
                            <span>for business user</span>
                            <hr>
                            <ul class="list-unstyled">
                                <li>Free installation</li>
                                <li>Up to <span>55 Mpbs</span> download speed</li>
                                <li>Up to <span>100</span> TV channels</li>
                                <li>Unlimited data usages</li>
                                <li><span>01 year</span> pricing lock guarantee</li>
                                <li>Unlimited bandwidth</li>
                            </ul>
                            <p><sup>֌</sup> 9000 <span>/Monthly</span></p>
                            <a href="#" class="btn">Order This Plan</a>
                        </div>
                    </div>
                </div>
                <!-- End of Packages -->

                <!-- Packages Includes -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                            <h2>All Plans Included</h2>
                            <p>With 1 year subscription we give 1 mounth and WI-Fi router for free</p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".05">
                            <div class="single-feature-img">
                                <img src="img/icons/ftp.svg" alt="" class="svg">
                            </div>
                            <div class="single-feature-content">
                                <h4>Own FTP Server</h4>
                                <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".2">
                            <div class="single-feature-img">
                                <img src="img/icons/upgrade.svg" alt="" class="svg">
                            </div>
                            <div class="single-feature-content">
                                <h4>Upgrade or Downgrade</h4>
                                <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".35">
                            <div class="single-feature-img">
                                <img src="img/icons/data.svg" alt="" class="svg">
                            </div>
                            <div class="single-feature-content">
                                <h4>No Hard Data Limit</h4>
                                <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".5">
                            <div class="single-feature-img">
                                <img src="img/icons/lock.svg" alt="" class="svg">
                            </div>
                            <div class="single-feature-content">
                                <h4>Lock in Low Rates</h4>
                                <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".65">
                            <div class="single-feature-img">
                                <img src="img/icons/cloud.svg" alt="" class="svg">
                            </div>
                            <div class="single-feature-content">
                                <h4>No Video Streaming</h4>
                                <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-feature single-feature-img-left text-left" data-animate="fadeInUp" data-delay=".8">
                            <div class="single-feature-img">
                                <img src="img/icons/access.svg" alt="" class="svg">
                            </div>
                            <div class="single-feature-content">
                                <h4>Access to All Website</h4>
                                <p>At vero eos et accusamus et iusto dignissimosus qui blanditiis praesentium uptatum</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Packages Includes -->
            </div>
        </section>
        <!-- End of Packages Wrap -->

        <!-- Reviews -->
        <section class="reviews-section theme-bg-overlay bg-img-xs-none pt-120 pb-120" data-rjs="2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                            <h2>What Our Client’s Say</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <!-- Review Slider -->
                        <div class="review-slider-wraper position-relative">
                            <div class="swiper-container review-slider">
                                <div class="swiper-wrapper">
                                    <!-- Single Review -->
                                    <div class="swiper-slide">
                                        <div class="review-text">
                                            <p>SUPER TV & INTERNET PROVIDER</p>
                                        </div>
                                        <div class="review-author d-flex align-items-center">
                                            <div class="review-author-img">
                                                <img src="img/authors/female.png" alt="">
                                            </div>
                                            <div class="review-author-info">
                                                <ul class="list-inline">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span><strong>Micael Gevorgyan</strong>  Yerevan, Armenia</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Single Review -->

                                    <!-- Single Review -->
                                    <div class="swiper-slide">
                                        <div class="review-text">
                                            <p>Das beste Kabel-TV-Unternehmen</p>
                                        </div>
                                        <div class="review-author d-flex align-items-center">
                                            <div class="review-author-img">
                                                <img src="img/authors/male.png" alt="">
                                            </div>
                                            <div class="review-author-info">
                                                <ul class="list-inline">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span><strong>Norayr Adamyan</strong> Yerevan, Armenia</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Single Review -->

                                    <!-- Single Review -->
                                    <div class="swiper-slide">
                                        <div class="review-text">
                                            <p>This is a very good and client-oriented company. There is also a great support in terms of training and postservice.</p>
                                        </div>
                                        <div class="review-author d-flex align-items-center">
                                            <div class="review-author-img">
                                                <img src="img/authors/male.png" alt="">
                                            </div>
                                            <div class="review-author-info">
                                                <ul class="list-inline">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span><strong>Khachatur Makaryan</strong>  Yerevan, Armenia</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Single Review -->

                                    <!-- Single Review -->
                                    <div class="swiper-slide">
                                        <div class="review-text">
                                            <p>Super cable TV & internet-provider</p>
                                        </div>
                                        <div class="review-author d-flex align-items-center">
                                            <div class="review-author-img">
                                                <img src="img/authors/female.png" alt="">
                                            </div>
                                            <div class="review-author-info">
                                                <ul class="list-inline">
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                    <li><i class="fa fa-star"></i></li>
                                                </ul>
                                                <span><strong>Shahen Hasik</strong> Yerevan, Armenia</span>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End of Single Review -->
                                </div>
                            </div>
                            
                            <!-- Arrows -->
                            <div class="swiper-button-next next-review">
                                <img src="img/icons/right-arrow.svg" alt="" class="svg">
                            </div>
                            <div class="swiper-button-prev prev-review">
                                <img src="img/icons/left-arrow.svg" alt="" class="svg">
                            </div>
                        </div>
                        <!-- End of Review Slider -->
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Reviews -->

        <!-- Latest news -->
        <section class="light-bg pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                            <h2>Latest News</h2>
                            <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form by injected humour</p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="latest-news-wraper position-relative">
                            <div class="swiper-container news-slider">
                                <div class="swiper-wrapper">
                                    <div class="single-news swiper-slide">
                                        <a class="tip" href="#">News</a>
                                        <img src="img/posts/post1.jpg" data-rjs="2" alt="">
                                        <ul class="list-unstyled d-flex align-items-center">
                                            <li><img src="img/authors/author1.jpg" alt=""></li>
                                            <li>by <a href="#">Zane M. Frye</a></li>
                                            <li><a href="#">January 19, 2018</a></li>
                                        </ul>
                                        <h3 class="h5"><a href="blog-details.html">Everything you need to know to cut the cord and ditch cable to order now</a></h3>
                                        <a href="blog-details.html">Continue Reading <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="single-news swiper-slide">
                                        <a class="tip" href="#">News</a>
                                        <img src="img/posts/post2.jpg" data-rjs="2" alt="">
                                        <ul class="list-unstyled d-flex align-items-center">
                                            <li><img src="img/authors/male.png" alt=""></li>
                                            <li>by <a href="#">Zane M. Frye</a></li>
                                            <li><a href="#">January 19, 2018</a></li>
                                        </ul>
                                        <h3 class="h5"><a href="blog-details.html">Why the FCC's latest net neutrality defense is hollow on the flow</a></h3>
                                        <a href="blog-details.html">Continue Reading <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="single-news swiper-slide">
                                        <a class="tip" href="#">News</a>
                                        <img src="img/posts/post3.jpg" data-rjs="2" alt="">
                                        <ul class="list-unstyled d-flex align-items-center">
                                            <li><img src="img/authors/female.png" alt=""></li>
                                            <li>by <a href="#">Zane M. Frye</a></li>
                                            <li><a href="#">January 19, 2018</a></li>
                                        </ul>
                                        <h3 class="h5"><a href="blog-details.html">Powered Enterprise IT: Cloud implementation built for the future</a></h3>
                                        <a href="blog-details.html">Continue Reading <i class="fa fa-angle-right"></i></a>
                                    </div>
                                    <div class="single-news swiper-slide">
                                        <a class="tip" href="#">News</a>
                                        <img src="img/posts/post1.jpg" data-rjs="2" alt="">
                                        <ul class="list-unstyled d-flex align-items-center">
                                            <li><img src="img/authors/author1.jpg" alt=""></li>
                                            <li>by <a href="#">Zane M. Frye</a></li>
                                            <li><a href="#">January 19, 2018</a></li>
                                        </ul>
                                        <h3 class="h5"><a href="blog-details.html">Three privacy tools that block your Internet provider from tracking your computer</a></h3>
                                        <a href="blog-details.html">Continue Reading <i class="fa fa-angle-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next next-news">
                                <img src="img/icons/right-arrow.svg" alt="" class="svg">
                            </div>
                            <div class="swiper-button-prev prev-news">
                                <img src="img/icons/left-arrow.svg" alt="" class="svg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Latest news -->


    </div>
@endsection
