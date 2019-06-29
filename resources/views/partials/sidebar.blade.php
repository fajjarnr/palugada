  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="{{url('/')}}" class="brand-link">
          <img src="{{asset('img/logo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
              style="opacity: .8">
          <span class="brand-text font-weight-light">PALUGADA</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
          <!-- Sidebar user panel (optional) -->
          <div class="user-panel mt-3 pb-3 mb-3 d-flex">
              <div class="image">
                  <img src="{{asset('img/avatar.png')}}" class="img-circle elevation-2" alt="User Image">
              </div>
              <div class="info">
                  <a href="" class="d-block">
                    Administrator
                  </a>
              </div>
          </div>

          <!-- Sidebar Menu -->
          <nav class="mt-2">
              <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                  data-accordion="false">
                  <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                  <li class="nav-item">
                      <a href="{{route('dashboard')}}" class="nav-link">
                          <i class="nav-icon fa fa-dashboard"></i>
                          <p>Dashboard</p>
                      </a>
                  </li>
                  <li class="nav-item has-treeview menu-open">
                    <a href="#" class="nav-link active">
                      <i class="nav-icon fa fa-book"></i>
                      <p>
                        Kategori
                        <i class="right fa fa-angle-left"></i>
                      </p>
                    </a>
                    <ul class="nav nav-treeview">
                      <li class="nav-item">
                      <a href="{{route('tambah-kategori')}}" class="nav-link">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>Tambah Kategori</p>
                        </a>
                      </li>
                      <li class="nav-item">
                      <a href="{{route('data-kategori')}}" class="nav-link">
                          <i class="fa fa-circle-o nav-icon"></i>
                          <p>Data Kategori</p>
                        </a>
                      </li>
                    </ul>
                  </li>
              <li class="nav-item">
                  <a href="{{route('service')}}" class="nav-link">
                      <i class="nav-icon fab fa-usps></i>"></i>
                      <p>Service</p>
                  </a>
              </li>
              <li class="nav-item">
                <a href="{{route('payment')}}" class="nav-link">
                    <i class="nav-icon fa fa-dollar"></i>
                    <p>Riwayat Pembayaran</p>
                </a>
            </li>
              <li class="nav-item">
                  <a href="{{route('data-user')}}" class="nav-link">
                      <i class="nav-icon fa fa-user"></i>
                      <p>Data User</p>
                  </a>
              </li>
          </nav>
          <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
  </aside>
