
<!-- Navbar Section -->
<nav class="navbar">
      <a href="/" class="navbar__logo">IWIS Workshop</a>
      @if($user = Auth::user())
      <div class="navbar__bars"><i class="fa fa-bars"></i></div>
      <div class="navbar__menu ">
        <a href="{{ route('hero') }}" class="navbar__menu--links @if(Request::is('hero')) navbar__active @endif">Home</a>
        <a href="{{ route('lobby') }}" class="navbar__menu--links @if(Request::is('lobby')) navbar__active @endif">Lobby</a>
        <a href="{{ route('school') }}" class="navbar__menu--links @if(Request::is('school')) navbar__active @endif">School</a>
        
        <div class="navbar__logout"><a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        Logout</a></div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>

        <input type="text" id="search" placeholder="search" />
        <a href=""></a><i class="fa fa-search"></i>
      </div>
      @endif
    </nav>