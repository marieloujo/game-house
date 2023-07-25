<x-app-layout>


    <div class="main-innerpage w-100 float-start">
        <div class="container">
            <div class="innerpages">
                <h2>Abonnement</h2>
                <span>Dashboard > <span class="font-color-pink">Abonnement</span></span>
            </div>
        </div>
    </div>


    <div class="bz_product_grid_content_main_wrapper w-100 float-start">
        <div class="container custom_container">
            <h4 class="text-white my-4">Mes abonnements</h4>
            <div class="bz_cart_main_wrapper w-100 float-start">
                <div class="table table-responsive">
                    <table class="table table-borderless">
                        <thead>
                            <tr>
                                <th>Pack</th>
                                <th>Date</th>
                                <th>Expire le</th>
                                <th>Status</th>
                                <th>Montant</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td> Formule Basique
                                    - Plan hebdomadaire
                                </td>
                                <td> 03/07/2023 </td>
                                <td> 10/07/2023 </td>
                                <td><span class="badge bg-danger">Expiré</span></td>
                                <td>2000 XOF</td>
                            </tr>
                            <tr>
                                <td> Formule Basique
                                    - Plan hebdomadaire
                                </td>
                                <td> 10/07/2023 </td>
                                <td> 17/07/2023 </td>
                                <td><span class="badge bg-success">Actif</span></td>
                                <td>2000 XOF</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="how-it-work main-princing-section w-100 float-start" id="nos-tarifs">
        <div class="container">
            <div class="heading center-heading">
                <h2>Les packs d'abonnement</h2>
            </div>
            <div class="w-100 float-start">
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="counter-box">
                            <div class="counter-icon">
                                <h2>2.000 <sup style="color: white">F</sup></h2>
                            </div>
                            <div class="counter-text">
                                <h4>Formule Basique</h4>
                                <span>Plan hebdomadaire</span>
                                <ul class="table-ul">
                                    <li>LifeTime Memabership</li>
                                    <li>Profile Security </li>
                                    <li>Free Notification</li>
                                </ul>
                                <a href="javascript:;" class="main-btn">Souscrire</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="counter-box">
                            <div class="counter-icon">
                                <h2>5.000 <sup style="color: white">F</sup></h2>
                            </div>
                            <div class="counter-text">
                                <h4>Formule Premium</h4>
                                <span>Plan mensuel</span>
                                <ul class="table-ul">
                                    <li>LifeTime Memabership</li>
                                    <li>Profile Security </li>
                                    <li>Free Notification</li>
                                </ul>
                                <a href="javascript:;" class="main-btn">Souscrire</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="counter-box">
                            <div class="counter-icon">
                                <h2>15.000 <sup style="color: white">F</sup></h2>
                            </div>
                            <div class="counter-text">
                                <h4>Formule VIP</h4>
                                <span>Plan annuel</span>
                                <ul class="table-ul">
                                    <li>LifeTime Memabership</li>
                                    <li>Profile Security </li>
                                    <li>Free Notification</li>
                                </ul>
                                <a href="javascript:;" class="main-btn">Souscrire</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <x-slot name="styles">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/fonts.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/font-awesome.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/owl.carousel.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery-ui.css') }}" />
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/navigation.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </x-slot>

    <x-slot name="scripts">
        <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
        <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
        <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
        <script src="{{ asset('assets/js/range-slider.js') }}"></script>
        <script src="{{ asset('assets/js/custom.js') }}"></script>
    </x-slot>

</x-app-layout>
