<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">首頁</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link{{ (request()->is('posts*'))? " active" : "" }}" aria-current="page" href="{{ route('posts.index') }}">Blog文章</a></li>
                <li class="nav-item">
                @if (Route::has('login'))

                @auth
                        <li class="nav-item"><a class="nav-link{{ (request()->is('posts*'))? " active" : "" }}" aria-current="page" href="{{ route('admin.posts.index') }}">後臺控制</a></li>

                        <li><a class="nav-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();" style="color:white">{{ __('登出') }}</a>
                        </li>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>

                    @else
                            <a href="{{ route('login') }}" class="nav-link">登入</a></li>
                    <li class="nav-item">
                    @if (Route::has('register'))
                        <a href="{{ route('register') }}" class="nav-link">註冊</a></li>
                    @endif
                    @endauth
                    </div>
                @endif
            </ul>
        </div>
    </div>
</nav>
