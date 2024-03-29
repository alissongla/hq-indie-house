<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href={{ route('admin') }} class="brand-link">
      <img src={{ secure_asset('img/logoHQ_Inverted.png')}} alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">HQ House Indie</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-plus-square"></i>
              <p>
                Cadastro
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href={{ route('news') }} class="nav-link">
                  <i class="far fa-newspaper nav-icon"></i>
                  <p>Notícias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href={{ route('interviews') }} class="nav-link">
                  <i class="fas fa-comment nav-icon"></i>
                  <p>Entrevistas / Matérias</p>
                </a>
              </li>
              <li class="nav-item">
                <a href={{ route('podcasts') }} class="nav-link">
                  <i class="fas  fa-microphone nav-icon"></i>
                  <p>Podcasts</p>
                </a>
              </li>
              <li class="nav-item">
                <a href={{ route('reviews') }} class="nav-link">
                  <i class="fas fa-bullhorn nav-icon"></i>
                  <p>Críticas</p>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item">
          <a href={{ route('categories') }} class="nav-link">
              <i class="nav-icon fas fa-bookmark"></i>
              <p>
                Categorias
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href={{ route('tags') }} class="nav-link">
              <i class="nav-icon fas fa-copy"></i>
              <p>
                Tags
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
