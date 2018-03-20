<header>
  <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">

    <a class="navbar-brand" href="{{URL::to('/welcome')}}">Frosty's</a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">

      <span class="navbar-toggler-icon"></span>

    </button>

    <div class="collapse navbar-collapse" id="navbarCollapse">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item">
        <a class="nav-link" href="{{URL::to('menu')}}">Menue</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{URL::to('about')}}">About</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="{{URL::to('reviews')}}">Reviews</a>
        </li>
        @guest
          <li><a class="nav-link btn btn-primary" href="{{ route('login') }}">Log in To place a Order!</a></li>
        @else
          <li class="nav-item">
            <a class="nav-link  btn btn-primary" href="{{URL::to('order')}}">Place Order!</a>
          </li>
        @endguest
      </ul>

      <!-- Right Side Of Navbar -->
      <ul class="navbar-nav ml-auto">
        <!-- Authentication Links -->
        @guest
          <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
          <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
        @else
          <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
              {{ Auth::user()->name }} <span class="caret"></span>
            </a>

            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
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
</header>