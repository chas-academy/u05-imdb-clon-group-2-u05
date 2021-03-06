<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>
<!-- Users, Roles, Permissions -->
<li class="nav-item nav-dropdown">
	<a class="nav-link nav-dropdown-toggle" href="#"><i class="nav-icon la la-users"></i> Authentication</a>
	<ul class="nav-dropdown-items">
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-user"></i> <span>Users</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('role') }}"><i class="nav-icon la la-id-badge"></i> <span>Roles</span></a></li>
	  <li class="nav-item"><a class="nav-link" href="{{ backpack_url('permission') }}"><i class="nav-icon la la-key"></i> <span>Permissions</span></a></li>
	</ul>
</li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('setting') }}'><i class='nav-icon la la-cog'></i> <span>Settings</span></a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('genres') }}'><i class='nav-icon la la-question'></i> Genres</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('movies') }}'><i class='nav-icon la la-question'></i> Movies</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('featured-movies') }}'><i class='nav-icon la la-question'></i> Featured movies</a></li>
<li class='nav-item'><a class='nav-link' href='{{ backpack_url('review') }}'><i class='nav-icon la la-question'></i> Reviews</a></li>