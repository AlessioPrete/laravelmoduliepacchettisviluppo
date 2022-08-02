<li class="nav-item dropdown pr-4">
  <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="position: relative;width: 35px;height: 35px;margin: 0 10px;">
    <img class="img-avatar" src="{{ alessioprete_avatar_url(alessioprete_auth()->user()) }}" alt="{{ alessioprete_auth()->user()->name }}" onerror="this.style.display='none'" style="margin: 0;position: absolute;left: 0;z-index: 1;">
    <span class="backpack-avatar-menu-container" style="position: absolute;left: 0;width: 100%;background-color: #00a65a;border-radius: 50%;color: #FFF;line-height: 35px;font-size: 85%;font-weight: 300;">
      {{alessioprete_user()->getAttribute('name') ? mb_substr(alessioprete_user()->name, 0, 1, 'UTF-8') : 'A'}}
    </span>
  </a>
  <div class="dropdown-menu dropdown-menu-right mr-4 pb-1 pt-1">
    <a class="dropdown-item" href="#"><i class="la la-user"></i> Mio Account</a>
    <div class="dropdown-divider"></div>
    <a class="dropdown-item" href="{{ alessioprete_url('logout') }}"><i class="la la-lock"></i> Logout</a>
  </div>
</li>
