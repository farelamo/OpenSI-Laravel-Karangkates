<div class="page-header">
    <nav class="navbar navbar-expand container">
        <div class="logo-box"><a href="/dashboard" class="logo-text">SmartService</a></div>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <ul class="navbar-nav">
            <li class="nav-item small-screens-sidebar-link">
                <a href="#" class="nav-link"><i class="material-icons-outlined">menu</i></a>
            </li>
            <li class="nav-item nav-profile dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="{{ Auth::user()->picture ? asset('/storage/profile/' . Auth::user()->picture) : asset('/images/profile/avatar-1.png') }}" alt="profile image">
                    <span>{{ Auth::user()->fname }} {{ Auth::user()->lname }}</span><i class="material-icons dropdown-icon">keyboard_arrow_down</i>
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="/profile">Profile</a>
                    <div class="dropdown-divider"></div>
                    <a href="/logout" class="dropdown-item has-icon text-danger" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                            <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                            Logout
                    </a>
                    <form id="logout-form" action="/logout" method="POST" style="display: none;">
                        @csrf
                    </form>
                </div>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link" id="dark-theme-toggle"><i class="material-icons-outlined">brightness_2</i><i class="material-icons">brightness_2</i></a>
            </li>
        </ul>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav d-none">
            </ul>
        </div>
        <div class="navbar-search">
            <form>
                <div class="form-group">
                    <input type="text" name="search" id="nav-search" placeholder="Search...">
                </div>
            </form>
        </div>
    </nav>
</div>