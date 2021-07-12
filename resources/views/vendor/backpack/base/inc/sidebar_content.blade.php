<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<!-- Users, Roles, Permissions -->
@canany(['edit_users', 'edit_roles'])
<li class="nav-title">Administration</li>
<li class="nav-item nav-dropdown">
    <a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
    <ul class="nav-dropdown-items">
      @can('edit_users')
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
      @endcan
      @can('edit_roles')
        <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
      @endcan
    </ul>
</li>
@endcan
@canany(['edit_radcheck', 'edit_radreply', 'edit_nas'])
<li class="nav-title">Management</li>
  @can('edit_radcheck')
  <li class='nav-item'><a class='nav-link' href='{{ backpack_url('radcheck') }}'><i class="nav-icon las la-list-alt"></i> Radcheck</a></li>
  @endcan
  @can('edit_radreply')
  <li class='nav-item'><a class='nav-link' href='{{ backpack_url('radreply') }}'><i class="nav-icon las la-reply"></i> Radreply</a></li>
  @endcan
  @can('edit_nas')
  <li class='nav-item'><a class='nav-link' href='{{ backpack_url('nas') }}'><i class="nav-icon las la-server"></i> Nas</a></li>
  @endcan
@endcan

@canany(['view_radacct', 'view_radpostauth'])
<li class="nav-title">Logs</li>
  @can('view_radacct')
  <li class='nav-item'><a class='nav-link' href='{{ backpack_url('radacct') }}'><i class="nav-icon las la-file-alt"></i> Radacct</a></li>
  @endcan
  @can('view_radpostauth')
  <li class='nav-item'><a class='nav-link' href='{{ backpack_url('radpostauth') }}'><i class="nav-icon las la-file-alt"></i> Radpostauth</a></li>
  @endcan
@endcan
