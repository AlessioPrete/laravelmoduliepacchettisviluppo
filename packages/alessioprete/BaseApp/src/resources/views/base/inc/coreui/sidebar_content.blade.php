<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="nav-icon icon-barometer1"></i> Dashboard
{{--        <span class="badge badge-sm bg-info ms-auto">NEW</span>--}}
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('tasks')}}">
        <i class="nav-icon icon-note-list1"></i> Tasks
        {{--        <span class="badge badge-sm bg-info ms-auto">NEW</span>--}}
    </a>
</li>
<li class="nav-title">Contenuti Sito</li>
<li class="nav-item"><a class="nav-link" href="#">
        <i class="icon-menu nav-icon"></i> Menu</a></li>
{{--<li class="nav-group"><a class="nav-link nav-group-toggle" href="#">--}}
{{--        <svg class="nav-icon">--}}
{{--            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-puzzle"></use>--}}
{{--        </svg> Base</a>--}}
{{--    <ul class="nav-group-items">--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/accordion.html"><span class="nav-icon"></span> Accordion</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/breadcrumb.html"><span class="nav-icon"></span> Breadcrumb</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/cards.html"><span class="nav-icon"></span> Cards</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/carousel.html"><span class="nav-icon"></span> Carousel</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/collapse.html"><span class="nav-icon"></span> Collapse</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/list-group.html"><span class="nav-icon"></span> List group</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/navs-tabs.html"><span class="nav-icon"></span> Navs &amp; Tabs</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/pagination.html"><span class="nav-icon"></span> Pagination</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/placeholders.html"><span class="nav-icon"></span> Placeholders</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/popovers.html"><span class="nav-icon"></span> Popovers</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/progress.html"><span class="nav-icon"></span> Progress</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/scrollspy.html"><span class="nav-icon"></span> Scrollspy</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/spinners.html"><span class="nav-icon"></span> Spinners</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/tables.html"><span class="nav-icon"></span> Tables</a></li>--}}
{{--        <li class="nav-item"><a class="nav-link" href="base/tooltips.html"><span class="nav-icon"></span> Tooltips</a></li>--}}
{{--    </ul>--}}
{{--</li>--}}
<li class="nav-item">
    <a href="#" class="nav-link">
        <i class="icon-document-text1 nav-icon"></i>
        Pagine
    </a>
</li>
<li class="nav-title">Impostazioni</li>
<li class="nav-group"><a class="nav-link nav-group-toggle" href="#">Autorizzazioni</a>
    <ul class="nav-group-items">

        <li class="nav-item">
            <a href="{{route('utenti')}}" class="nav-link">
                <i class="icon-user nav-icon"></i>
                Utenti
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('roles')}}" class="nav-link">
                <i class="icon-users nav-icon"></i> Ruoli
            </a>
        </li>

        <li class="nav-item">
            <a href="{{route('permission')}}" class="nav-link">
                <i class="nav-icon icon-key3"></i> Permessi
            </a>
        </li>

    </ul>
</li>

