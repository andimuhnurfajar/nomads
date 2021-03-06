@extends('layouts.app')

@section('title')
    Detail travel
@endsection

@section('content')
<!-- Main -->
<main>
  <section class="section-details-header"></section>
  <section class="section-details-content">
    <div class="container">
      <div class="row">
        <div class="col p-0">
          <nav>
            <ol class="breadcrumb">
              <li class="breadcrumb-item">
                Paket Travel
              </li>
              <li class="breadcrumb-item active">
                Details
              </li>
            </ol>
          </nav>
        </div>
      </div>
      <div class="row">
            <div class="col-lg-8 pl-lg-0">
                <div class="card card-details">
                  <h1>Nusa Peninda</h1>
                  <p>Republic of Indonesia Raya</p>
                  <div class="gallery">
                      <div class="xzoom-container">
                        <img src="{{ url('frontend/Images/xzoom1.png')}}" class="xzoom" id="xzoom-default"
                            xorginal="{{ url('frontend/Images/xzoom1.png')}}">
                      </div>
                      <div class="xzoom-thumbs">
                        <a href="{{ url('frontend/Images/xzoom1.png')}}">
                            <img src="{{ url('frontend/Images/ppx1.png')}}" class="xzoom-gallery" width="120"
                              xpreview="{{ url('frontend/Images/xzoom1.png')}}">
                        </a>
                        <a href="{{ url('frontend/Images/xzoom2.png')}}">
                            <img src="{{ url('frontend/Images/pic_thum1.jpg')}}" class="xzoom-gallery" width="120"
                              xpreview="{{ url('frontend/Images/xzoom2.png')}}">
                        </a>
                        <a href="{{ url('frontend/Images/xzoom3.png')}}">
                            <img src="{{ url('frontend/Images/pic_thum2.jpg')}}" class="xzoom-gallery" width="120"
                              xpreview="{{ url('frontend/Images/xzoom3.png')}}">
                        </a>
                        <a href="{{ url('frontend/Images/xzoom4.png')}}">
                            <img src="{{ url('frontend/Images/pic_thum3.jpg')}}" class="xzoom-gallery" width="120"
                              xpreview="{{ url('frontend/Images/xzoom4.png')}}">
                        </a>
                        <a href="{{ url('frontend/Images/xzoom5.png')}}">
                            <img src="{{ url('frontend/Images/pic_thum4.jpg')}}" class="xzoom-gallery" width="120"
                              xpreview="{{ url('frontend/Images/xzoom5.png')}}">
                        </a>
                      </div>
                  </div>
                  <h2>Tentang Wisata</h2>
                  <p>Nusa Penida is an island southeast of Indonesia’s island Bali and a district of Klungkung
                      Regency that includes the neighbouring small island of Nusa Lembongan. The Badung
                      Strait separates the island and Bali. The interior of Nusa Penida is hilly with a
                      maximum
                      altitude of 524 metres. It is drier than the nearby island of Bali.</p>
                  <p>Bali and a district of Klungkung Regency that includes the neighbouring small island of
                      Nusa Lembongan. The Badung Strait separates the island and Bali.</p>
                  <div class="features row">
                      <div class="col-md-4">
                        <img src="frontend/Images/ic_event.png" alt="" class="features-image">
                        <div class="description">
                            <h1>Featured Event</h1>
                            <p>Tari Kecak</p>
                        </div>
                      </div>
                      <div class="col-md-4 border-left">
                        <img src="{{ url('frontend/Images/ic_language.png')}}" alt="" class="features-image">
                        <div class="description">
                            <h1>Lenguage</h1>
                            <p>Bahasa Indonesia</p>
                        </div>
                      </div>
                      <div class="col-md-4 border-left">
                        <img src="{{ url('frontend/Images/ic_foods.png')}}" alt="" class="features-image">
                        <div class="description">
                            <h1>Foods</h1>
                            <p>Local Foods</p>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-details card-right">
                  <h2>Members are going</h2>
                  <div class="members my-2">
                      <img src="{{ url('frontend/Images/m1.png')}}" class="member-image mr-1">
                      <img src="{{ url('frontend/Images/m2.png')}}" class="member-image mr-1">
                      <img src="{{ url('frontend/Images/m3.png')}}" class="member-image mr-1">
                      <img src="{{ url('frontend/Images/m4.png')}}" class="member-image mr-1">
                      <img src="{{ url('frontend/Images/m5.png')}}" class="member-image mr-1">
                  </div>
                  <hr>
                  <h2>Trip Informations</h2>
                  <table class="trip-informations">
                      <tr>
                        <th class="pt-2" width="50%">Date of Departure</th>
                        <td class="pt-2" width="50%" class="text-right">
                            22 Aug, 2019
                      </tr>
                      <tr>
                        </td>
                        <th class="pt-2" width="50%">Duration</th>
                        <td class="pt-2" width="50%" class="text-right">
                            4D 3N
                        </td>
                      </tr>
                      <tr>
                        <th class="pt-2" width="50%">Type</th>
                        <td class="pt-2" width="50%" class="text-right">
                            Open Trip
                        </td>
                      </tr>
                      <tr>
                        <th class="pt-2" width="50%">Price</th>
                        <td class="pt-2" idth="50%" class="text-right">
                            $80,00 / person
                        </td>
                      </tr>
                  </table>
                </div>
                <div class="join-container">
                  <a href="{{ route('checkout')}}" class="btn btn-block btn-join-now mt-3 py-2">Join Now</a>
                </div>
            </div>
      </div>
    </div>
  </section>
</main>
<!-- Akhhir Main -->
@endsection

@push('prepend-style')
    <link rel="stylesheet" href="{{ url('frontend/Libraries/Xzoom/xzoom.css')}}">
@endpush

@push('addon-script')
    <script src="{{ url('frontend/Libraries/Xzoom/xzoom.min.js')}}"></script>
    <script>
        // $(Document).ready(function () {
          $(function() {
            $('.xzoom, .xzoom-gallery').xzoom({
                zoomWidth: 500,
                title: false,
                tint: '#333',
                Xoffset: 15
            });
        });
    </script>
@endpush