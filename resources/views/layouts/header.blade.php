<header class="header dark-bg">
  <div class="toggle-nav">
        <div class="icon-reorder tooltips" data-original-title="Toggle Navigation" data-placement="bottom"><i class="icon_menu"></i></div>
      </div>
	<a href="{{url('')}}/index" class="logo">REKAM MEDIS <span class="lite">RSJ TAMPAN</span></a> 
  <div class="top-nav notification-row">
    <ul class="nav pull-right top-menu">
      @if(!Auth::user())
      <li>
        <a href="login"><span class="username">Login</span></a>
      </li>
      @else
      <li class="dropdown">
        <a data-toggle="dropdown" class="dropdown-toggle" href="#">
          <span class="username">{{Auth::user()->nama}}</span>
          <b class="caret"></b>
        </a>
        <ul class="dropdown-menu extended logout">
          <div class="log-arrow-up"></div>
          <li class="eborder-top">
            <a href="#"><i class="icon_profile"></i> My Profile</a>
          </li>
          <li>
            <a href="{{ url('/logout') }}"><i class="icon_key_alt"></i> Log Out</a>
          </li>
        </ul>
      </li>
      @endif
    </ul>
  </div>
</header>