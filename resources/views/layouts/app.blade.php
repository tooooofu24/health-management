<!doctype html>
<html lang="ja" class="h-100">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <meta name="description" content="健康チェックの管理ページです。">

    <meta property="og:url" content="{{ route('top') }}" />
    <meta property="og:title" content="@yield('title')" />
    <meta property="og:description" content="健康チェックの管理ページです。" />
    <meta property="og:image" content="{{ asset('images/icon-square.jpeg') }}" />
    <meta property="og:site_name" content="健康チェックの管理ページ" />
    <meta property="og:locale" content="ja_JP" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- FontAwsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha512-9usAa10IRO0HhonpyAIVpjrylPvoDwiPUiKdWk5t3PyolY1cOd4DSE0Ga+ri4AuTroPR5aQvXU9xC6qOPnzFeg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body class="h-100">
    <div id="app" class="h-100">
        @if(Route::is('admin.*'))
        <admin-navigation-component :admin='@json(Auth::user())' title="@yield('nav_title')" :classes='@json(App\Models\Grade::all())' :clubs='@json(App\Models\Club::all())'>
        </admin-navigation-component>
        @else
        <user-navigation-component :user='@json(Auth::user())' title="@yield('nav_title')"></user-navigation-component>
        @endif
        <main class="pb-4 h-100" style="padding-top: 4rem">
            @yield('content')
            {{-- 承認トースト --}}
            <div class="position-fixed bottom-0 end-0 p-3" style="z-index: 5">
                <div id="toast" class="toast hide w-auto" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-body px-4">承認しました！</div>
                </div>
            </div>
            {{-- フラッシュメッセージ --}}
            @if( session('flash_message') )
            <div class="position-fixed top-0 start-50 translate-middle-x p-3" style="z-index: 5">
                <div id="flash_message" class="toast" role="alert" aria-live="assertive" aria-atomic="true" style="width: 70vw;">
                    <div class="d-flex align-items-center p-2">
                        <div class="toast-body">
                            <span class="fs-6">
                                {{ session('flash_message') }}
                            </span>
                        </div>
                        <button type="button" class="btn-close me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
                    </div>
                </div>
            </div>
            <script>
                window.addEventListener('load', function() {
                    let toast = new bootstrap.Toast(document.getElementById("flash_message"), {
                        autohide: true, // 自動で閉じる
                        delay: 2500 // 2500ms後に閉じる
                    });
                    toast.show()
                });
            </script>
            @endif
        </main>
    </div>
</body>

</html>