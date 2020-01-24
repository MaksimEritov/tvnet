@extends('layout.app')

@section('content')
    <div class="wrapper">
        <!-- Banner -->
        <section>
            <div class="main-slider swiper-container">
                <div class="swiper-wrapper">
                    <!-- Single slide -->
                    <div class="swiper-slide position-relative ">
                        <img src="img/slides/slide_1.png" data-rjs="2" alt="">
                        <div class="slide-content container slide-without-effect">
                            <div class="row align-items-center">
                                <div class="col-xl-6 col-lg-8">
                                    <div class="slide-content-inner">
                                        <!-- <h4 data-animate="fadeInUp" data-delay=".05">Ակցիան գործում է մինչև մարտի 1-ը։</h4> -->
                                        <!-- <h2 data-animate="fadeInUp" data-delay=".3">💥Թեժ առաջարկ TV Net-ից💥 1-2 ամիս ԱՆՎՃԱՐ բաժանորդագրություն 🤗 </h2> -->
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
                                <div class="col-xl-6 col-lg-8">
                                    <div class="slide-content-inner">
                                        <h4 data-animate="fadeInUp" data-delay=".05">Ինտերնետը անհրաժեշտ է յուրաքանչյուրмտան մեջ</h4>
                                        <h2 data-animate="fadeInUp" data-delay=".3">Ստացեք անվճար ինտերնետ արդեն այսօր:</h2>
                                        <a data-animate="fadeInUp" data-delay=".6" href="/internet" class="btn">Դիտեք մանրամասները</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End of Single slide -->
                    
                    <!-- Single slide -->
                    <div class="swiper-slide position-relative">
                        <img src="img/slides/slide_5.jpg" data-rjs="2" alt="">
                        <div class="slide-content container">
                            <div class="row align-items-center">
                                <div class=" col-xl-6 col-lg-8">
                                    <div class="slide-content-inner">
                                        <h4 data-animate="fadeInUp" data-delay=".05">Դարձիր մեր հաճախորդը</h4>
                                        <h2 data-animate="fadeInUp" data-delay=".3">3 TV միացնելու հնարավորությունը կապահովի ձեր ընտանիքը նոր տպավորություններով</h2>
                                        <a data-animate="fadeInUp" data-delay=".6" href="/tv" class="btn">Դիտեք մանրամասները</a>
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
        <section class="pt-120 pb-55" id='about-section'>
            <div class="container">
                <div class="row align-items-center pb-80">
                    <div class="col-lg-6 d-none d-lg-block">
                        <div class="text-center" data-animate="fadeInUp" data-delay=".1">
                            <img src="img/number-one.png" alt="" data-rjs="2">
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="number-one-content" data-animate="fadeInUp" data-delay=".5">
                            <h2 class="mb-3">TV Net - Մեզ վստահում են ...</h2>
                            <p>TVNET Ընկերությունն հանդիսանում է ինտերնետ հեռուստակապի հեռարձակող: Ծառայություններն առայժմ հասանելի են ԱՋԱՓՆՅԱԿ և ԴԱՎԹԱՇԵՆ վարչական շրջաններում։</p>
                            <a href="/about" class="btn">Դիտեք մանրամասները</a>
                        </div>
                    </div>
                </div>
                <div class="row justify-content-center mt-2">
                    <div class="col-md-4 col-sm-6">
                        <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".1">
                            <div class="single-feature-img">
                                <img src="img/icons/setup.svg" alt="" class="svg">
                            </div>
                            <div class="single-feature-content">
                                <h4>Անվճար Միացում</h4>
                                <p>Անվճար Միացում ԱՋԱՓՆՅԱԿ և ԴԱՎԹԱՇԵՆ վարչական շրջաններում</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".4">
                            <div class="single-feature-img">
                                <img src="img/icons/download.svg" alt="" class="svg">
                            </div>
                            <div class="single-feature-content">
                                <h4>Ինտերնետ մինչեւ 100 Mpbs</h4>
                                <p>Գերարագ ինտերնետ կապ տան Համար</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="single-feature single-feature-img-top text-center" data-animate="fadeInUp" data-delay=".7">
                            <div class="single-feature-img">
                                <img src="img/icons/support.svg" alt="" class="svg">
                            </div>
                            <div class="single-feature-content">
                                <h4>24/7 Տեխնիկական Սպասարկում</h4>
                                <p>Մեր մասնագետը  կպատասխանի Ձեր բոլոր հարցերին</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of About Us -->

        <!-- Services -->
        <section id='services-section' class="services-section theme-bg-overlay bg-img-md-none pt-120 pb-90" data-rjs="2"> <!-- data-bg-img="img/services.jpg" data-rjs="2" -->
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                            <h2>Ծառայություններ, որոնք մենք մատուցում ենք</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6">
                        <a href='/internet'>
                            <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".1">
                                <img src="img/icons/earth.svg" alt="" class="svg">
                                <h4>Գերարագ ինտերնետ</h4>
                                <br />
                                <br />
                                <br />
                                <p>Ինտերնետ մինչեւ 100 Mpbs</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <a href='/tv'>
                            <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay=".7">
                                <img src="img/icons/tv.svg" alt="" class="svg">
                                <h4>Կաբելային TV</h4>
                                <br />
                                <p>Մեկ մալուխով 3 հեռուստացույցի միացում միաժամանակ տարբեր ալիքների դիտելու հնարավորությամբ՝ ամսական նույն վարձավճարով</p>
                            </div>
                        </a>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-service single-service-white text-center" data-animate="fadeInUp" data-delay="1">
                            <img src="img/icons/server.svg" alt="" class="svg">
                            <h4>IP TV</h4>
                            <br />
                            <br />
                            <br />
                            <p>Շուտով...</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of Services -->

        <!-- Packages Wrap -->
        <section id='packages-section' class="pt-120 pb-55">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                            <h2>Ընտրեք ձեր փաթեթը</h2>
                            <p></p>
                        </div>
                    </div>
                </div>
                
                <!-- Packages -->
                <div class="row pb-90">
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-package text-center" data-animate="fadeInUp" data-delay=".1">
                            <h4>Personal Pack</h4>
                            <span>Փաթեթը ներառում է</span>
                            <hr>
                            <ul class="list-unstyled">
                                <li>Անվճար Միացում</li>
                                <li>Ինտերնետ մինչեւ <span>30 Mpbs</span></li>
                                <li>Մինչև <span>100</span> TV channels</li>
                                <li>Անսահմանափակ տվյալների օգտագործում</li>
                                <li><span>01 տարի</span> ֆիքսված գներ</li>
                                <li>Անվճար Տեխնիկական Սպասարկում</li>
                            </ul>
                            <p> 7000 <sup>֌</sup> <span>/ամսական</span></p>
                            <a href="tel:+1234567890" class="btn">Զանգահարեք մեզ</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-package text-center" data-animate="fadeInUp" data-delay=".4">
                            <span class="pupular-pack">Most popular package</span>
                            <h4>Starter Pack</h4>
                            <span>Փաթեթը ներառում է</span>
                            <hr>
                            <ul class="list-unstyled">
                                <li>Անվճար Միացում</li>
                                <li>Ինտերնետ մինչեւ <span>40 Mpbs</span></li>
                                <li>Մինչև <span>100</span> TV ալիք</li>
                                <li>Անսահմանափակ տվյալների օգտագործում</li>
                                <li><span>01 տարի</span> ֆիքսված գներ</li>
                                <li>Անվճար Տեխնիկական Սպասարկում</li>
                            </ul>
                            <p>8000 <sup>֌</sup><span>/ամսական</span></p>
                            <a href="tel:+1234567890" class="btn">Զանգահարեք մեզ</a>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6">
                        <div class="single-package text-center" data-animate="fadeInUp" data-delay=".7">
                            <h4>Pro Pack</h4>
                            <span>Փաթեթը ներառում է</span>
                            <hr>
                            <ul class="list-unstyled">
                                <li>Անվճար Միացում</li>
                                <li>Ինտերնետ մինչեւ <span>55 Mpbs</span></li>
                                <li>Մինչև <span>100</span> TV ալիք</li>
                                <li>Անսահմանափակ տվյալների օգտագործում</li>
                                <li><span>01 տարի</span> ֆիքսված գներ</li>
                                <li>Անվճար Տեխնիկական Սպասարկում</li>
                            </ul>
                            <p>9000 <sup>֌</sup><span>/ամսական</span></p>
                            <a href="tel:+1234567890" class="btn">Զանգահարեք մեզ</a>
                        </div>
                    </div>
                </div>
                <!-- End of Packages -->

                <!-- Packages Includes -->
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                            <h2>բոլոր փաթեթները ներառում են</h2>
                            <h4>Wifi սարք 1 տարով բաժանորդագրվելու դեպքում</h4>
                            <h4>3 TV միացնելու հնարավորություն</h4>
                        </div>
                    </div>
                </div>

                <!-- End of Packages Includes -->
            </div>
        </section>
        <!-- End of Packages Wrap -->

        <!-- Reviews -->
        <section id='reviews-section' class="reviews-section theme-bg-overlay bg-img-xs-none pt-120 pb-120" data-rjs="2">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title section-title-white text-center" data-animate="fadeInUp" data-delay=".1">
                            <h2>Հաճախորդները մեր մասին</h2>
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
        <section id='news-section' class="light-bg pt-120 pb-120">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-xl-6 col-lg-8 col-md-10">
                        <div class="section-title text-center" data-animate="fadeInUp" data-delay=".1">
                            <h2>Նորություններ</h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <div class="latest-news-wraper position-relative">
                            <div class="swiper-container news-slider">
                                <div class="swiper-wrapper">
                                    <div class="single-news swiper-slide">
                                        <a class="tip" href="#">Նորույթ</a>
                                        <img src="img/news/news1.png" data-rjs="2" alt="">
                                        <ul class="list-unstyled d-flex align-items-center">
                                            <li><img src="img/authors/logo.png" alt=""></li>
                                            <li><a href="#">TV Net</a></li>
                                            <li>January 20, 2020</li>
                                        </ul>
                                        <h3 class="h5"><a>Միանալով 🖥 #TVNet-ին՝ կարող եք դիտել ինչպես համաշխարհային կինոյի դասականները🎭, այնպես էլ աշխարհի ամենաբարձր վարկանիշային ֆիլմերը և հեռուստահաղորդումները:</a></h3>
                                    </div>
                                    <div class="single-news swiper-slide">
                                        <a class="tip" href="#">Ակցիա</a>
                                        <img src="img/news/news2.png" data-rjs="2" alt="">
                                        <ul class="list-unstyled d-flex align-items-center">
                                            <li><img src="img/authors/logo.png" alt=""></li>
                                            <li><a href="#">TV Net</a></li>
                                            <li>January 19, 2020</li>
                                        </ul>
                                        <h3 class="h5">Թեժ առաջարկ TV Net-ից💥 1-2 ամիս ԱՆՎՃԱՐ բաժանորդագրություն։ Ակցիան գործում է մինչև մարտի 1-ը։</h3>
                                    </div>
                                    <div class="single-news swiper-slide">
                                        <a class="tip" href="#">Նորույթ</a>
                                        <img src="img/news/news3.png" data-rjs="2" alt="">
                                        <ul class="list-unstyled d-flex align-items-center">
                                            <li><img src="img/authors/logo.png" alt=""></li>
                                            <li><a href="#">TV Net</a></li>
                                            <li>January 18, 2020</li>
                                        </ul>
                                        <h3 class="h5">Միացե՛ք #TVNET-ին և վայելե՛ք բարձրորակ տեսահոլովակներ, ինտերակտիվ մրցույթներ և հետաքրքիր երաժշտական ծրագրեր:🎤</h3>
                                    </div>
                                    <div class="single-news swiper-slide">
                                        <a class="tip" href="#">Նորույթ</a>
                                        <img src="img/news/news4.png" data-rjs="2" alt="">
                                        <ul class="list-unstyled d-flex align-items-center">
                                            <li><img src="img/authors/logo.png" alt=""></li>
                                            <li><a href="#">TV Net</a></li>
                                            <li>January 17, 2020</li>
                                        </ul>
                                        <h3 class="h5">#TVNet-ով հեռարձակվող սպորտային ալիքները թույլ են տալիս մարզասեր երկրպագուներին👨‍👩‍👧‍👦 դիտել վճռական հանդիպումների🏆 և մրցաշարերի🥇հեռուստատեսային ուղիղ հեռարձակումները։📺</h3>
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
