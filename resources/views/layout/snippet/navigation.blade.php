<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">
            <img src="{{ asset('/img/logo.png') }}" style="width: 160px" alt="">
        </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        <div class="collapse justify-content-end navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link font-text {{request()->is('/')?'active':''}}" aria-current="page" href="/">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-text {{request()->is('about-us')?'active':''}}" aria-current="page" href="{{ url('/about-us') }}">About Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-text {{request()->is('privacy-policy')?'active':''}}" aria-current="page" href="{{ url('/privacy-policy') }}">Privacy Policy</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-text" aria-current="page" href="#">Contact Us</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-text {{request()->is('jurisprudence')?'active':''}}" aria-current="page" href="{{ url('/jurisprudence') }}">Jurisprudence</a>
            </li>
            <li class="nav-item">
                <a class="nav-link font-text" role="button" data-bs-toggle="modal" data-bs-target="#registrationModal">Sign Up</a>
            </li>
            <li class="nav-item">
                <button type="button" class="success-button" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    Sign In
                </button>
            </li>
        </ul>
        </div>
    </div>
</nav>