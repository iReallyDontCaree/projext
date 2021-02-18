<div class="side-menu">
  <aside class="menu m-t-30 m-l-10">
    <p class="menu-label">
      General
    </p>
    <ul class="menu-list">
      <li><a href="{{route('manage.dashboard')}}">Dashboard</a></li>
    </ul>

    <p class="menu-label">
      Administration
    </p>
    <ul class="menu-list">
      <li><a href="{{route('users.index')}}">Manage Users</a></li>
      <li>
        <a class="has-submenu">Roles &amp; Permissions</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}">Roles</a></li>
          <li><a href="{{route('permissions.index')}}">Permissions</a></li>
        </ul>
      </li>
      
      <li>
        <a class="has-submenu">Prisons</a>
        <ul class="submenu">
          <li><a href="{{route('prisons.create')}}">Register New Imate</a></li>
          <li><a href="{{route('prisons.index')}}">In</a></li>
          <li><a href="{{route('prisons.index')}}">Out</a></li>
        </ul>
      </li>
      <li>
        <a class="has-submenu">Rehabs</a>
        <ul class="submenu">
          <li><a href="{{route('roles.index')}}">In</a></li>
          <li><a href="{{route('permissions.index')}}">Out</a></li>
        </ul>
      </li>
    </ul>
  </aside>
</div>
