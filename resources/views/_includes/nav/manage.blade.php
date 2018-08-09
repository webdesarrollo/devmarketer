<div class="side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      GENERAL
    </p>
    <ul class="menu-list">
      <li><a href="">Dashboard</a></li>
    </ul>

    <p class="menu-label">
      ADMINISTRATION
    </p>
    <ul class="menu-list">
      <li><a href="{{route('users.index')}}">Manage Users</a></li>
      <li>
        <a href="#">
          Roles &amp; Permissions
        </a>
        <ul>
          <li>
            <a href="{{route('roles.index')}}">Roles</a>
          </li>
          <li>
            <a href="{{route('permissions.index')}}">
              Permissions
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
