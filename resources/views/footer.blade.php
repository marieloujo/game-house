<div id="footer">
    <div class="w-100 float-start main-search">
        <div class="container">
            <div class="heading center-heading heading-white">
                <h2>S'abonner <strong>avec</strong> nous</h2>
                <p>Restez informé(e) avec notre newsletter exclusive</p>
            </div>
            <div class="search-box">
                <input type="text" name="search" placeholder="Entrez votre mail">
                <button type="button" class="main-btn main-btn-iocn">
                    <span class="d-none-btn">Souscrire</span>
                    <span class="icon">
                        <i class="fas fa-paper-plane"></i>
                    </span>
                </button>
            </div>
        </div>
    </div>
    <footer class="w-100 float-start index2-footer">
        <div class="container">
            <div class="footer-logo">
                <a href="{{ route('index') }}">
                    <img src="{{ asset('assets/images/index2-footer-img.png') }}" class="img-fluid d-block mx-auto" alt="logo">
                </a>
            </div>
            <div class="footer-content text-center">
                <p>
                    Rejoignez-nous dès maintenant et ouvrez la porte vers de nouvelles rencontres excitantes.
                    Avec Game Houses, l'amour authentique et des expériences passionnantes sont
                    à portée de main. Préparez-vous à vivre une aventure unique et à rencontrer des
                    personnes qui vous feront vibrer.
                </p>
                <ul class="media-icon media-icon-index">
                    <li><a href="javascript:;"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="javascript:;"><i class="fab fa-google"></i></a></li>
                    <li><a href="javascript:;"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="javascript:;"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="javascript:;"><i class="fab fa-skype"></i></a></li>
                </ul>
            </div>
            <div class="bootem-footer bottom-footer">
                <p>© Copyright {{ date('Y') }} <span>Game Houses</span> </a>.</p>
                <ul>
                    <li><a href="{{ route('cgu') }}">Termes et conditions</a></li>
                    <li><a href="{{ route('politique') }}">Politique de confidentialité</a></li>
                </ul>
            </div>
        </div>
    </footer>
</div>
