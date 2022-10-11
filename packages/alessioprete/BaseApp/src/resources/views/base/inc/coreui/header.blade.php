<header class="header header-sticky mb-4">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <i class="icon-menu1"></i>
        </button><a class="header-brand d-md-none" href="#">
            <strong>AP</strong>Back</a>
        <ul class="header-nav d-none d-md-flex">
{{--            <li class="nav-item"><a class="nav-link" href="#">Menu1</a></li>--}}
{{--            <li class="nav-item"><a class="nav-link" href="#">Menu2</a></li>--}}
{{--            <li class="nav-item"><a class="nav-link" href="#">Menu3</a></li>--}}
        </ul>
        <ul class="header-nav ms-auto">
        </ul>
        <ul class="header-nav ms-3">
            <li class="nav-item dropdown">
                <a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md">
                        <img class="avatar-img" src="{{asset('packages/alessioprete/base/img/avatar/astronaut.png')}}" alt="">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold">
                            Account
                        </div>
                    </div>
                    <a class="dropdown-item" href="#">
                        <i class="icon me-2 icon-bell1"></i> Updates
                        <span class="badge badge-sm bg-info ms-2">0</span>
                    </a>
                    <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold">Settings</div>
                    </div><a class="dropdown-item" href="#">
                        <i class="icon me-2 icon-user1"></i> Profile</a><a class="dropdown-item" href="#">
                        <i class="icon me-2 icon-settings"></i> Impostazioni</a><a class="dropdown-item" href="#">
                    <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="{{route('logout')}}">
                            <i class="icon me-2 icon-log-out"></i> Logout</a>
                </div>
            </li>
        </ul>
    </div>
    <div class="header-divider"></div>
    <div class="container-fluid">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb my-0 ms-2">
                <li class="breadcrumb-item">
                    <!-- if breadcrumb is single--><span>Home</span>
                </li>
                <li class="breadcrumb-item active"><span>Breadcumb... poi lo sistemo</span></li>
            </ol>
        </nav>
    </div>
</header>
