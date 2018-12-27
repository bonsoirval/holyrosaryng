<header id="fh5co-header-section" class="sticky-banner">
  <div class="container">
    <div class="nav-header">
      <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark"><i></i></a>
      <h1 id="fh5co-logo"><a href="{{ route('home') }}"><img src="images/logo.jpeg"></i>Travel</a></h1>
      @if($page->toHtml() == 'home')
          <!-- START #fh5co-menu-wrap -->
        <nav id="fh5co-menu-wrap" role="navigation">
          <ul class="sf-menu" id="fh5co-primary-menu">
            <li class="active"><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('car') }}">Buses</a></li>
            <li><a href="{{ route('flight') }}">Flights</a></li>
            <li><a href="{{ route('hotel') }}">Hotel</a></li>
            <li><a href="{{ route('medicals') }}">Medicals</a></li>
            <li><a href="{{ route('travelometer') }}">Travelometer</a></li>
            <li><a href="{{ route('vacations') }}">Travelopedia</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
          </ul>
        </nav>
        @elseif($page->toHtml() == 'car')
        <nav id="fh5co-menu-wrap" role="navigation">
          <ul class="sf-menu" id="fh5co-primary-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li class="active"><a href="{{ route('car') }}">Buses</a></li>
            <li><a href="{{ route('flight') }}">Flights</a></li>
            <li><a href="{{ route('hotel') }}">Hotel</a></li>
            <li><a href="{{ route('medicals') }}">Medicals</a></li>
            <li><a href="{{ route('travelometer') }}">Travelometer</a></li>
            <li><a href="{{ route('vacations') }}">Travelopedia</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
          </ul>
        </nav>
        @elseif($page->toHtml() == 'flight')
        <nav id="fh5co-menu-wrap" role="navigation">
          <ul class="sf-menu" id="fh5co-primary-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('car') }}">Buses</a></li>
            <li class="active"><a href="{{ route('flight') }}">Flights</a></li>
            <li><a href="{{ route('hotel') }}">Hotel</a></li>
            <li><a href="{{ route('medicals') }}">Medicals</a></li>
            <li><a href="{{ route('travelometer') }}">Travelometer</a></li>
            <li><a href="{{ route('vacations') }}">Travelopedia</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
          </ul>
        </nav>
        @elseif($page->toHtml() == 'hotel')
        <nav id="fh5co-menu-wrap" role="navigation">
          <ul class="sf-menu" id="fh5co-primary-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('car') }}">Buses</a></li>
            <li><a href="{{ route('flight') }}">Flights</a></li>
            <li class="active"><a href="{{ route('hotel') }}">Hotel</a></li>
            <li><a href="{{ route('medicals') }}">Medicals</a></li>
            <li><a href="{{ route('travelometer') }}">Travelometer</a></li>
            <li><a href="{{ route('vacations') }}">Travelopedia</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
          </ul>
        </nav>
        @elseif($page->toHtml() == 'medicals')
        <nav id="fh5co-menu-wrap" role="navigation">
          <ul class="sf-menu" id="fh5co-primary-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('car') }}">Buses</a></li>
            <li><a href="{{ route('flight') }}">Flights</a></li>
            <li><a href="{{ route('hotel') }}">Hotel</a></li>
            <li class="active"><a href="{{ route('medicals') }}">Medicals</a></li>
            <li><a href="{{ route('travelometer') }}">Travelometer</a></li>
            <li><a href="{{ route('vacations') }}">Travelopedia</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
          </ul>
        </nav>
        @elseif($page->toHtml() == 'travelometer')
        <nav id="fh5co-menu-wrap" role="navigation">
          <ul class="sf-menu" id="fh5co-primary-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('car') }}">Buses</a></li>
            <li><a href="{{ route('flight') }}">Flights</a></li>
            <li><a href="{{ route('hotel') }}">Hotel</a></li>
            <li><a href="{{ route('medicals') }}">Medicals</a></li>
            <li class="active"><a href="{{ route('travelometer') }}">Travelometer</a></li>
            <li><a href="{{ route('vacations') }}">Travelopedia</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
          </ul>
        </nav>
        @elseif($page->toHtml() == 'vacations')
        <nav id="fh5co-menu-wrap" role="navigation">
          <ul class="sf-menu" id="fh5co-primary-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('car') }}">Buses</a></li>
            <li><a href="{{ route('flight') }}">Flights</a></li>
            <li><a href="{{ route('hotel') }}">Hotel</a></li>
            <li><a href="{{ route('medicals') }}">Medicals</a></li>
            <li><a href="{{ route('travelometer') }}">Travelometer</a></li>
            <li class="active"><a href="{{ route('vacations') }}">Travelopedia</a></li>
            <li><a href="{{ route('login') }}">Login</a></li>
          </ul>
        </nav>
        @elseif($page->toHtml() == 'login')
        <nav id="fh5co-menu-wrap" role="navigation">
          <ul class="sf-menu" id="fh5co-primary-menu">
            <li><a href="{{ route('home') }}">Home</a></li>
            <li><a href="{{ route('car') }}">Buses</a></li>
            <li><a href="{{ route('flight') }}">Flights</a></li>
            <li><a href="{{ route('hotel') }}">Hotel</a></li>
            <li><a href="{{ route('medicals') }}">Medicals</a></li>
            <li><a href="{{ route('travelometer') }}">Travelometer</a></li>
            <li><a href="{{ route('vacations') }}">Travelopedia</a></li>
            <li class="active"><a href="{{ route('login') }}">Login</a></li>
          </ul>
        </nav>
        @endif
    </div>
  </div>
</header>
