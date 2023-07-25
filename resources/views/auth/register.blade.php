<x-guest-layout>
    <x-slot name="optional_css">
        <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/photo-profil-picker.css') }}">
    </x-slot>


    <x-authentication-card>
        <x-slot name="backwoard_option">
            <a href="{{ route('login') }}" class="tag">Se connecter</a>
        </x-slot>

        <x-validation-errors class="mb-4" />


        <form method="POST" action="{{ route('register') }}" id="form-register" enctype="multipart/form-data">
            @csrf

            <div id="form-register-content">
                <h3 class="d-none">Étape 1</h3>
                <section data-step="0">
                    <h4>Informations personnelles</h4>
                    <div class="row align-items-center">
                        <div class="form-group col-md-4 col-sm-12 col-lg-4 col-xl-4">
                            <x-photo-profil-picker class="col-12 my-auto"/>
                        </div>

                        <div class="col-md-8 col-sm-12 col-lg-8 col-xl-8">
                            <div class="form-group">
                                <small class="input-label" for="name">Votre nom et prénom(s)</small>
                                <div class="form-input">
                                    <x-label for="name"><i class="fas fa-user"></i></x-label>
                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Nom complet" required autofocus autocomplete="name" />
                                </div>
                            </div>

                            <div class="form-group">
                                <small class="input-label" for="surname">Votre surnom <sup class="required-tag">*</sup> </small>
                                <div class="form-input">
                                    <x-label for="surname"><i class="fas fa-user"></i></x-label>
                                    <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" placeholder="Surnom" required autofocus autocomplete="name" />
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group">
                        <small class="input-label" for="birthdate">Votre date de naissance</small>
                        <div class="form-input">
                            <x-label for="birthdate"><i class="fas fa-calendar-alt"></i></x-label>
                            <x-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" placeholder="Date de naissance" autocomplete="birthdate" />
                        </div>
                    </div>


                    <div class="form-group mt-4">
                        <small class="input-label mb-2" for="sexe">Votre sexe  <sup class="required-tag">*</sup></small>
                        <div class="w-100 d-flex justify-content-between">
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" {{ old('sexe') == "1" ? "checked" : "" }} name="sexe" id="sexe-homme" value="1">
                                <label class="form-check-label text-white" for="sexe-homme">Homme</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" {{ old('sexe') == "0" ? "checked" : "" }} name="sexe" id="sexe-femme" value="0">
                                <label class="form-check-label text-white" for="sexe-femme">Femme</label>
                            </div>
                        </div>
                    </div>
                </section>
                <h3 class="d-none">Étape 2</h3>
                <section data-step="1">
                    <h4>Informations de contact</h4>
                    <div class="form-group">
                        <small class="input-label" for="email">Votre adresse email</small>
                        <div class="form-input">
                            <x-label for="email"><i class="fas fa-envelope"></i></x-label>
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email" autocomplete="email" />
                        </div>
                        <div>
                            <small class="required-tagg" style="color: #dc3545">Vous ne pouvez pas récupérer votre compte après oublie du mot de passe si vous ne renseigner pas votre email</small>
                        </div>
                    </div>

                    <div class="form-group">
                        <small class="input-label" for="telephone">Votre numéro de télephone</small>
                        <div class="form-input">
                            <x-label for="telephone"><i class="fas fa-phone"></i></x-label>
                            <x-input id="telephone" class="block mt-1 w-full" type="number" name="telephone" :value="old('telephone')" placeholder="Numéro de téléphone" autocomplete="telephone" />
                        </div>
                    </div>
                </section>
                <h3 class="d-none">Étape 3</h3>
                <section data-step="1">
                    <h4>Définir un mot de passe</h4>

                    <div class="form-group">
                        <small class="input-label" for="password">Entrez un mot de passe</small>
                        <div class="form-input">
                            <x-label for="password"><i class="fas fa-lock"></i></x-label>
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Mot de passe *" required autocomplete="new-password" />
                        </div>
                    </div>

                    <div class="form-group">
                        <small class="input-label" for="password_confirmation">Retapez le mot de passe</small>
                        <div class="form-input">
                            <x-label for="password_confirmation"><i class="fas fa-lock"></i></x-label>
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Confimer mot de passe *" required autocomplete="new-password" />
                        </div>
                    </div>

                    @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                        <div class="mt-4">
                            <x-label for="terms">
                                <div class="flex items-center">
                                    <x-checkbox name="terms" id="terms" required />

                                    <div class="ml-2 text-white">
                                        {!! __('J\'accepte les :terms_of_service et :privacy_policy', [
                                                'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('conditions d\'utilisation').'</a>',
                                                'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-white rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('la politique de confidentialité').'</a>',
                                        ]) !!}
                                    </div>
                                </div>
                            </x-label>
                        </div>
                    @endif
                </section>
            </div>

            {{--

            <div class="tab-one-wrapper">
                <div class="tab-one">
                    <ul class="nav nav-tabs justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home"
                                type="button" role="tab" aria-controls="home" aria-selected="true">
                                Étape 1
                            </button>
                            <span class="tab-border"></span>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="planning-tab" data-bs-toggle="tab" data-bs-target="#planning"
                                type="button" role="tab" aria-controls="planning" aria-selected="false">
                                Étape 2
                            </button>
                        </li>
                    </ul>

                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                            <div class="tab-one-home">
                                <div class="tab-one-content">
                                    <h4>Informations personnelles</h4>
                                    <div class="tab-one-pera">

                                        <div class="row">
                                            <x-photo-profil-picker class="col-md-4 col-sm-12 col-lg-4 col-xl-4"/>

                                            <div class="col-md-8 col-sm-12 col-lg-8 col-xl-8">
                                                <div class="form-input">
                                                    <x-label for="name"><i class="fas fa-user"></i></x-label>
                                                    <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" placeholder="Nom complet *" required autofocus autocomplete="name" />
                                                </div>

                                                <div class="form-input">
                                                    <x-label for="surname"><i class="fas fa-user"></i></x-label>
                                                    <x-input id="surname" class="block mt-1 w-full" type="text" name="surname" :value="old('surname')" placeholder="Surnom *" required autofocus autocomplete="name" />
                                                </div>
                                            </div>
                                        </div>

                                        <div class="form-input">
                                            <x-label for="birthdate"><i class="fas fa-calendar-alt"></i></x-label>
                                            <x-input id="birthdate" class="block mt-1 w-full" type="date" name="birthdate" :value="old('birthdate')" placeholder="Date de naissance" required autocomplete="birthdate" />
                                        </div>

                                        <div class="mt-4 d-flex justify-content-between">
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sexe" id="sexe-homme" value="1">
                                                <label class="form-check-label text-white" for="sexe-homme">Homme</label>
                                            </div>
                                            <div class="form-check form-check-inline">
                                                <input class="form-check-input" type="radio" name="sexe" id="sexe-femme" value="0">
                                                <label class="form-check-label text-white" for="sexe-femme">Femme</label>
                                            </div>
                                        </div>

                                        <a href="javascript:;" class="blog1 btn6 float-end btn-sm">
                                            Suivant
                                            <span><i class="fas fa-arrow-right"></i></span>
                                        </a>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="planning" role="tabpanel" aria-labelledby="planning-tab">
                            <div class="tab-one-home">
                                <div class="tab-one-content">
                                    <h4>Contact - Compte</h4>
                                    <div class="tab-one-pera">
                                        <div class="form-input">
                                            <x-label for="email"><i class="fas fa-envelope"></i></x-label>
                                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" placeholder="Email Address *" required autocomplete="email" />
                                        </div>

                                        <div class="form-input">
                                            <x-label for="telephone"><i class="fas fa-phone"></i></x-label>
                                            <x-input id="telephone" class="block mt-1 w-full" type="tel" name="telephone" :value="old('telephone')" placeholder="Numéro de téléphone" required autocomplete="telephone" />
                                        </div>

                                        <div class="form-input">
                                            <x-label for="password"><i class="fas fa-lock"></i></x-label>
                                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Mot de passe *" required autocomplete="new-password" />
                                        </div>

                                        <div class="form-input">
                                            <x-label for="password_confirmation"><i class="fas fa-lock"></i></x-label>
                                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Confimer mot de passe *" required autocomplete="new-password" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <div class="form-input">
                <x-label for="password"><i class="fas fa-lock"></i></x-label>
                <x-input id="password" class="block mt-1 w-full" type="password" name="password" placeholder="Password *" required autocomplete="new-password" />
            </div>

            <div class="form-input">
                <x-label for="password_confirmation"><i class="fas fa-lock"></i></x-label>
                <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" placeholder="Password *" required autocomplete="new-password" />
            </div>

            @if (Laravel\Jetstream\Jetstream::hasTermsAndPrivacyPolicyFeature())
                <div class="mt-4">
                    <x-label for="terms">
                        <div class="flex items-center">
                            <x-checkbox name="terms" id="terms" required />

                            <div class="ml-2">
                                {!! __('I agree to the :terms_of_service and :privacy_policy', [
                                        'terms_of_service' => '<a target="_blank" href="'.route('terms.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Terms of Service').'</a>',
                                        'privacy_policy' => '<a target="_blank" href="'.route('policy.show').'" class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">'.__('Privacy Policy').'</a>',
                                ]) !!}
                            </div>
                        </div>
                    </x-label>
                </div>
            @endif

            <div class="form-input">
                <x-button class="main-btn" type="submit">{{ __('Register') }}</x-button>
            </div> --}}

        </form>
    </x-authentication-card>

    <x-slot name="optional_js">
        <script src="{{ asset('assets/js/jquery.steps.min.js') }}"></script>
        <script src="{{ asset('assets/js/photo-profil-picker.js') }}"></script>
        <script src="{{ asset('assets/js/jquery.validate.min.js') }}"></script>
        <script>
            $(document).ready(function () {
                var form = $("#form-register");
                $.validator.addMethod(
                    "regex",
                    function(value, element, regexp) {
                        var re = new RegExp(regexp);
                        return this.optional(element) || re.test(value);
                    },
                    jQuery.validator.messages.regex
                );
                $.validator.addMethod('filesize', function (value, element, param) {
                    return this.optional(element) || (element.files[0].size <= param)
                }, 'File size must be less than {0}');

                $.validator.addMethod("check_date_of_birth", function (value, element) {

                    if (!Date.parse(value) && value === "") {
                        return true;
                    }

                    var mydate = new Date(value);

                    console.log("date ===> " + value);

                    var maxDate = new Date();
                    maxDate.setYear(maxDate.getFullYear() - 18);
                    maxDate.setMonth(11)
                    maxDate.setDate(30);
                    console.log(maxDate);
                    console.log(mydate);

                    return maxDate >= mydate;

                }, $.validator.messages.check_date_of_birth);

                $("#form-register-content").steps({
                    headerTag: 'h3',
                    bodyTag: 'section',
                    // Triggered when clicking the Previous/Next buttons
                    onStepChanging: function(e, currentIndex, newIndex) {
                        /*var fv         = $('#form-register').data('formValidation'), // FormValidation instance
                            // The current step container
                            $container = $('#form-register').find('section[data-step="' + currentIndex +'"]');

                        // Validate the container
                        fv.validateContainer($container);

                        var isValidStep = fv.isValidContainer($container);
                        if (isValidStep === false || isValidStep === null) {
                            // Do not jump to the next step
                            return false;
                        }

                        return true;*/
                        form.validate().settings.ignore = ":disabled,:hidden";
                        return form.valid();
                    },
                    // Triggered when clicking the Finish button
                    onFinishing: function(e, currentIndex) {
                        /*var fv         = $('#form-register').data('formValidation'),
                            $container = $('#form-register').find('section[data-step="' + currentIndex +'"]');

                        // Validate the last step container
                        fv.validateContainer($container);

                        var isValidStep = fv.isValidContainer($container);
                        if (isValidStep === false || isValidStep === null) {
                            return false;
                        }

                        return true;*/
                        form.validate().settings.ignore = ":disabled";
                        return form.valid();
                    },
                    onFinished: function(e, currentIndex) {
                        form.submit();
                        // Uncomment the following line to submit the form using the defaultSubmit() method
                        //$('#form-register').formValidation('defaultSubmit');
                    }
                });

                form.validate({
                    rules: {
                        name: "required",
                        sexe: "required",
                        surname: {
                            required: true,
                            minlength: 4,
                            maxlength: 20,
                            regex: "^(?=[a-zA-Z0-9._]{4,20}$)(?!.*[_.]{2})[^_.].*[^_.]$"
                        },
                        birthdate: {
                            check_date_of_birth: true
                        },
                        password: {
                            required: true,
                            minlength: 8
                        },
                        password_confirmation: {
                            required: true,
                            minlength: 8,
                            equalTo: "#password"
                        },
                        email: {
                            email: true
                        },
                        telephone: {
                            number: true,
                            minlength: 8
                        },
                        terms: "required"
                    },
                    messages: {
                        name: "Veuillez renseigner votre nom",
                        sexe: "Veuillez renseigner votre sexe",
                        surname: {
                            required: "Veuillez renseigner votre surnom",
                            minlength: "Le surnom doit être au moins de 4 caractères",
                            maxlength: "Le surnom doit être au plus de 20 caractères",
                            regex: "Le surnom ne doit contenir que des lettres et des chiffres, ne doit contenir aucun espace et doit être long de 4 à 20cartères"
                        },
                        birthdate: {
                            required: "Veuillez renseigner votre date de naissance",
                            check_date_of_birth: "L'age requis est de 18 ans"
                        },
                        email: {
                            required: "Veuillez renseigner votre adresse email",
                            email: "Veuillez renseigner une adresse email correcte"
                        },
                        telephone: {
                            required: "Veuillez renseigner votre numéro de télephone",
                            number: "Le numéro de télephone doit être un nombre",
                            minlength: "Le numéro de télephone doit être d'au moins 8 chiffres"
                        },
                        password: {
                            required: "Veuillez définir un mot de passe",
                            minlength: "Le mot de passe doit être long d'au moins 8 caractères"
                        },
                        confirm_password: {
                            required: "Veuillez retaper le mot de passe",
                            minlength: "Le mot de passe doit être long d'au moins 8 caractères",
                            equalTo: "Veuillez renseinger la même valeur que le mot de passe"
                        },
                        terms: "Veuillez accepter les termes et conditions"
                    },
                    errorElement: "em",
                    errorPlacement: function ( error, element ) {
                        // Add the `help-block` class to the error element
                        error.addClass( "help-block" );

                        // Add `has-feedback` class to the parent div.form-group
                        // in order to add icons to inputs
                        element.parents( ".form-input" ).addClass( "has-feedback" );

                        if ( element.prop( "type" ) === "checkbox" ) {
                            error.insertAfter( element.parent( "label" ) );
                        } else if ( element.prop( "type" ) === "radio" ) {
                            error.insertAfter( element.parent( ".form-check" ).parent()/*.children().last()*/ );
                        } else {
                            error.insertAfter( element );
                        }

                        // Add the span element, if doesn't exists, and apply the icon classes to it.
                        if ( !element.next( "span" )[ 0 ] ) {
                            $( "<span class='glyphicon glyphicon-remove form-control-feedback'></span>" ).insertAfter( element );
                        }
                    },
                    success: function ( label, element ) {
                        // Add the span element, if doesn't exists, and apply the icon classes to it.
                        if ( !$( element ).next( "span" )[ 0 ] ) {
                            $( "<span class='glyphicon glyphicon-ok form-control-feedback'></span>" ).insertAfter( $( element ) );
                        }
                    },
                    highlight: function ( element, errorClass, validClass ) {
                        $( element ).parents( ".col-sm-5" ).addClass( "has-error" ).removeClass( "has-success" );
                        $( element ).next( "span" ).addClass( "glyphicon-remove" ).removeClass( "glyphicon-ok" );
                    },
                    unhighlight: function ( element, errorClass, validClass ) {
                        $( element ).parents( ".col-sm-5" ).addClass( "has-success" ).removeClass( "has-error" );
                        $( element ).next( "span" ).addClass( "glyphicon-ok" ).removeClass( "glyphicon-remove" );
                    }
			    });

                $("#form-register-content-t-0").addClass("d-none");
                $("#form-register-content-t-1").addClass("d-none");
                $("ul[role='menu']").addClass("d-flex justify-content-between mt-4");
                $("a[href='#previous']").parent().addClass("button1-wrapper button3-wrapper");
                $("a[href='#previous']").addClass("xs-btn gray-btn btn1 btn3 text-capitalize").html("Précedent");
                $("a[href='#next']").parent().addClass("button1-wrapper button3-wrapper");
                $("a[href='#next']").addClass("xs-btn white-btn btn1 btn3 text-capitalize").html("Suivant");
                $("a[href='#finish']").parent().addClass("button1-wrapper");
                $("a[href='#finish']").addClass("xs-btn btn1 text-capitalize").html("Valider");
            })
        </script>
    </x-slot>

</x-guest-layout>
