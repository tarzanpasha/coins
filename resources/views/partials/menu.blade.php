<section class="menu">
    <div class="container">
        <nav class="navbar" role="navigation" aria-label="main navigation">
            <div class="overlay is-hidden"></div>
            <div class="navbar-brand">
                <a class="navbar-item" href="/">
                    <img class="logo" src="/assets/img/logo-anniversary.png">
                </a>


            </div>

            <div class="navbar-menu main-menu">
                <div class="navbar-start">
                    <div class="field has-search">
                        <div class="control has-icons-left">
                            <input class="input search" type="text" placeholder="Search coins">
                            <span class="icon is-small is-left">
            <img src="/assets/img/search.svg">
        </span>
                        </div>
                        <div class="results is-hidden">
                        </div>
                    </div>
                </div>

                <div class="navbar-end is-hidden-mobile">
                    <div class="buttons">
                        <a class="button is-primary" href="/submit">
                            <strong> Submit Coin</strong>
                        </a>
                    </div>
                </div>

                <a class="nav-burger is-hidden-mobile">
                    <img src="/assets/img/burger.svg">
                </a>

                <div class="nav-mobile">
                    <a class="nav-search" href="#">
                        <svg width="25" height="25" viewBox="0 0 25 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                d="M23.5002 23.4999L18.2665 18.2569M21.1668 11.2499C21.1668 13.88 20.122 16.4023 18.2623 18.2621C16.4026 20.1218 13.8802 21.1666 11.2502 21.1666C8.6201 21.1666 6.09776 20.1218 4.23802 18.2621C2.37828 16.4023 1.3335 13.88 1.3335 11.2499C1.3335 8.61985 2.37828 6.09751 4.23802 4.23778C6.09776 2.37804 8.6201 1.33325 11.2502 1.33325C13.8802 1.33325 16.4026 2.37804 18.2623 4.23778C20.122 6.09751 21.1668 8.61985 21.1668 11.2499Z"
                                stroke-width="1.5" stroke-linecap="round" />
                        </svg>
                    </a>
                    <a class="nav-burger">
                        <img src="/assets/img/burger.svg">
                    </a>
                </div>
            </div>
        </nav>
    </div>
</section>
<section class="mobile-menu">
    <img class="close" src="/assets/img/close-icon.svg">
    <div class="body">
        <div class="nav-label">Account</div>
        <ul class="nav">
            @if(Auth::user())
                <li>
                    <a href="/watchlist"><img src="/assets/img/watchlist.svg">Watchlist</a>
                </li>
                <li>
                    <a href="{{ route('logout') }}">
                        <i class="fas fa-sign-in-alt"></i>logout
                    </a>
                </li>
            @else
                <li>
                    <a href="/login">
                        <i class="fas fa-sign-in-alt"></i>Login
                    </a>
                </li>
                <li>
                    <a href="/register">
                        <i class="fas fa-user-plus"></i>Register
                    </a>
                </li>
            @endif

        </ul>

        <div class="nav-label">CoinSniper</div>
        <ul class="nav">
            <li>
                <a href="/submit"><img src="/assets/img/submit.svg">Submit coin</a>
            </li>
            <li>
                <a href="/update"><img src="/assets/img/contact.svg">Update coin</a>
            </li>
        </ul>



    </div>
</section>
<section class="mobile-search">
    <div class="container">
        <div class="field has-search">
            <div class="control has-icons-left">
                <input class="input search" type="text" placeholder="Search coins">
                <span class="icon is-small is-left">
            <img src="/assets/img/search.svg">
        </span>
            </div>
            <div class="results is-hidden">
            </div>
        </div>
    </div>
</section>
