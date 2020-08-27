@extends('layouts.checkout')

@section('title')
    Checkout
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
                    <li class="breadcrumb-item">
                        Details
                    </li>
                    <li class="breadcrumb-item active">
                        Checkout
                    </li>
                </ol>
                </nav>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 pl-lg-0">
                <div class="card card-details">
                <h1>Who is Going?</h1>
                <p>Trip to Ubud, Bali, Indonesia</p>
                <div class="attendee">
                    <table class="table table-responsive-sm text-center">
                        <thead>
                            <tr>
                            <td>Picture</td>
                            <td>Name</td>
                            <td>Nationality</td>
                            <td>Visa</td>
                            <td>Pastport</td>
                            <td></td>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                            <td>
                                <img src="{{ url('frontend/Images/Avatar1.png')}}" height="60">
                            </td>
                            <td class="align-middle">
                                Angga Rizky
                            </td>
                            <td class="align-middle">
                                CN
                            </td>
                            <td class="align-middle">
                                N/A
                            </td>
                            <td class="align-middle">
                                Active
                            </td>
                            <td class="align-middle">
                                <a href="#">
                                    <img src="{{ url('frontend/Images/ic_remove.png')}}" alt="">
                                </a>
                            </td>
                            </tr>
                            <tr>
                            <td>
                                <img src="{{ url('frontend/Images/Avatar2.png')}}" height="60">
                            </td>
                            <td class="align-middle">
                                Galih Pratama
                            </td>
                            <td class="align-middle">
                                SC
                            </td>
                            <td class="align-middle">
                                30 Days
                            </td>
                            <td class="align-middle">
                                Active
                            </td>
                            <td class="align-middle">
                                <a href="#">
                                    <img src="{{ url('frontend/Images/ic_remove.png')}}" alt="">
                                </a>
                            </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="member mt-3">
                    <h2>Add Member</h2>
                    <form class="form-inline">
                        <label for="inputUsername" class="sr-only">Name</label>
                        <input name="inputUsername" type="text" class="form-control mb-2 mr-sm-2" id="inputUsername"
                            placeholder="Username">
                        <label for="inputVisa" class="sr-only">Visa</label>
                        <select name="inputVisa" id="inputVisa" class="custom-select mb-2 mr-sm-2">
                            <option value="VISA" selected>VISA</option>
                            <option value="30 Days">30 Days</option>
                            <option value="N/A">N/A</option>
                        </select>

                        <label for="doePassport" class="sr-only">DOE Passport</label>
                        <div class="input-group mb-2 mr-sm-2">
                            <input type="text" class="form-control datepicker" id="doePassport"
                            placeholder="DOE Passport">
                        </div>

                        <button type="submit" class="btn btn-add-now mb-2 px-4">Add Now</button>
                    </form>
                    <h5 class="mt-2 mb-0">Note</h5>
                    <p class="disclaimer mb-0">You are only able to invite member that has registered in
                        Nomads.</p>
                </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card card-details card-right">
                <h2>Checkout Informations</h2>
                <table class="trip-informations">
                    <tr>
                        <th class="pt-2" width="50%">Members</th>
                        <td class="pt-2" width="50%" class="text-right">
                            2 person
                    </tr>
                    <tr>
                        </td>
                        <th class="pt-2" width="50%">Additional Visa</th>
                        <td class="pt-2" width="50%" class="text-right">
                            $190,00
                        </td>
                    </tr>
                    <tr>
                        <th class="pt-2" width="50%">Trip Price</th>
                        <td class="pt-2" width="50%" class="text-right">
                            $80,00 / person
                        </td>
                    </tr>
                    <tr>
                        <th class="pt-2" width="50%">Sub Total</th>
                        <td class="pt-2" idth="50%" class="text-right">
                            $280,00
                        </td>
                    </tr>
                    <tr>
                        <th class="pt-2" width="50%">Total (+Unique Code)</th>
                        <td class="pt-2" idth="50%" class="text-right text-total">
                            <span class="text-blue">$273,</span>
                            <span class="text-orange">33</span>
                        </td>
                    </tr>
                </table>
                <hr>
                <h2>Payment Instructions</h2>
                <p class="payment-instructions">Please complete your payment before <br> to continue the
                    wonderfull trip</p>
                <div class="bank">
                    <div class="bank-item pb-3">
                        <img src="{{ url('frontend/Images/ic_bank.png')}}" alt="" class="bank-image">
                        <div class="description">
                            <h3>PT Nomads ID</h1>
                            <p> 0881 8829 8800 <br>
                                Bank Central Asia
                            </p>
                        </div>
                        <div class="clearfix mb-2 mt-2"></div>
                        <div class="bank-item pb-3">
                            <img src="{{ url('frontend/Images/ic_bank.png')}}" alt="" class="bank-image">
                            <div class="description">
                            <h3>PT Nomads ID</h1>
                                <p> 0899 8501 7888 <br>
                                    Bank HSBC
                                </p>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                        </div>
                    </div>
                </div>
                <div class="join-container">
                    <a href="{{ route('checkout-success')}}" class="btn btn-block btn-join-now mt-3 py-2">I Have Made Payment</a>
                </div>
                <div class="text-center mt-3">
                    <a href="{{ route('detail')}}" class="text-muted">Cencel Booking</a>
                </div>
            </div>
        </div>
    </section>
</main>
<!-- Akhhir Main -->
@endsection

@push('prepend-style')
<link rel="stylesheet" href="{{ url('frontend/Libraries/Gijgo/css/gijgo.min.css')}}">
@endpush

@push('addon-script')
<script src="{{url('frontend/Libraries/Gijgo/js/gijgo.min.js')}}"></script>
    <script>
        // $(Document).ready(function () {
            $(function() {
            $('.datepicker').datepicker({
                uiLibrary: 'bootstrap4',
                icons: {
                rightIcon: '<img src="{{ url('frontend/Images/Ic_Doe.png')}}" />'
                }
            })
        }); 
    </script>
@endpush