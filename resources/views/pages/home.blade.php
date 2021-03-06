@extends('layouts.app')

@section('title')
    NOMADS
@endsection

@section('content')
    
    <!-- Header -->
    <header class="header text-center">
        <h1>Explore The Beautiful World <br>
            As Easy One Click
        </h1>
        <p class="mt-3">You will see beautiful <br>
            moment you never see before
        </p>
    <a href="{{ route('detail')}}" class="btn btn-get-started px-4 mt-4">Get Started</a>
    </header>
    <!-- Akhir Header -->

    <!-- Statistics -->
    <main>
        <div class="container">
            <section class="section-stats row justify-content-center" id="stats">
                <div class="stats-detail col-3 col-md-2">
                    <h2>20K</h2>
                    <p>Members</p>
                </div>
                <div class="stats-detail col-3 col-md-2">
                    <h2>12</h2>
                    <p>Countries</p>
                </div>
                <div class="stats-detail col-3 col-md-2">
                    <h2>3K</h2>
                    <p>Hotels</p>
                </div>
                <div class="stats-detail col-3 col-md-2">
                    <h2>72</h2>
                    <p>Partners</p>
                </div>
            </section>
        </div>

        <!-- Section-Popular -->
        <section class="section-popular" id="Popular">
            <div class="container">
                <div class="row">
                    <div class="col text-center section-popular-heading">
                        <h2>Wisata Popular</h2>
                        <p>Something that you never try <br>
                            before in this world</p>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section-Popular-Content -->
        <section class="section-popular-content" id="PopularContent">
            <div class="container">
                <div class="row section-popular-travel justify-content-center">
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/p1.png');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">DARATAN, BALI</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/p2.png');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">BROMO, MALANG</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/p3.png');">
                            <div class="travel-country">INDONESIA</div>
                            <div class="travel-location">NUSA PENINDA</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-4 col-lg-3">
                        <div class="card-travel text-center d-flex flex-column"
                            style="background-image: url('frontend/images/p4.png');">
                            <div class="travel-country">MIDDLE EAST</div>
                            <div class="travel-location">DUBAI</div>
                            <div class="travel-button mt-auto">
                                <a href="{{ route('detail')}}" class="btn btn-travel-details px-4">View Details</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>


        <!-- Section-Networks -->
        <section class="section-networks" id="Networks">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h2>Our Networks</h2>
                        <p>Companies are trusted us <br>
                            more than just a trip</p>
                    </div>
                    <div class="col-md-8 text-center">
                        <img src="frontend/Images/logos_partner.png " alt="Logo Partner" class="img-partner">
                    </div>
                </div>
            </div>
        </section>

        <!-- Section Testimonial -->
        <section class="section-testimonial-heading" id="TestimonialHeading">
            <div class="container">
                <div class="row">
                    <div class="col text-center">
                        <h2>They Are Loving Us</h2>
                        <p>Moments were giving them <br>
                            the best experience</p>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-testimonial-content">
            <div class="container">
                <div class="section-popular-travel row justify-content-center">
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/Images/t1.png" alt="" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Angga Rizky</h3>
                                <p class="testimonial">“ It was glorious and I could <br>
                                    not stop to say wohooo for <br>
                                    every single moment <br>
                                    Dankeeeeee “</p>
                                <hr>
                                <p class="trip-to mt-2">
                                    Trip to Ubud
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/Images/t2.png" alt="" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shayna</h3>
                                <p class="testimonial">“ “ The trip was amazing and <br>
                                    I saw something beautiful in <br>
                                    that Island that makes me <br>
                                    want to learn more “</p>
                                <hr>
                                <p class="trip-to mt-2">
                                    Trip to Nusa Penida
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-4">
                        <div class="card card-testimonial text-center">
                            <div class="testimonial-content">
                                <img src="frontend/Images/t3.png" alt="" class="mb-4 rounded-circle">
                                <h3 class="mb-4">Shabrina</h3>
                                <p class="testimonial">“ I loved it when the waves <br>
                                    was shaking harder — I was <br>
                                    scared too “</p>
                                <hr>
                                <p class="trip-to mt-2">
                                    Trip to Karimun
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
                <div class="row mt-4">
                    <div class="col-12 text-center">
                        <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">I Need Help</a>
                        <a href="{{ route('detail')}}" class="btn btn-get-started px-4 mt-4 mx-1">Get Started</a>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection