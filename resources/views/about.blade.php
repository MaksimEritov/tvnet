@extends('layout.app')

@section('content')
    <div class="wrapper">

        <!-- Abut Us -->
        <section class="pt-80 pb-55">
            <div class="container">
                <div class="row align-items-center pb-80">
                    <div class="col-12">
                        <div class="contact_map map-wrapper">
                            <div id="map" class='map-wrapper'></div>
                        </div>
                    </div>

                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="number-one-content" data-animate="fadeInUp" data-delay=".5">
                            <h2 class="mb-3">TV Net - Մեզ վստահում են ...</h2>
                            <p class='about-p'>TVNET Ընկերությունն հանդիսանում է ինտերնետ հեռուստակապի հեռարձակող: Ծառայություններն առայժմ հասանելի են ԱՋԱՓՆՅԱԿ և ԴԱՎԹԱՇԵՆ վարչական շրջաններում։</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- End of About Us -->
        <script defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA2cScXrqnzvtrhX9Qnh7MO6m-HOF5oGJQ&callback=initMap"></script>
    </div>
@endsection
