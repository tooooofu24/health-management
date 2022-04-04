<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm fixed-top">
    <div class="container-xl">
        <span class="navbar-brand mb-0 fs-6 text-muted">@yield('nav_title')</span>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="toggle">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse pe-5" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                @guest
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('login')) active @endif" href="{{ route('login') }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="生徒・保護者様ログイン"><i class="fa-solid fa-user-group fa-lg"></i>ログイン</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('admin.login')) active @endif" href="{{ route('admin.login') }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="教職員ログイン"><i class="fa-solid fa-user-graduate fa-lg"></i>ログイン</a>
                </li>
                @endguest
                <li class="nav-item">
                    <a class="nav-link @if(Route::is('form')) active @endif" href="{{ route('form') }}" data-bs-toggle="tooltip" data-bs-placement="bottom" title="回答フォーム"><i class="fa-solid fa-file-circle-plus fa-lg"></i>フォーム</a>
                </li>
            </ul>
        </div>
    </div>
</nav>