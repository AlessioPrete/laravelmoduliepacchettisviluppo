<!DOCTYPE html>

<html lang="{{ app()->getLocale() }}">

<head>
  @include(alessioprete_view('inc.head'))

</head>
<body>
<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <svg class="sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="init"><div class="simplebar-wrapper" style="margin: 0px;"><div class="simplebar-height-auto-observer-wrapper"><div class="simplebar-height-auto-observer"></div></div><div class="simplebar-mask"><div class="simplebar-offset" style="right: 0px; bottom: 0px;"><div class="simplebar-content-wrapper" style="height: 100%; overflow: hidden scroll;"><div class="simplebar-content" style="padding: 0px;">
                            <li class="nav-item"><a class="nav-link" href="index.html">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-speedometer"></use>
                                    </svg> Dashboard<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
                            <li class="nav-title">Theme</li>
                            <li class="nav-item"><a class="nav-link" href="colors.html">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-drop"></use>
                                    </svg> Colors</a></li>
                            <li class="nav-item"><a class="nav-link" href="typography.html">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-pencil"></use>
                                    </svg> Typography</a></li>
                            <li class="nav-title">Components</li>
                            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-puzzle"></use>
                                    </svg> Base</a>
                                <ul class="nav-group-items">
                                    <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"></span> Accordion</a></li>
                                    <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"></span> Breadcrumb</a></li>
                                    <li class="nav-item"><a class="nav-link" href="base/cards.html"><span class="nav-icon"></span> Cards</a></li>
                                    <li class="nav-item"><a class="nav-link" href="base/carousel.html"><span class="nav-icon"></span> Carousel</a></li>
                                    <li class="nav-item"><a class="nav-link" href="base/collapse.html"><span class="nav-icon"></span> Collapse</a></li>
                                    <li class="nav-item"><a class="nav-link" href="base/list-group.html"><span class="nav-icon"></span> List group</a></li>
                                    <li class="nav-item"><a class="nav-link" href="base/navs.html"><span class="nav-icon"></span> Navs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="base/pagination.html"><span class="nav-icon"></span> Pagination</a></li>
                                    <li class="nav-item"><a class="nav-link" href="base/popovers.html"><span class="nav-icon"></span> Popovers</a></li>
                                    <li class="nav-item"><a class="nav-link" href="base/progress.html"><span class="nav-icon"></span> Progress</a></li>
                                    <li class="nav-item"><a class="nav-link" href="base/scrollspy.html"><span class="nav-icon"></span> Scrollspy</a></li>
                                    <li class="nav-item"><a class="nav-link" href="base/spinners.html"><span class="nav-icon"></span> Spinners</a></li>
                                    <li class="nav-item"><a class="nav-link" href="base/tables.html"><span class="nav-icon"></span> Tables</a></li>
                                    <li class="nav-item"><a class="nav-link" href="base/tabs.html"><span class="nav-icon"></span> Tabs</a></li>
                                    <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><span class="nav-icon"></span> Tooltips</a></li>
                                </ul>
                            </li>
                            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cursor"></use>
                                    </svg> Buttons</a>
                                <ul class="nav-group-items">
                                    <li class="nav-item"><a class="nav-link" href="buttons/buttons.html"><span class="nav-icon"></span> Buttons</a></li>
                                    <li class="nav-item"><a class="nav-link" href="buttons/button-group.html"><span class="nav-icon"></span> Buttons Group</a></li>
                                    <li class="nav-item"><a class="nav-link" href="buttons/dropdowns.html"><span class="nav-icon"></span> Dropdowns</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="charts.html">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-chart-pie"></use>
                                    </svg> Charts</a></li>
                            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-notes"></use>
                                    </svg> Forms</a>
                                <ul class="nav-group-items">
                                    <li class="nav-item"><a class="nav-link" href="forms/form-control.html"> Form Control</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/select.html"> Select</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/checks-radios.html"> Checks and radios</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/range.html"> Range</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/input-group.html"> Input group</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/floating-labels.html"> Floating labels</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/layout.html"> Layout</a></li>
                                    <li class="nav-item"><a class="nav-link" href="forms/validation.html"> Validation</a></li>
                                </ul>
                            </li>
                            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                                    </svg> Icons</a>
                                <ul class="nav-group-items">
                                    <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-free.html"> CoreUI Icons<span class="badge badge-sm bg-success ms-auto">Free</span></a></li>
                                    <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-brand.html"> CoreUI Icons - Brand</a></li>
                                    <li class="nav-item"><a class="nav-link" href="icons/coreui-icons-flag.html"> CoreUI Icons - Flag</a></li>
                                </ul>
                            </li>
                            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                                    </svg> Notifications</a>
                                <ul class="nav-group-items">
                                    <li class="nav-item"><a class="nav-link" href="notifications/alerts.html"><span class="nav-icon"></span> Alerts</a></li>
                                    <li class="nav-item"><a class="nav-link" href="notifications/badge.html"><span class="nav-icon"></span> Badge</a></li>
                                    <li class="nav-item"><a class="nav-link" href="notifications/modals.html"><span class="nav-icon"></span> Modals</a></li>
                                    <li class="nav-item"><a class="nav-link" href="notifications/toasts.html"><span class="nav-icon"></span> Toasts</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="widgets.html">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-calculator"></use>
                                    </svg> Widgets<span class="badge badge-sm bg-info ms-auto">NEW</span></a></li>
                            <li class="nav-divider"></li>
                            <li class="nav-title">Extras</li>
                            <li class="nav-group"><a class="nav-link nav-group-toggle" href="#">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-star"></use>
                                    </svg> Pages</a>
                                <ul class="nav-group-items">
                                    <li class="nav-item"><a class="nav-link" href="login.html" target="_top">
                                            <svg class="nav-icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                            </svg> Login</a></li>
                                    <li class="nav-item"><a class="nav-link" href="register.html" target="_top">
                                            <svg class="nav-icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                                            </svg> Register</a></li>
                                    <li class="nav-item"><a class="nav-link" href="404.html" target="_top">
                                            <svg class="nav-icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                                            </svg> Error 404</a></li>
                                    <li class="nav-item"><a class="nav-link" href="500.html" target="_top">
                                            <svg class="nav-icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bug"></use>
                                            </svg> Error 500</a></li>
                                </ul>
                            </li>
                            <li class="nav-item mt-auto"><a class="nav-link" href="docs.html">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-description"></use>
                                    </svg> Docs</a></li>
                            <li class="nav-item"><a class="nav-link nav-link-danger" href="https://coreui.io/pro/" target="_top">
                                    <svg class="nav-icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-layers"></use>
                                    </svg> Try CoreUI
                                    <div class="fw-semibold">PRO</div>
                                </a></li>
                        </div></div></div></div><div class="simplebar-placeholder" style="width: auto; height: 841px;"></div></div><div class="simplebar-track simplebar-horizontal" style="visibility: hidden;"><div class="simplebar-scrollbar" style="width: 0px; display: none;"></div></div><div class="simplebar-track simplebar-vertical" style="visibility: visible;"><div class="simplebar-scrollbar" style="height: 819px; transform: translate3d(0px, 0px, 0px); display: block;"></div></div></ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    <header class="header header-sticky mb-4">
        <div class="container-fluid">
            <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
                <svg class="icon icon-lg">
                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-menu"></use>
                </svg>
            </button><a class="header-brand d-md-none" href="#">
                <svg width="118" height="46" alt="CoreUI Logo">
                    <use xlink:href="assets/brand/coreui.svg#full"></use>
                </svg></a>
            <ul class="header-nav d-none d-md-flex">
                <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Users</a></li>
                <li class="nav-item"><a class="nav-link" href="#">Settings</a></li>
            </ul>
            <ul class="header-nav ms-auto">
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-list-rich"></use>
                        </svg></a></li>
                <li class="nav-item"><a class="nav-link" href="#">
                        <svg class="icon icon-lg">
                            <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                        </svg></a></li>
            </ul>
            <ul class="header-nav ms-3">
                <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                        <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/8.jpg" alt="user@email.com"></div>
                    </a>
                    <div class="dropdown-menu dropdown-menu-end pt-0">
                        <div class="dropdown-header bg-light py-2">
                            <div class="fw-semibold">Account</div>
                        </div><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-bell"></use>
                            </svg> Updates<span class="badge badge-sm bg-info ms-2">42</span></a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-envelope-open"></use>
                            </svg> Messages<span class="badge badge-sm bg-success ms-2">42</span></a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-task"></use>
                            </svg> Tasks<span class="badge badge-sm bg-danger ms-2">42</span></a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-comment-square"></use>
                            </svg> Comments<span class="badge badge-sm bg-warning ms-2">42</span></a>
                        <div class="dropdown-header bg-light py-2">
                            <div class="fw-semibold">Settings</div>
                        </div><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                            </svg> Profile</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-settings"></use>
                            </svg> Settings</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-credit-card"></use>
                            </svg> Payments<span class="badge badge-sm bg-secondary ms-2">42</span></a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-file"></use>
                            </svg> Projects<span class="badge badge-sm bg-primary ms-2">42</span></a>
                        <div class="dropdown-divider"></div><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-lock-locked"></use>
                            </svg> Lock Account</a><a class="dropdown-item" href="#">
                            <svg class="icon me-2">
                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-account-logout"></use>
                            </svg> Logout</a>
                    </div>
                </li>
            </ul>
        </div>
        <div class="header-divider"></div>
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb my-0 ms-2">
                    <li class="breadcrumb-item">
                        <span>Home</span>
                    </li>
                    <li class="breadcrumb-item active"><span>Dashboard</span></li>
                </ol>
            </nav>
        </div>
    </header>
    <div class="body flex-grow-1 px-3">
        <div class="container-lg">
            <div class="row">
                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-white bg-primary">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">26K <span class="fs-6 fw-normal">(-12.4%
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
</svg>)</span></div>
                                <div>Users</div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart1" style="display: block; box-sizing: border-box; height: 70px; width: 205px;" width="205" height="70"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-white bg-info">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">$6.200 <span class="fs-6 fw-normal">(40.9%
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
</svg>)</span></div>
                                <div>Income</div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart2" style="display: block; box-sizing: border-box; height: 70px; width: 205px;" width="205" height="70"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-white bg-warning">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">2.49% <span class="fs-6 fw-normal">(84.7%
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-top"></use>
 </svg>)</span></div>
                                <div>Conversion Rate</div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper mt-3" style="height:70px;">
                            <canvas class="chart" id="card-chart3" style="display: block; box-sizing: border-box; height: 70px; width: 237px;" width="237" height="70"></canvas>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-3">
                    <div class="card mb-4 text-white bg-danger">
                        <div class="card-body pb-0 d-flex justify-content-between align-items-start">
                            <div>
                                <div class="fs-4 fw-semibold">44K <span class="fs-6 fw-normal">(-23.6%
<svg class="icon">
<use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-arrow-bottom"></use>
</svg>)</span></div>
                                <div>Sessions</div>
                            </div>
                            <div class="dropdown">
                                <button class="btn btn-transparent text-white p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <svg class="icon">
                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                    </svg>
                                </button>
                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Action</a><a class="dropdown-item" href="#">Another action</a><a class="dropdown-item" href="#">Something else here</a></div>
                            </div>
                        </div>
                        <div class="c-chart-wrapper mt-3 mx-3" style="height:70px;">
                            <canvas class="chart" id="card-chart4" style="display: block; box-sizing: border-box; height: 70px; width: 205px;" width="205" height="70"></canvas>
                        </div>
                    </div>
                </div>

            </div>

            <div class="card mb-4">
                <div class="card-body">
                    <div class="d-flex justify-content-between">
                        <div>
                            <h4 class="card-title mb-0">Traffic</h4>
                            <div class="small text-medium-emphasis">January - July 2021</div>
                        </div>
                        <div class="btn-toolbar d-none d-md-block" role="toolbar" aria-label="Toolbar with buttons">
                            <div class="btn-group btn-group-toggle mx-3" data-coreui-toggle="buttons">
                                <input class="btn-check" id="option1" type="radio" name="options" autocomplete="off">
                                <label class="btn btn-outline-secondary"> Day</label>
                                <input class="btn-check" id="option2" type="radio" name="options" autocomplete="off" checked="">
                                <label class="btn btn-outline-secondary active"> Month</label>
                                <input class="btn-check" id="option3" type="radio" name="options" autocomplete="off">
                                <label class="btn btn-outline-secondary"> Year</label>
                            </div>
                            <button class="btn btn-primary" type="button">
                                <svg class="icon">
                                    <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-cloud-download"></use>
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="c-chart-wrapper" style="height:300px;margin-top:40px;">
                        <canvas class="chart" id="main-chart" style="display: block; box-sizing: border-box; height: 300px; width: 994px;" width="994" height="300"></canvas>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row row-cols-1 row-cols-md-5 text-center">
                        <div class="col mb-sm-2 mb-0">
                            <div class="text-medium-emphasis">Visits</div>
                            <div class="fw-semibold">29.703 Users (40%)</div>
                            <div class="progress progress-thin mt-2">
                                <div class="progress-bar bg-success" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col mb-sm-2 mb-0">
                            <div class="text-medium-emphasis">Unique</div>
                            <div class="fw-semibold">24.093 Users (20%)</div>
                            <div class="progress progress-thin mt-2">
                                <div class="progress-bar bg-info" role="progressbar" style="width: 20%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col mb-sm-2 mb-0">
                            <div class="text-medium-emphasis">Pageviews</div>
                            <div class="fw-semibold">78.706 Views (60%)</div>
                            <div class="progress progress-thin mt-2">
                                <div class="progress-bar bg-warning" role="progressbar" style="width: 60%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col mb-sm-2 mb-0">
                            <div class="text-medium-emphasis">New Users</div>
                            <div class="fw-semibold">22.123 Users (80%)</div>
                            <div class="progress progress-thin mt-2">
                                <div class="progress-bar bg-danger" role="progressbar" style="width: 80%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                        <div class="col mb-sm-2 mb-0">
                            <div class="text-medium-emphasis">Bounce Rate</div>
                            <div class="fw-semibold">40.15%</div>
                            <div class="progress progress-thin mt-2">
                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 col-lg-4">
                    <div class="card mb-4" style="--cui-card-cap-bg: #3b5998">
                        <div class="card-header position-relative d-flex justify-content-center align-items-center">
                            <svg class="icon icon-3xl text-white my-4">
                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-facebook-f"></use>
                            </svg>
                            <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                                <canvas id="social-box-chart-1" height="90"></canvas>
                            </div>
                        </div>
                        <div class="card-body row text-center">
                            <div class="col">
                                <div class="fs-5 fw-semibold">89k</div>
                                <div class="text-uppercase text-medium-emphasis small">friends</div>
                            </div>
                            <div class="vr"></div>
                            <div class="col">
                                <div class="fs-5 fw-semibold">459</div>
                                <div class="text-uppercase text-medium-emphasis small">feeds</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card mb-4" style="--cui-card-cap-bg: #00aced">
                        <div class="card-header position-relative d-flex justify-content-center align-items-center">
                            <svg class="icon icon-3xl text-white my-4">
                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-twitter"></use>
                            </svg>
                            <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                                <canvas id="social-box-chart-2" height="90"></canvas>
                            </div>
                        </div>
                        <div class="card-body row text-center">
                            <div class="col">
                                <div class="fs-5 fw-semibold">973k</div>
                                <div class="text-uppercase text-medium-emphasis small">followers</div>
                            </div>
                            <div class="vr"></div>
                            <div class="col">
                                <div class="fs-5 fw-semibold">1.792</div>
                                <div class="text-uppercase text-medium-emphasis small">tweets</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-sm-6 col-lg-4">
                    <div class="card mb-4" style="--cui-card-cap-bg: #4875b4">
                        <div class="card-header position-relative d-flex justify-content-center align-items-center">
                            <svg class="icon icon-3xl text-white my-4">
                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-linkedin"></use>
                            </svg>
                            <div class="chart-wrapper position-absolute top-0 start-0 w-100 h-100">
                                <canvas id="social-box-chart-3" height="90"></canvas>
                            </div>
                        </div>
                        <div class="card-body row text-center">
                            <div class="col">
                                <div class="fs-5 fw-semibold">500+</div>
                                <div class="text-uppercase text-medium-emphasis small">contacts</div>
                            </div>
                            <div class="vr"></div>
                            <div class="col">
                                <div class="fs-5 fw-semibold">292</div>
                                <div class="text-uppercase text-medium-emphasis small">feeds</div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="card mb-4">
                        <div class="card-header">Traffic &amp; Sales</div>
                        <div class="card-body">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="border-start border-start-4 border-start-info px-3 mb-3"><small class="text-medium-emphasis">New Clients</small>
                                                <div class="fs-5 fw-semibold">9,123</div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="border-start border-start-4 border-start-danger px-3 mb-3"><small class="text-medium-emphasis">Recuring Clients</small>
                                                <div class="fs-5 fw-semibold">22,643</div>
                                            </div>
                                        </div>

                                    </div>

                                    <hr class="mt-0">
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Monday</span></div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 34%" aria-valuenow="34" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 78%" aria-valuenow="78" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Tuesday</span></div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 94%" aria-valuenow="94" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Wednesday</span></div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 12%" aria-valuenow="12" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 67%" aria-valuenow="67" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Thursday</span></div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 91%" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Friday</span></div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 73%" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Saturday</span></div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 53%" aria-valuenow="53" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 82%" aria-valuenow="82" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-4">
                                        <div class="progress-group-prepend"><span class="text-medium-emphasis small">Sunday</span></div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 9%" aria-valuenow="9" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 69%" aria-valuenow="69" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6">
                                    <div class="row">
                                        <div class="col-6">
                                            <div class="border-start border-start-4 border-start-warning px-3 mb-3"><small class="text-medium-emphasis">Pageviews</small>
                                                <div class="fs-5 fw-semibold">78,623</div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <div class="border-start border-start-4 border-start-success px-3 mb-3"><small class="text-medium-emphasis">Organic</small>
                                                <div class="fs-5 fw-semibold">49,123</div>
                                            </div>
                                        </div>

                                    </div>

                                    <hr class="mt-0">
                                    <div class="progress-group">
                                        <div class="progress-group-header">
                                            <svg class="icon icon-lg me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user"></use>
                                            </svg>
                                            <div>Male</div>
                                            <div class="ms-auto fw-semibold">43%</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group mb-5">
                                        <div class="progress-group-header">
                                            <svg class="icon icon-lg me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-user-female"></use>
                                            </svg>
                                            <div>Female</div>
                                            <div class="ms-auto fw-semibold">37%</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header">
                                            <svg class="icon icon-lg me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-google"></use>
                                            </svg>
                                            <div>Organic Search</div>
                                            <div class="ms-auto fw-semibold me-2">191.235</div>
                                            <div class="text-medium-emphasis small">(56%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 56%" aria-valuenow="56" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header">
                                            <svg class="icon icon-lg me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-facebook-f"></use>
                                            </svg>
                                            <div>Facebook</div>
                                            <div class="ms-auto fw-semibold me-2">51.223</div>
                                            <div class="text-medium-emphasis small">(15%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 15%" aria-valuenow="15" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header">
                                            <svg class="icon icon-lg me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-twitter"></use>
                                            </svg>
                                            <div>Twitter</div>
                                            <div class="ms-auto fw-semibold me-2">37.564</div>
                                            <div class="text-medium-emphasis small">(11%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 11%" aria-valuenow="11" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="progress-group">
                                        <div class="progress-group-header">
                                            <svg class="icon icon-lg me-2">
                                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-linkedin"></use>
                                            </svg>
                                            <div>LinkedIn</div>
                                            <div class="ms-auto fw-semibold me-2">27.319</div>
                                            <div class="text-medium-emphasis small">(8%)</div>
                                        </div>
                                        <div class="progress-group-bars">
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 8%" aria-valuenow="8" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                            <br>
                            <div class="table-responsive">
                                <table class="table border mb-0">
                                    <thead class="table-light fw-semibold">
                                    <tr class="align-middle">
                                        <th class="text-center">
                                            <svg class="icon">
                                                <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-people"></use>
                                            </svg>
                                        </th>
                                        <th>User</th>
                                        <th class="text-center">Country</th>
                                        <th>Usage</th>
                                        <th class="text-center">Payment Method</th>
                                        <th>Activity</th>
                                        <th></th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/1.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                                        </td>
                                        <td>
                                            <div>Yiorgos Avraamu</div>
                                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-us"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">50%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-mastercard"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">10 sec ago</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/2.jpg" alt="user@email.com"><span class="avatar-status bg-danger"></span></div>
                                        </td>
                                        <td>
                                            <div>Avram Tarasios</div>
                                            <div class="small text-medium-emphasis"><span>Recurring</span> | Registered: Jan 1, 2020</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-br"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">10%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 10%" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-visa"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">5 minutes ago</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/3.jpg" alt="user@email.com"><span class="avatar-status bg-warning"></span></div>
                                        </td>
                                        <td>
                                            <div>Quintin Ed</div>
                                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-in"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">74%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-warning" role="progressbar" style="width: 74%" aria-valuenow="74" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-stripe"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">1 hour ago</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/4.jpg" alt="user@email.com"><span class="avatar-status bg-secondary"></span></div>
                                        </td>
                                        <td>
                                            <div>Enéas Kwadwo</div>
                                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-fr"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">98%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: 98%" aria-valuenow="98" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-paypal"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">Last month</div>
                                        </td>
                                        <td>
                                            <div class="dropdown">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/5.jpg" alt="user@email.com"><span class="avatar-status bg-success"></span></div>
                                        </td>
                                        <td>
                                            <div>Agapetus Tadeáš</div>
                                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-es"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">22%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: 22%" aria-valuenow="22" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-apple-pay"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">Last week</div>
                                        </td>
                                        <td>
                                            <div class="dropdown dropup">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="align-middle">
                                        <td class="text-center">
                                            <div class="avatar avatar-md"><img class="avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com"><span class="avatar-status bg-danger"></span></div>
                                        </td>
                                        <td>
                                            <div>Friderik Dávid</div>
                                            <div class="small text-medium-emphasis"><span>New</span> | Registered: Jan 1, 2020</div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/flag.svg#cif-pl"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="clearfix">
                                                <div class="float-start">
                                                    <div class="fw-semibold">43%</div>
                                                </div>
                                                <div class="float-end"><small class="text-medium-emphasis">Jun 11, 2020 - Jul 10, 2020</small></div>
                                            </div>
                                            <div class="progress progress-thin">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: 43%" aria-valuenow="43" aria-valuemin="0" aria-valuemax="100"></div>
                                            </div>
                                        </td>
                                        <td class="text-center">
                                            <svg class="icon icon-xl">
                                                <use xlink:href="vendors/@coreui/icons/svg/brand.svg#cib-cc-amex"></use>
                                            </svg>
                                        </td>
                                        <td>
                                            <div class="small text-medium-emphasis">Last login</div>
                                            <div class="fw-semibold">Yesterday</div>
                                        </td>
                                        <td>
                                            <div class="dropdown dropup">
                                                <button class="btn btn-transparent p-0" type="button" data-coreui-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <svg class="icon">
                                                        <use xlink:href="vendors/@coreui/icons/svg/free.svg#cil-options"></use>
                                                    </svg>
                                                </button>
                                                <div class="dropdown-menu dropdown-menu-end"><a class="dropdown-item" href="#">Info</a><a class="dropdown-item" href="#">Edit</a><a class="dropdown-item text-danger" href="#">Delete</a></div>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
    <footer class="footer">
        <div><a href="https://coreui.io">CoreUI </a><a href="https://coreui.io">Bootstrap Admin Template</a> © 2021 creativeLabs.</div>
        <div class="ms-auto">Powered by&nbsp;<a href="https://coreui.io/bootstrap/ui-components/">CoreUI UI Components</a></div>
    </footer>
</div>
@yield('before_scripts')
@stack('before_scripts')
@include(alessioprete_view('inc.scripts'))
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/prism.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/autoloader/prism-autoloader.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/unescaped-markup/prism-unescaped-markup.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/prismjs@1.24.1/plugins/normalize-whitespace/prism-normalize-whitespace.js"></script>

@yield('after_scripts')
@stack('after_scripts')
<script>
</script>

</body>
{{--<body>--}}

{{--  @include(alessioprete_view('inc.main_header'))--}}

{{--  <div class="app-body">--}}

{{--    @include(alessioprete_view('inc.sidebar'))--}}

{{--    <main class="main pt-2">--}}

{{--       @yield('before_breadcrumbs_widgets')--}}

{{--       @includeWhen(isset($breadcrumbs), backpack_view('inc.breadcrumbs'))--}}

{{--       @yield('after_breadcrumbs_widgets')--}}

{{--       @yield('header')--}}

{{--        <div class="container-fluid animated fadeIn">--}}

{{--          @yield('before_content_widgets')--}}

{{--          @yield('content')--}}

{{--          @yield('after_content_widgets')--}}

{{--        </div>--}}

{{--    </main>--}}

{{--  </div><!-- ./app-body -->--}}

{{--  <footer class="{{ config('alessioprete.base.footer_class') }}">--}}
{{--    @include(alessioprete_view('inc.footer'))--}}
{{--  </footer>--}}





{{--</body>--}}
</html>
