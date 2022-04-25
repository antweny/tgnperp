<nav class="topNav navbar navbar-expand bg-primary">

    <div class="container-fluid">
        <button id="sidebarCollapse" class="btn border-1 order-lg-0"> <i class="fas fa-bars text-white"></i> </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="nav navbar-nav ms-auto">
                @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" id="userDropdown" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" title="My Account">
                            <i class="fas fa-user fa-fw ml-1"></i>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="userDropdown">
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;"> @csrf</form>
                            <a class="dropdown-item logout" href="#" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                <i class="fa fa-power-off"></i> Logout
                            </a>
                        </div>
                    </li>
                @endauth
            </ul>
        </div>

    </div>

</nav>
