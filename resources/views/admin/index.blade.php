@extends('layouts.back');

@section('styles')
<link href="{{asset('assets/backoffice/vendor/jquery-nice-select/css/nice-select.css')}}" rel="stylesheet">
<link rel="stylesheet" href="{{asset('assets/backoffice/vendor/nouislider/nouislider.min.css')}}">
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-xl-8 col-xxl-12">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card">
                        <div class="card-header flex-wrap border-0 pb-0 align-items-end">
                            <div class="mb-3 me-3">
                                <h5 class="fs-20 text-black font-w500">Solde de mon compte</h5>
                                <span class="text-num text-black fs-36 font-w500"><strong>673.412 Fcfa</strong></span>
                            </div>
                            <div class="me-3 mb-3">
                                <p class="fs-14 mb-1">Dernier transaction</p>
                                <span class="text-black fs-16"><strong>Orange Money</strong></span>
                            </div>
                            <div class="me-3 mb-3">
                                <p class="fs-14 mb-1">Motif</p>
                                <span class="text-black fs-16"><strong>Retrait Code</strong></span>
                            </div>
                            <div class="me-3 mb-3">
                                <p class="fs-14 mb-1">Montant</p>
                                <span class="text-black fs-16"><strong>76.000 Fcfa</strong></span>
                            </div>

                        </div>
                        <div class="card-body">
                            <div class="progress default-progress">
                                <div class="progress-bar bg-gradient-5 progress-animated" style="width: 50%; height:20px;" role="progressbar">
                                    <span class="sr-only">50% Complete</span>
                                </div>
                            </div>
                            <div class="row mt-4 pt-3">
                                <div class="col-xl-4 col-xxl-5 col-lg-6">
                                    <div class="row">
                                        <div class="col-sm-6 col-7">
                                            <h4 class="card-title">Transaction Mensuel</h4>
                                            <ul class="card-list mt-3">
                                                <li class="mb-2"><span class="bg-success circle"></span><span class="ms-0">Envoi</span><span class="text-black fs-18">50%</span></li>
                                                <li class="mb-2"><span class="bg-danger circle"></span><span class="ms-0">Retrait</span><span class="text-black fs-18">30%</span></li>
                                                <li class="mb-2"><span class="bg-light circle"></span><span class="ms-0">Crédit</span><span class="text-black fs-18">20%</span></li>
                                            </ul>
                                        </div>
                                        <div class="col-sm-6 col-5">
                                            <canvas id="pieChart" ></canvas>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-8 col-xxl-7 col-lg-6">
                                    <div id="line-chart" class="bar-chart"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>




            </div>
        </div>
        <div class="col-xl-4 col-xxl-12">
            <div class="row">
                <div class="col-xl-12 col-xxl-4 col-lg-5 col-sm-6">
                    <div class="card bg-blue action-card">
                        <div class="card-body text-white">
                            <img src="{{asset('assets/backoffice/images/pattern/circle.png')}}" class="mb-4" alt="">
                            <h2 class="text-white fs-36">843.290 Fcfa</h2>
                            <p class="fs-16">Crédit transférés</p>
                            <span>Cliquer sur un bouton pour acheter du crédit</span>
                            <div class="ic-card">
                                <a href="page-invoices.html">
                                   <div>
                                       <img src="https://sonatel.sn/wp-content/uploads/2017/05/Logo-Orange_1234_mediatheque-lightbox.jpg" width="90" alt="">
                                   </div>
                                    <span>Orange</span>
                                </a>
                                <a href="page-transaction.html">
                                    <div>
                                       <img src="https://118500.fr/uploads/content/logo-free-02.png" width="95" alt="">
                                   </div>
                                    <span>Free</span>
                                </a>
                                <a href="page-transaction.html">
                                   <div>
                                       <img src="https://store-images.s-microsoft.com/image/apps.41336.13510798883875078.1df78834-45b2-4fc1-be2c-1387bb95e23e.f3f1237c-4197-4628-ab18-3b4588f0bce9?mode=scale&q=90&h=300&w=300" width="90" alt="">
                                   </div>
                                    <span>Expresso</span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12" >
            <div class="card" style="background-color: black">
                <div class="card-header flex-wrap border-0 pb-0">
                    <div class="mb-3 me-3">
                        <h5 class="fs-20 text-black font-w500" ><strong style="color: white"> Faire une opération</strong></h5>
                        <img src="https://justinmorel.info/wp-content/uploads/2018/09/om.png" alt="">

                        {{-- <span class="text-num text-black fs-36 font-w500">$673,412.66</span> --}}
                    </div>
                    <div class="mb-3">
                        <a href=""><img src="{{asset('assets/backoffice/images/envoi.png')}}" height="90" alt=""></a>

                    </div>
                    <div class="me-3 mb-3">
                        <a href=""><img src="{{asset('assets/backoffice/images/retrait.png')}}" height="90" alt=""></a>
                    </div>
                    <div class="me-3 mb-3">
                        <a href=""><img src="{{asset('assets/backoffice/images/code.png')}}" height="90" alt=""></a>
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
