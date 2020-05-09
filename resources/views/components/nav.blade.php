 <nav class="navbar navbar-dark bg-dark nav_bar">
    <a class="navbar-brand my-0 mr-md-auto font-weight-normal nav_brand" href="{{ url('/') }}">John's kitchen</a>
    @guest
        <a class="btn btn-outline-primary" href="{{ route('login') }}">Логин</a>
        @if (Route::has('register'))
            <a class="btn btn-outline-primary ml-1" href="{{ route('register') }}">Регистрация</a>
        @endif
    @else
        <a class="btn btn-primary nav_button" href="{{route('dish.create')}}">Добавить рецепт</a>
{{--        <a href="#" class="btn btn-primary my-2 nav_button" --}}{{--href="{{ route('dish.user') }}"--}}{{-->Мои рецепты</a>--}}
        <img src="https://mir-s3-cdn-cf.behance.net/user/276/f259d84043173.587c62698029b.png" style="width: 40px;">
        <div class="nav-item dropdown nav__button" style="margin-left: 0;">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown"
               aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                    {{ __('Выйти') }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </div>
    @endguest
    </nav>

