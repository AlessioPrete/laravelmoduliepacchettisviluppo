<header class="{{ config('alessioprete.base.header_class') }}">
  <!-- Logo -->
  <button class="navbar-toggler sidebar-toggler d-lg-none mr-auto ml-3" type="button" data-toggle="sidebar-show" aria-label="Apri/chiudi Navigazione">
    <span class="navbar-toggler-icon"></span>
  </button>
  <a class="navbar-brand" href="{{ url(config('alessioprete.base.home_link')) }}" title="{{ config('alessioprete.base.project_name') }}">
    {!! config('backpack.base.project_logo') !!} Prova
  </a>
  <button class="navbar-toggler sidebar-toggler d-md-down-none" type="button" data-toggle="sidebar-lg-show" aria-label="Apri/chiudi Navigazione">
    <span class="navbar-toggler-icon"></span>
  </button>

  @include(alessioprete_view('inc.menu'))
</header>
