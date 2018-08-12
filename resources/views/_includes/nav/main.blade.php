<nav class="navbar is-transparent has-shadow">
  <div class="container">
    <div class="navbar-brand">
      <a class="navbar-item" href="{{route('home')}}">
        <img src="{{asset('images/logo2.png')}}" alt="logo" width="112" height="28">
      </a>
      @if(Request::segment(1) == 'manage')
        <!--side-menu-->
        <a class="navbar-item is-hidden-desktop" id="admin-slideout-button">
          <span><i class="fa fa-arrow-circle-o-right"></i></span>
        </a>
      @endif
      <div class="navbar-burger burger" data-target="navbarExampleTransparentExample">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <div id="main-navbar" class="navbar-menu">
      <div class="navbar-start">
        <a class="navbar-item is-tab" href="#">
          Learn
        </a>
        <a class="navbar-item is-tab" href="#">
          Discuss
        </a>
        <a class="navbar-item is-tab" href="#">
          Share
        </a>
      </div>

      <div class="navbar-end">
        @if (Auth::guest())
          <div class="navbar-item">
          <div class="field is-grouped">
            <p class="control">
              <a class="button" href="{{route('login')}}">
                  Login
              </a>
            </p>
            <p class="control">
              <a class="button is-primary" href="{{route('register')}}">
                Join
              </a>
            </p>
          </div>
        </div>
        @else
          <div class="navbar-item has-dropdown is-hoverable">
            <a class="navbar-link" href="#">
              Hey {{ Auth::user()->name }}
            </a>
            <div class="navbar-dropdown is-boxed">
              <a class="navbar-item is-tab" href="#">
                <span><i class="fa fa-fw m-r-5 fa-user-circle-o"></i></span>Profile
              </a>
              <a class="navbar-item is-tab" href="#">
                <span><i class="fa fa-fw m-r-5 fa-bell"></i></span>Notifications
              </a>
              <a class="navbar-item is-tab" href="{{route('manage.dashboard')}}">
                <span><i class="fa fa-fw m-r-5 fa-cog"></i></span>Manage
              </a>
              <hr class="navbar-divider">
              <a href="{{route('logout')}}" onclick="event.preventDefault();
                     document.getElementById('logout-form').submit();" class="navbar-item is-tab">
                <span><i class="fa fa-fw m-r-5 fa-sign-out"></i></span>Logout
              </a>
              @include('_includes.forms.logout')
            </div>
          </div>
        </div>
        @endif
      </div>

    </div>
  </div>
</nav>
