<!-- Responsive navbar-->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="{{ route('home.index') }}">首頁</a>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                <li class="nav-item"><a class="nav-link{{ (request()->is('posts*'))? " active" : "" }}" aria-current="page" href="{{ route('posts.index') }}">Blog</a></li>
                <li class="nav-item"><a class="nav-link{{ (request()->is('about*'))? " active" : "" }}" href="#!">About</a></li>
                <li class="nav-item"><a class="nav-link{{ (request()->is('contact*'))? " active" : "" }}" href="#!">Contact</a></li>
            </ul>
        </div>
    </div>
</nav>
