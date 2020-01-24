@extends('layout.app')

@section('content')
    <div class="wrapper">

    <section class="pt-120 pb-120 light-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6">
                    <div class="service-details" data-animate="fadeInUp" data-delay=".1">
                        <h2>Television Channels</h2>
                        <p>TV` 103 հեռուստաալիք` մինչև 3 հեռուստացույցի միացման հնարավորությամբ</p>
                    
                        <ul class="rubik list-unstyled m-0 clearfix">
                            <li>Մոնտաժումը կիրականացնենք մինչև 2 օրում ⏰</li>
                            <li>1 տարով բաժանորդագրության դեպքում Կամ առաջին 2 ամիսը ⚡️ԱՆՎՃԱՐ⚡️</li>
                            <li>Կամ 1 ամիս անվճար + Т2 ընդունիչի անվճար տրամադրում օգտագործման իրավունքով:</li>
                            <li>Ամսական բաժանորդագրության վարձը՝ 💥3000դրամ💥💣</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="service-img text-center" data-animate="fadeInUp" data-delay=".4">
                        <img src="img/cable-tv.jpg" alt="" data-rjs="2">
                    </div>
                </div>
            </div>
            <div class='row'>
                <div class='col-12'>
                    <button class="btn channels-btn" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                        Մեր ալիքները <i class="fa fa-caret-down"></i>
                    </button>
                    </p>
                    <div class="collapse" id="collapseExample">
                        <div class='channel-img-holder'>
                            <img src='img/channels/progs.png'>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>

    </div>
@endsection
