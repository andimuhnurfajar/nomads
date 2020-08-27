@extends('layouts.success')

@section('title')
    Checkout Success
@endsection 

@section('content')
<!-- Main -->
<main>
    <div class="section-success d-flex align-item-center">
        <div class="col text-center">
        <img src="{{ url('frontend/Images/ic_mail.png')}}" alt="" class="my-2">
            <h1>Yay! Success</h1>
            <p>We've sent you email for trip instruction <br> please read it as well</p>
            <a href="{{ route('home')}}" class="btn btn-home-page mt-3 px-5">Home Page</a>
        </div>
    </div>
</main>
<!-- Akhhir Main -->    
@endsection

