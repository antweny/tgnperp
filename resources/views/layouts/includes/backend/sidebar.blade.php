<nav id="sidebar" class="sidenav">

    <a class="navbar-brand" href="{{url('/')}}" title="Site"><i class="fa fa-globe"></i> Site</a>

    <ul class="list-unstyled components menu pb-5">

        <li class="active">
            <a href="{{route('dashboard')}}">
                <div class="nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>Dashboard
            </a>
        </li>

        <!-- Contacts -->
        @canany(['individual_view','organization_view'])
            <li>
                <a href="#hra" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="nav-link-icon"><i class="fa-solid fa-people-roof"></i></div> HRA
                </a>
                <ul class="collapse list-unstyled submenu" id="hra">
                    @permissionTo('department_view')
                    <li><a href="{{route('organizations.index')}}">Department</a></li>
                    @endpermissionTo
                    @permissionTo('designation_view')
                    <li><a href="{{route('individuals.index')}}">Designations</a></li>
                    @endpermissionTo
                    @permissionTo('employee_view')
                    <li><a href="{{route('individuals.index')}}">Employees</a></li>
                    @endpermissionTo
                </ul>
            </li>
        @endcanany

        @permissionTo('location_view')
            <li>
                <a href="{{route('locations.index')}}">
                    <div class="nav-link-icon"><i class="fas fa-globe"></i></div>Location
                </a>
            </li>
        @endpermissionTo

        <!-- Contacts -->
        @canany(['individual_view','organization_view'])
            <li>
                <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">
                    <div class="nav-link-icon"><i class="fa-solid fa-address-book"></i></div> Contact
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
