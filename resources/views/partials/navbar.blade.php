<div class="site-navbar-wrap js-site-navbar bg-white">

  <div class="container">
    <div class="site-navbar bg-light">
      <div class="py-1">
        <div class="row align-items-center">
          <div class="col-2">
            <h2 class="mb-0 site-logo"><a href="{{ route('Index') }}">De Luna</a></h2>
          </div>
          <div class="col-10">
            <nav class="site-navigation text-right" role="navigation">
              <div class="container">

                <ul class="site-menu js-clone-nav d-none d-lg-block">
                  <li class="active">
                    <a href="{{ route('Index') }}">Home</a>
                  </li>
                  <li><a href="/rooms">Rooms</a></li>
                  <li><a href="/about">About</a></li>
                  <li><a href="/contact">Contact</a></li>
                  @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @if (Route::has('register'))
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @endif
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </div>
                        </li>
                    @endguest
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>