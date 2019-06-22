<header class="masthead" style="background-image: url('@yield('img')')">
    <div class="overlay"></div>
    <div class="container">
        <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            <div class="site-heading">
            <h1>@yield('title')</h1>
            <span class="subheading">@yield('subTitle')</span>
            @if (Request::is('articles/*'))
                <span class="meta">
                    Posté par
                    <a href="#">@yield('author')</a>
                    le @yield('date')
                </span>
            @endif
            </div>
        </div>
        </div>
    </div>
</header>
