<div id="header">
    <header class="w-100 float-start">
        <div class="main-header w-100 float-start">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6 p-0">
                        <div class="main-header-logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid" alt="logo">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-10 col-6 p-0">
                        <div class="main-menu w-100 float-end">
                            <div class="overlay d-block d-lg-none"></div>
                            <ul class="float-end" id="cssmenu">
                                <li class="d-block d-lg-none">
                                    <a href="javascript:;" class="b-none">
                                        <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                                    </a>
                                </li>
                                <li> <a href="{{ route('index') }}"> ACCUEIL </a> </li>
                                <li> <a href="{{ route('index') }}#a-propos-de-nous"> À PROPOS </a> </li>
                                <li> <a href="{{ route('membres') }}"> EXPLOREZ </a> </li>
                                <li> <a href="{{ route('index') }}#nos-tarifs"> TARIFS </a> </li>
                                <li> <a href="{{ route('faq') }}"> FAQ </a> </li>
                                <li> <a href="{{ route('index') }}#nous-contacter"> CONTACT </a> </li>
                                <li class="d-block d-lg-none"><a href="{{ route('login') }}">Inscription / Connexion</a></li>
                            </ul>
                            <div class="main-btn float-end d-none d-lg-block">
                                <div class="menuBtn">
                                    <a href="{{ route('login') }}">Connexion</a> / <a href="{{ route('register') }}">Inscription</a>
                                </div>
                            </div>
                            <div class="mobToggle d-flex d-lg-none">
                                <div class="toggle-btn">
                                    <div class="icon-left"></div>
                                    <div class="icon-right"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="banner-shap">
            <img src="{{ asset('assets/images/banner-shape1.png') }}" alt="banner-shape1" class="img-fluid">
            <img src="{{ asset('assets/images/banner-shape2.png') }}" alt="banner-shape2" class="img-fluid">
        </div>
        <div class="shadow-img">
        </div>
    </header>
</div>

