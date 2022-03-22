<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Laravel') }}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('articles.index') }}">Статьи</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Статусы</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Метки</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @if (Route::has('login'))
                    <div class="">
                        @auth
                            <a href="{{ route('admin.index') }}" class="text-muted">Админка</a>
                            <a href="{{ route('admin.articles') }}" class="text-muted">Статьи</a>
                            <a href="{{ url('/logout') }}" class="text-muted" data-method="post" rel="nofollow">Выйти</a>
                        @else
                            <a href="{{ route('login') }}" class="text-muted">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ms-4 text-muted">Register</a>
                            @endif
                        @endif
                    </div>
                @endif
            </ul>
        </ul>
            

        </div>
    </div>
</nav>
