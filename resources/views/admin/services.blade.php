@extends('layouts.back');

@section('styles')
<link href="{{asset('assets/backoffice/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/backoffice/vendor/nouislider/nouislider.min.css')}}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row invoice-card-row">
        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card bg-white invoice-card">
                <div class="card-body d-flex">
                    <div class="icon me-3">
                       <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJPDnAhHyQIaFgTry0kaTDlmMsDb_lMEtJHuH5V6Yt5ur0JIpFxY_6HS-IOVjMT_r4tmo&usqp=CAU" width="60" alt="">
                    </div>
                    <div>
                        {{-- <strong></strong> --}}
                        <span class="text-white fs-18"><strong style="color: black">Dépot Orange Money</strong></span> <br>
                        <span class="text-dark fs-18" style="color: black">Solde: <strong style="color: black">5.009 Fcfa</strong></span>
                    </div>

                </div>

            </div>
        </div>
        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card bg-white invoice-card">
                <div class="card-body d-flex">
                    <div class="icon me-3">
                       <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRJPDnAhHyQIaFgTry0kaTDlmMsDb_lMEtJHuH5V6Yt5ur0JIpFxY_6HS-IOVjMT_r4tmo&usqp=CAU" width="60" alt="">
                    </div>
                    <div>
                        {{-- <strong></strong> --}}
                        <span class="text-white fs-18"><strong style="color: black">Retrait Orange Money</strong></span> <br>
                        <span class="text-dark fs-18" style="color: black">Solde: <strong style="color: black">15.009 Fcfa</strong></span>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card bg-white invoice-card">
                <div class="card-body d-flex">
                    <div class="icon me-3">
                       <img src="https://sonatel.sn/wp-content/uploads/2017/05/Logo-Orange_1234_mediatheque-lightbox.jpg" width="60" alt="">
                    </div>
                    <div>
                        {{-- <strong></strong> --}}
                        <span class="text-white fs-18"><strong style="color: black">Crédit Orange</strong></span> <br>
                        <span class="text-dark fs-18" style="color: black">Solde: <strong style="color: black">5.009 Fcfa</strong></span>
                    </div>

                </div>

            </div>
        </div>

        <div class="col-xl-3 col-xxl-6 col-sm-6">
            <div class="card bg-white invoice-card">
                <div class="card-body d-flex">
                    <div class="icon me-3">
                       <img src="http://www.userlogos.org/files/logos/cz3ch/freemobile.png" width="60" alt="">
                    </div>
                    <div>
                        {{-- <strong></strong> --}}
                        <span class="text-white fs-18"><strong style="color: black">Crédit Free Mobile</strong></span> <br>
                        <span class="text-dark fs-18" style="color: black">Solde: <strong style="color: black">5.009 Fcfa</strong></span>
                    </div>

                </div>

            </div>
        </div>
    </div>

</div>
@endsection

@section('script')
     <!-- Required vendors -->
     <script src="{{asset('assets/backoffice/vendor/global/global.min.js')}}"></script>
     <script src="{{asset('assets/backoffice/vendor/chart.js/Chart.bundle.min.js')}}"></script>
     <script src="{{asset('assets/backoffice/vendor/jquery-nice-select/js/jquery.nice-select.min.js')}}"></script>

     <!-- Apex Chart -->
     <script src="{{asset('assets/backoffice/vendor/apexchart/apexchart.js')}}"></script>
     <script src="{{asset('assets/backoffice/vendor/nouislider/nouislider.min.js')}}"></script>
     <script src="{{asset('assets/backoffice/vendor/wnumb/wNumb.js')}}"></script>

     <!-- Dashboard 1 -->
     <script src="{{asset('assets/backoffice/js/dashboard/my-wallet.js')}}"></script>

     <script src="{{asset('assets/backoffice/js/custom.min.js')}}"></script>
     <script src="{{asset('assets/backoffice/js/dlabnav-init.js')}}"></script>
     <script src="{{asset('assets/backoffice/js/demo.js')}}"></script>
     {{-- <script src="{{asset('assets/backoffice/js/styleSwitcher.js')}}"></script> --}}

@endsection
