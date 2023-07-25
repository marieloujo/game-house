
<div class="main-singin-box">
    <div class="leftside">
        <div class="air-balloon one">
            <img src="{{ asset('assets/images/404-balloon.png') }}" alt="404-balloon">
        </div>
        <div class="air-balloon two">
            <img src="{{ asset('assets/images/404-balloon.png') }}" alt="404-balloon">
        </div>
        <div class="air-balloon three">
            <img src="{{ asset('assets/images/404-balloon.png') }}" alt="404-balloon">
        </div>
        <div class="air-balloon foure">
            <img src="{{ asset('assets/images/404-balloon.png') }}" alt="404-balloon">
        </div>
    </div>
    <div class="container">
        <div class="singin-box">
            <div class="singin-left">
                <div class="logo">
                    <img src="{{ asset('assets/images/logo.png') }}" alt="logo">
                </div>
                {{ $backwoard_option ?? "" }}
            </div>
            <div class="singin-right">
                <div class="main-form">
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
    <div class="rightside">
        <div class="air-balloon one">
            <img src="{{ asset('assets/images/404-balloon.png') }}" alt="404-balloon">
        </div>
        <div class="air-balloon two">
            <img src="{{ asset('assets/images/404-balloon.png') }}" alt="404-balloon">
        </div>
        <div class="air-balloon three">
            <img src="{{ asset('assets/images/404-balloon.png') }}" alt="404-balloon">
        </div>
        <div class="air-balloon foure">
            <img src="{{ asset('assets/images/404-balloon.png') }}" alt="404-balloon">
        </div>
    </div>
</div>
