@extends('layouts.template')

@section('title')
    Games House - Profil
@endsection

@section('content')
    <div class="main-innerpage w-100 float-start">
        <div class="innerpages">
            <h2>Profile</h2>
            <span>Accueil > <span class="font-color-pink">Profile</span></span>
        </div>
    </div>
    <div class="main-profile w-100 float-start">
        <div class="container">
            <div class="cover-img">
                <div class="edit-img">
                    <label for="background_input"><i class="far fa-edit"></i></label>
                    <input id="background_input" type="file" accept="image/*" />
                </div>
                <ul class="media-list2">
                    <li><a href="javascreipt:;"><img src="{{ asset('assets/images/facebook.png') }}" alt="facebook"></a></li>
                    <li><a href="javascreipt:;"><img src="{{ asset('assets/images/twiter.png') }}" alt="twiter"></a></li>
                    <li><a href="javascreipt:;"><img src="{{ asset('assets/images/linkedin.png') }}" alt="linkedin"></a></li>
                    <li><a href="javascreipt:;"><img src="{{ asset('assets/images/google.png') }}" alt="google"></a></li>
                </ul>
            </div>
            <div class="profile-content">
                <div class="profile-details">
                    <div class="left">
                        <div class="profile-img">
                            <img src="{{ asset('assets/images/profile-img.png') }}" alt="profile-img" class="img-fluid">
                        </div>
                        <div class="profile-name">
                            <h3>Sarika Parmar</h3>
                            <span>33 year old Woman</span> <br>
                            <a href="javascript;;" class="font-color-pink"><i
                                    class="fas
                                    fa-map-marker-alt"></i> Tokyo,
                                Japan</a>
                        </div>
                    </div>
                    <div class="right">
                        <ul>
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="counter h2" data-count="121"></div> <span>Followers</span>
                                </a>
                            </li>
                            <li>
                                <a href="javascript:void(0)">
                                    <div class="counter h2" data-count="176"></div> <span>Following</span>
                                </a>
                            </li>
                            <li><a href="javascript:;" class="main-btn">Match</a></li>
                            <li>
                                <div class="dropdown">
                                    <a href="javascript:;" class="menu" data-bs-toggle="dropdown">
                                        <i class="fas fa-ellipsis-v"></i></a>
                                    <ul class="dropdown-menu">
                                        <li><a class="dropdown-item" href="#">Find Match</a></li>
                                        <li><a class="dropdown-item" href="#">Add Friends</a></li>
                                    </ul>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="blog-page pt-0 pb-4 w-100 float-start">
        <div class="container">
            <div class="tabbox w-100 float-start" id="tabbox">
                <div class="position-relative">
                    <ul class="nav" role="tablist">
                        <li class="slider"></li>
                        <li class="nav-item">
                            <a class="slideBottomLine active" id="profile-tab"
                                data-bs-toggle="tab" href="#profile" role="tab"
                                aria-controls="profile" aria-selected="true">Profile </a>
                        </li>
                        <li class="nav-item">
                            <a class="slideBottomLine" id="media-tab" data-bs-toggle="tab"
                                href="#media" role="tab" aria-controls="media" aria-selected="false">Media</a>
                        </li>
                    </ul>
                </div>

                <div class="tab-content w-100 float-start">
                    <div class="tab-pane fade show active w-100 float-start" id="profile"
                        role="tabpanel" aria-labelledby="profile-tab">
                        <div class="profile-tab w-100 float-start">
                            <h4>My self Summary <span class="far fa-edit edit-icon"></span></h4>
                            <p>The Best Solution For Your Business Website. Creative & Interaction
                                Design |
                                Social Media Management | Software Development | Website Designing |
                                Graphic
                                Design | WordPress Theme | Logo Design + Branding | SEO | App
                                Development
                            </p>
                            <div class="video-post">
                                <iframe src="https://www.youtube.com/embed/mgk_2d4lhm8"
                                    title="YouTube video player" allow="accelerometer; autoplay;
                                    clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen></iframe>
                            </div>
                        </div>
                        <div class="profile-tab w-100 float-start">
                            <h4>Basic general information <span class="far fa-edit edit-icon"></span></h4>
                            <ul>
                                <li>Gender <p>Female</p>
                                </li>
                                <li>Age <p>22 Years old </p>
                                </li>
                                <li>Country <p>France </p>
                                </li>
                                <li>City <p>Paris</p>
                                </li>
                                <li>Birthday <p>15 July 1997</p>
                                </li>
                                <li>Relationship <p>Single</p>
                                </li>
                                <li>Height <p>5.7</p>
                                </li>
                                <li>Weight <p>56 </p>
                                </li>
                            </ul>
                            <ul>
                                <li>Education <p>Graduate Degree</p>
                                </li>
                                <li>Know <p>French Russian</p>
                                </li>
                                <li>Interests <p>Billiards</p>
                                </li>
                                <li>Smoking <p>No</p>
                                </li>
                                <li>Eye Color <p>Brown</p>
                                </li>
                                <li>Marital Status <p>Single</p>
                                </li>
                                <li>Looking <p>Man</p>For A</li>
                                <li>Work as <p>Designer</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="tab-pane fade" id="media" role="tabpanel"
                        aria-labelledby="media-tab">
                        <div class="gallery">
                            <div class="gallery-item">
                                <a href="{{ asset('assets/images/about-img1.png') }}" data-fancybox="gallery-image">
                                    <img class="gallery-image" src="{{ asset('assets/images/about-img1.png') }}" alt="gallery
                                        image">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="{{ asset('assets/images/about-img1.png') }}" data-fancybox="gallery-image">
                                    <img class="gallery-image" src="{{ asset('assets/images/about-img2.png') }}" alt="gallery
                                        image">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="{{ asset('assets/images/about-img3.png') }}" data-fancybox="gallery-image">
                                    <img class="gallery-image" src="{{ asset('assets/images/about-img3.png') }}" alt="gallery
                                        image">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="{{ asset('assets/images/about-img4.png') }}" data-fancybox="gallery-image">
                                    <img class="gallery-image" src="{{ asset('assets/images/about-img4.png') }}" alt="gallery
                                        image">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="{{ asset('assets/images/about-img5.png') }}" data-fancybox="gallery-image">
                                    <img class="gallery-image" src="{{ asset('assets/images/about-img5.png') }}" alt="gallery
                                        image">
                                </a>
                            </div>
                            <div class="gallery-item">
                                <a href="{{ asset('assets/images/about-img6.png') }}" data-fancybox="gallery-image">
                                    <img class="gallery-image" src="{{ asset('assets/images/about-img6.png') }}" alt="gallery
                                        image">
                                </a>
                            </div>
                        </div>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.fancybox.min.css') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/responsive.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
@endsection


@section('scripts')
    <script src="{{ asset('assets/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('assets/js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/js/range-slider.js') }}"></script>
    <script src="{{ asset('assets/js/jquery.fancybox.min.js') }}"></script>
    <script src="{{ asset('assets/js/custom.js') }}"></script>


    <script>
        function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                reader.onload = function(e) {
                    $('.cover-img').css('background-image', 'url(' + e.target.result + ')');
                    $('.cover-img').hide();
                    $('.cover-img').fadeIn(650);
                }
                reader.readAsDataURL(input.files[0]);
            }
        }
        $("#background_input").change(function() {
            readURL(this);
        });
    </script>
    <script>
        $(".tabbox .nav a.slideBottomLine").click(function() {
            var position = $(this).parent().position();
            var width = $(this).parent().width();
            $(".tabbox .slider").css({
                "left": +position.left,
                "width": width
            });
        });
    </script>
    <script type="application/javascript">
        let ajaxConfig = {
            ajaxRequester: function (config, uploadFile, pCall, sCall, eCall) {
                let progress = 0
                let interval = setInterval(() => {
                    progress += 10;
                    pCall(progress)
                    if (progress >= 100) {
                        clearInterval(interval)
                        const windowURL = window.URL || window.webkitURL;
                        sCall({
                            data: windowURL.createObjectURL(uploadFile.file)
                        })
                        }
                    }, 300)
                }
        }
        $("#activityPhotoUploder").uploader({multiple: true, ajaxConfig: ajaxConfig,autoUpload: false})
        $("#activityAttachFileUploader").uploader({multiple: true, ajaxConfig: ajaxConfig,autoUpload: false})
    </script>
@endsection
