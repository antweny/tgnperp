<nav id="sidebar" class="sidenav">
    <a class="navbar-brand" href="{{url('/')}}" title="Site"><i class="fa fa-globe"></i> Site</a>

    <ul class="list-unstyled components menu pb-5">

        <li class="active">
            <a href="{{route('dashboard')}}">
                <div class="nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard
            </a>
        </li>
        @permissionTo('location_view')
            <li>
                <a href="{{route('locations.index')}}">
                    <div class="nav-link-icon"><i class="fas fa-globe"></i></div>Location
                </a>
            </li>
        @endpermissionTo

        <!-- Government Phase and Terms -->
        @canany(['phase_view','term_view'])
            <li>
                <a href="#gov" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="nav-link-icon"><i class="fa-solid fa-landmark-flag"></i></div> Government
                </a>
                <ul class="collapse list-unstyled submenu" id="gov">
                    @permissionTo('phase_view')
                        <li><a href="{{route('phases.index')}}">Phases</a></li>
                    @endpermissionTo
                    @permissionTo('term_view')
                        <li><a href="{{route('terms.index')}}">Terms</a></li>
                    @endpermissionTo
                </ul>
            </li>
        @endcanany

        <!-- Government Structures -->
        @canany(['branch_view','group_view','type_view'])
            <li>
                <a href="#structure" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="nav-link-icon"><i class="fa-solid fa-network-wired"></i></div> Structure
                </a>
                <ul class="collapse list-unstyled submenu" id="structure">
                    @permissionTo('branch_view')
                        <li><a href="{{route('branches.index')}}">Branches</a></li>
                    @endpermissionTo
                    @permissionTo('group_view')
                        <li><a href="{{route('groups.index')}}">Groups</a></li>
                    @endpermissionTo
                    @permissionTo('type_view')
                        <li><a href="{{route('types.index')}}">Types</a></li>
                    @endpermissionTo
                </ul>
            </li>
        @endcanany

        <!-- Contacts -->
        @canany(['individual_view','organization_view'])
            <li>
                <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="nav-link-icon"><i class="fa-solid fa-list"></i></div> Contact
                </a>
                <ul class="collapse list-unstyled submenu" id="contact">
                    @permissionTo('organization_view')
                        <li><a href="{{route('organizations.index')}}">Organizations</a></li>
                    @endpermissionTo
                    @permissionTo('individual_view')
                        <li><a href="{{route('individuals.index')}}">Individuals</a></li>
                    @endpermissionTo
                </ul>
            </li>
        @endcanany

        <!-- Contacts -->
        @canany(['title_view','position-mode_view','position_view','exit-mode_view'])
            <li>
                <a href="#leadership" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="nav-link-icon"><i class="fa fa-heading"></i></div> Leadership
                </a>
                <ul class="collapse list-unstyled submenu" id="leadership">
                    @permissionTo('title_view')
                        <li><a href="{{route('titles.index')}}">Titles</a></li>
                    @endpermissionTo
                    @permissionTo('position-mode_view')
                        <li><a href="{{route('positionModes.index')}}">Position Modes</a></li>
                    @endpermissionTo
                    @permissionTo('position_view')
                        <li><a href="{{route('positions.index')}}">Positions</a></li>
                    @endpermissionTo
                    @permissionTo('exit-mode_view')
                        <li><a href="{{route('exitModes.index')}}">Exit Modes</a></li>
                    @endpermissionTo
                </ul>
            </li>
        @endcanany



        <!-- Authentication and Authorization -->
        @canany(['user_view','role_view','permission_name'])
        <li>
            <a href="#access" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                <div class="nav-link-icon"><i class="fa fa-user-shield"></i></div> User Auth
            </a>
            <ul class="collapse list-unstyled submenu" id="access">
                @permissionTo('user_view')
                    <li><a href="{{route('users.index')}}">Users</a></li>
                @endpermissionTo
                @permissionTo('permission_view')
                    <li><a href="{{route('permissions.index')}}">Permissions</a></li>
                @endpermissionTo
                @permissionTo('role_view')
                    <li><a href="{{route('roles.index')}}">Roles</a></li>
                @endpermissionTo
            </ul>
        </li>
        @endcanany
    </ul>

</nav>
