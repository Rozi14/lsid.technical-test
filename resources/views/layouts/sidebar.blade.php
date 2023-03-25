<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

  <a class="sidebar-brand d-flex align-items-center justify-content-center" href="{{ route('todolist') }}">
    <div class="sidebar-brand-icon rotate-n-15">
      <i class="fas fa-list-alt"></i>
    </div>
    <div class="sidebar-brand-text mx-3">Todo App</div>
  </a>

  <hr class="sidebar-divider my-0">

  <li class="nav-item">
    <a class="nav-link" href="{{ route('todolist') }}">
      <i class="fas fa-fw fa-tachometer-alt"></i>
      <span>Todo List</span></a>
  </li>

  <hr class="sidebar-divider d-none d-md-block">

  <div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
  </div>

</ul>