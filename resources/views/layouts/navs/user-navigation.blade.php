<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
    <div class="container-xl">
        <span class="navbar-brand mb-0 fs-6 text-muted">@yield('nav_title')</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="toggle">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse me-4" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('form.show.1')) active @endif" href="{{ route('form.show.1') }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="回答フォーム"><i class="fa-solid fa-file-circle-plus fa-lg"></i></a>
                </li>
                @auth
                <li class="nav-item">
                    <button class="nav-link btn" type="submit" form="logout-form" data-bs-toggle="tooltip" data-bs-placement="bottom" title="ログアウト">
                        <i class="fa-solid fa-right-to-bracket fa-xl"></i>
                    </button>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none" onsubmit="return confirm('ログアウトしますか？')">
                        @csrf
                    </form>
                </li>
                @endauth
            </ul>
        </div>
    </div>
</nav>