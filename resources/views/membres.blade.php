@extends('layouts.template')

@section('title')
    Games House - Nos menbres
@endsection

@section('content')
    <div class="main-innerpage w-100 float-start">
        <div class="innerpages">
            <h2>Nos Membres</h2>
            <span>Accueil > <span class="font-color-pink">Membres</span></span>
        </div>
    </div>

    <div class="blog blog-page community-page float-center">
        <div class="container-full m-3">
            <div class="row">
                <div class="col-lg-3 col-md-12 col-12">
                    <div class="sidepannal">
                        <div class="pannal-box">
                            <h5>Critères de choix</h5>

                            <div class="pannal-content accordion4-wrapper">

                                <div class="accordions" id="fourthAccordion">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingfour">
                                            <button class="accordion-button" type="button" data-bs-toggle="collapse"
                                                data-bs-target="#collapseTen" aria-expanded="true"
                                                aria-controls="collapseTen">
                                                Sexe
                                            </button>
                                        </h2>
                                        <div id="collapseTen" class="accordion-collapse collapse show"
                                            aria-labelledby="headingfour" data-bs-parent="#fourthAccordion">
                                            <div class="accordion-body">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne1">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne1"
                                                aria-expanded="false" aria-controls="collapseOne1">
                                                Tranches d'age
                                            </button>
                                        </h2>
                                        <div id="collapseOne1" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne1" data-bs-parent="#fourthAccordion">
                                            <div class="accordion-body">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="accordion-item">
                                        <h2 class="accordion-header" id="headingOne2">
                                            <button class="accordion-button collapsed" type="button"
                                                data-bs-toggle="collapse" data-bs-target="#collapseOne2"
                                                aria-expanded="false" aria-controls="collapseOne2">
                                                Corpulence
                                            </button>
                                        </h2>
                                        <div id="collapseOne2" class="accordion-collapse collapse"
                                            aria-labelledby="headingOne2" data-bs-parent="#fourthAccordion">
                                            <div class="accordion-body">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!--<div class="custum-select your-gender">
                                        <select class>
                                            <option value data-display-text="Sexe">Sexe</option>
                                            <option value="Homme">Homme</option>
                                            <option value="Femme">Femme</option>
                                        </select>
                                    </div>
                                    <div class="custum-select age">
                                        <select class>
                                            <option value data-display-text="Age">Age</option>
                                            <option value="18+">18+</option>
                                            <option value="21+">21+</option>
                                            <option value="26+">26+</option>
                                        </select>
                                    </div>
                                    <div class="custum-select country">
                                        <select class>
                                            <option value data-display-text="Choose Your Country">Country</option>
                                            <option value="India">India</option>
                                            <option value="USA">USA</option>
                                            <option value="Astralia">Astralia</option>
                                        </select>
                                    </div>
                                    <div class="custum-select interests">
                                        <select class>
                                            <option value data-display-text="Your Interests">Your Interest</option>
                                            <option value="Dance">Dancing</option>
                                            <option value="Singing">Singing</option>
                                        </select>
                                    </div>-->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12 col-12">
                    <div class="main-members-section nos-membres-section">
                        <div class="m-4 d-flex justify-content-between">
                            <h5 class="text-white">30.000 Membres</h5>
                            <div class="profile-name">
                                <span style="color: #838383">Page 1 sur 100</span>
                            </div>
                        </div>
                        <div class="row m-4">
                            <span class="col-1 p-2 m-1 badge rounded-pill bg-light text-dark">
                                Light <a href="#"><i class="fa fa-remove"></i></a>
                            </span>
                            <span class="col-1 p-2 m-1 badge rounded-pill bg-light text-dark">
                                Light <a href="#"><i class="fa fa-remove"></i></a>
                            </span>
                            <span class="col-1 p-2 m-1 badge rounded-pill bg-light text-dark">
                                Light <a href="#"><i class="fa fa-remove"></i></a>
                            </span>
                            <span class="col-1 p-2 m-1 badge rounded-pill bg-light text-dark">
                                Light <a href="#"><i class="fa fa-remove"></i></a>
                            </span>
                            <a href="javascript:;"
                                class="col-2 p-2 m-1 badge rounded-pill bg-secondary text-decoration-none">
                                supprimer
                            </a>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <a href="{{ route('profil') }}">
                                    <div class="members-box">
                                        <div class="members-img">
                                            <img src="{{ asset('assets/images/members-img1.jpg') }}" alt="community-img1"
                                                class="img-fluid">
                                        </div>
                                        <div class="members-text">
                                            <h6>Sarika Thakur</h6>
                                            <span>landon</span>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="members-box">
                                    <div class="members-img">
                                        <img src="{{ asset('assets/images/members-img2.jpg') }}" alt="community-img2"
                                            class="img-fluid">
                                    </div>
                                    <div class="members-text">
                                        <a href="{{ route('profil') }}">
                                            <h6>Sarika Thakur</h6>
                                        </a>
                                        <span>landon</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="members-box">
                                    <div class="members-img">
                                        <img src="{{ asset('assets/images/members-img3.jpg') }}" alt="community-img3"
                                            class="img-fluid">
                                    </div>
                                    <div class="members-text">
                                        <a href="{{ route('profil') }}">
                                            <h6>Sarika Thakur</h6>
                                        </a>
                                        <span>landon</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="members-box">
                                    <div class="members-img">
                                        <img src="{{ asset('assets/images/members-img1.jpg') }}" alt="community-img4"
                                            class="img-fluid">
                                    </div>
                                    <div class="members-text">
                                        <a href="{{ route('profil') }}">
                                            <h6>Sarika Thakur</h6>
                                        </a>
                                        <span>landon</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="members-box">
                                    <div class="members-img">
                                        <img src="{{ asset('assets/images/members-img3.jpg') }}" alt="community-img5"
                                            class="img-fluid">
                                    </div>
                                    <div class="members-text">
                                        <a href="{{ route('profil') }}">
                                            <h6>Sarika Thakur</h6>
                                        </a>
                                        <span>landon</span>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4 col-sm-6 col-6">
                                <div class="members-box">
                                    <div class="members-img">
                                        <img src="{{ asset('assets/images/members-img2.jpg') }}" alt="community-img6"
                                            class="img-fluid">
                                    </div>
                                    <div class="members-text">
                                        <a href="{{ route('profil') }}">
                                            <h6>Sarika Thakur</h6>
                                        </a>
                                        <span>landon</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="main-pagination">
                        <ul class="pagination">
                            <li><a href="javascript:;"><i class="fas fa-arrow-left"></i></a></li>
                            <li><a href="javascript:;">1</a></li>
                            <li><a href="javascript:;">2</a></li>
                            <li><a href="javascript:;">3</a></li>
                            <li><a href="javascript:;">...</a></li>
                            <li><a href="javascript:;">5</a></li>
                            <li><a href="javascript:;"><i class="fas fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


@section('styles')
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fonts.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection

@section('scripts')
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.magnific-popup.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>

    <script>
        $('#search_button').on("click", function (e) {
            $('#search_open').slideToggle();
            e.stopPropagation();
        });

        $(document).on("click", function (e) {
            if (!(e.target.closest('#search_open1'))) {
                $("#search_open1").slideUp();
            }
        });
    </script>
    <script>
        $('#search_button1').on("click", function (e) {
            $('#search_open1').slideToggle();
            e.stopPropagation();
        });

        $(document).on("click", function (e) {
            if (!(e.target.closest('#search_open1'))) {
                $("#search_open1").slideUp();
            }
        });
    </script>
@endsection
