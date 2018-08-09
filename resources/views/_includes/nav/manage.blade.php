<div class="side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      GENERAL
    </p>
    <ul class="menu-list">
      <li>
        <a href="{{route('manage.dashboard')}}" class="{{Nav::isRoute('manage.dashboard')}}">
          Dashboard
        </a>
      </li>
    </ul>

    <p class="menu-label">
      ADMINISTRATION
    </p>
    <ul class="menu-list">
      <li>
        <a href="{{route('users.index')}}" class="{{Nav::isResource('users')}}">
          Manage Users
        </a>
      </li>
      <li>
        <a class="has-submenu {{Nav::hasSegment(['roles', 'permissions'], 2)}}">
          Roles &amp; Permissions
        </a>
        <ul class="submenu">
          <li>
            <a href="{{route('roles.index')}}" class="{{Nav::isResource('roles')}}">
              Roles
            </a>
          </li>
          <li>
            <a href="{{route('permissions.index')}}" class="{{Nav::isResource('permissions')}}">
              Permissions
            </a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#" class="has-submenu">
          Item
        </a>
        <ul class="submenu">
          <li>
            <a href="#">item</a>
          </li>
          <li>
            <a href="#}">
              item
            </a>
          </li>
        </ul>
      </li>

      <li>
        <a href="#" class="has-submenu">
          Iem 2
        </a>
        <ul class="submenu">
          <li>
            <a href="#">item</a>
          </li>
          <li>
            <a href="#}">
              item
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
