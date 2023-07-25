<div id="header">
    <header class="w-100 float-start">
        <div class="main-header w-100 float-start">
            <div class="container-fluid">
                <div class="row align-items-center">
                    <div class="col-lg-2 col-6 p-0">
                        <div class="main-header-logo">
                            <a href="{{ route('index') }}">
                                <img src="{{ asset('assets/images/logo.png') }}" class="img-fluid mx-auto" alt="logo">
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
                                <li> <a href="{{ route('dashboard') }}"> Dashboard </a> </li>
                                <li> <a href="{{ route('abonnement') }}"> Abonnements </a> </li>
                                <li> <a href="{{ route('membres') }}"> Mes datings </a> </li>
                                <li> <a href="{{ route('index') }}#nos-tarifs"> Mes matchs </a> </li>
                                <li> <a href="{{ route('faq') }}"> Discuter </a> </li>
                                <li> <a href="{{ route('index') }}"> Allez au site </a> </li>
                                <li class="d-block d-lg-none"><a href="{{ route('profile.show') }}">Notifications</a></li>
                                <li class="d-block d-lg-none"><a href="{{ route('profile.show') }}">Mon compte</a></li>
                            </ul>
                            <div class="d-none d-lg-flex justify-content-between relative">
                                <button type="button" class="btn btn-dark position-relative mx-2">
                                    <i class="fas fa-bell"></i>
                                    <span class="position-absolute top-0 start-100 translate-middle p-1 bg-danger border border-light rounded-circle">
                                        <span class="visually-hidden">New alerts</span>
                                    </span>
                                    </button>
                                <x-dropdown align="right" width="48">
                                    <x-slot name="trigger">
                                        @if (Laravel\Jetstream\Jetstream::managesProfilePhotos())
                                            <button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition">
                                                <img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                            </button>
                                        @else
                                            <span class="inline-flex rounded-md">
                                                <button type="button" class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition ease-in-out duration-150">
                                                    {{ Auth::user()->name }}

                                                    <svg class="ml-2 -mr-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 8.25l-7.5 7.5-7.5-7.5" />
                                                    </svg>
                                                </button>
                                            </span>
                                        @endif
                                    </x-slot>

                                    <x-slot name="content">
                                        <!-- Account Management -->
                                        <div class="block px-4 py-2 text-xs text-gray-400">
                                            {{ __('Mon compte') }}
                                        </div>

                                        <x-dropdown-link href="{{ route('profile.show') }}">
                                            {{ __('Profile') }}
                                        </x-dropdown-link>

                                        <div class="border-t border-gray-200"></div>

                                        <!-- Authentication -->
                                        <form method="POST" action="{{ route('logout') }}" x-data>
                                            @csrf

                                            <x-dropdown-link href="{{ route('logout') }}"
                                                        @click.prevent="$root.submit();">
                                                {{ __('Déconnexion') }}
                                            </x-dropdown-link>
                                        </form>
                                    </x-slot>
                                </x-dropdown>
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
    </header>
</div>
