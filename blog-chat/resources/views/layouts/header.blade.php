<!-- ======= Header ======= -->
<header id="header" class="fixed-top header-transparent">
    <div class="container d-flex align-items-center">

        <div class="logo mr-auto">
            <h1 class="text-light"><a href="index.html"><span>global connection</span></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            {{--            <a href="index.html"><img src="{{asset('assets/img/logo.png')}}" alt="" class="img-fluid"></a>--}}
        </div>

        <nav class="nav-menu d-none d-lg-block">
            <ul>
                <li class="active"><a href="index.html">Home</a></li>
                <li><a href="#about">Về chúng tôi</a></li>
                <li><a href="#portfolio">Danh sách đề cử</a></li>
                <li class="drop-down"><a href="">Chủ đề</a>
                    <ul>
                        <li><a href="#">Gia đình</a></li>
                        <li><a href="#">Tình yêu</a></li>
                        <li><a href="#">Nấu ăn</a></li>
                        <li class="drop-down"><a href="#">Âm nhạc</a>
                            <ul>
                                <li><a href="#">Nhạc trẻ</a></li>
                                <li><a href="#">Nhạc trữ tình</a></li>
                                <li><a href="#">Rap</a></li>
                                <li><a href="#">Nhạc hoa</a></li>
                            </ul>
                        </li>
                        <li class="drop-down"><a href="#">Thể thao</a>
                            <ul>
                                <li><a href="#">Bóng đá</a></li>
                                <li><a href="#">Bóng chuyền</a></li>
                                <li><a href="#">Cầu lông</a></li>
                                <li><a href="#">Bóng rổ</a></li>
                            </ul>
                        </li>
                        <li><a href="#">Mua sắm</a></li>
                        <li><a href="#">Anime</a></li>
                        <li><a href="#">Truyện tranh</a></li>
                    </ul>
                </li>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav mr-auto">

                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif

                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </ul>
        </nav><!-- .nav-menu -->

    </div>
</header><!-- End Header -->

