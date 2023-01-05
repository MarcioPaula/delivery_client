<?php

// For add'active' class for activated route nav-item
function active_class($path, $active = 'active') {
    return call_user_func_array('Request::is', (array)$path) ? $active : '';
}

// For checking activated route
function is_active_route($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'true' : 'false';
}

// For add 'show' class for activated route collapse
function show_class($path) {
    return call_user_func_array('Request::is', (array)$path) ? 'show' : '';
}?>

<nav class="sidebar sidebar-offcanvas dynamic-active-class-disabled" id="sidebar">
  <ul class="nav">
    <li class="nav-item nav-profile not-navigation-link">
      <div class="nav-link">
      </div>
    </li>
    <li class="nav-item {{ active_class([$empresa.'/cardapio']) }}">
      <a class="nav-link" href="{{ url($empresa.'/cardapio') }}">
        <i class="menu-icon mdi mdi-food"></i>
        <span class="menu-title">Cardapio</span>
      </a>
    </li>
      <li class="nav-item {{ active_class([$empresa.'/pedidos']) }}">
          <a class="nav-link" href="{{ url($empresa.'/pedidos') }}">
              <i class="menu-icon mdi mdi-basket"></i>
              <span class="menu-title">Meus pedidos</span>
          </a>
      </li>
     <li class="nav-item {{ active_class(['categorias/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#categorias" aria-expanded="{{ is_active_route(['basic-ui/*']) }}" aria-controls="basic-ui">
        <i class="menu-icon mdi mdi-food-fork-drink"></i>
        <span class="menu-title">Categorias</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['categorias/*']) }}" id="categorias">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['categorias/comidas']) }}">
            <a class="nav-link" href="#comidas">Comidas</a>
          </li>
            <li class="nav-item {{ active_class(['categorias/comidas']) }}">
                <a class="nav-link" href="#bebidas">Bebidas</a>
            </li>
            <li class="nav-item {{ active_class(['categorias/comidas']) }}">
                <a class="nav-link" href="#frios">Frios <span class="badge badge-primary ml-1">Novo</span></a>
            </li>
        </ul>
      </div>
    </li>
      <!--
<li class="nav-item {{ active_class(['user-pages/*']) }}">
      <a class="nav-link" data-toggle="collapse" href="#user-pages" aria-expanded="{{ is_active_route(['user-pages/*']) }}" aria-controls="user-pages">
        <i class="menu-icon mdi mdi-lock-outline"></i>
        <span class="menu-title">User Pages</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse {{ show_class(['user-pages/*']) }}" id="user-pages">
        <ul class="nav flex-column sub-menu">
          <li class="nav-item {{ active_class(['user-pages/login']) }}">
            <a class="nav-link" href="{{ url('/user-pages/login') }}">Login</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/register']) }}">
            <a class="nav-link" href="{{ url('/user-pages/register') }}">Register</a>
          </li>
          <li class="nav-item {{ active_class(['user-pages/lock-screen']) }}">
            <a class="nav-link" href="{{ url('/user-pages/lock-screen') }}">Lock Screen</a>
          </li>
        </ul>
      </div>
    </li>-->

  </ul>
</nav>
