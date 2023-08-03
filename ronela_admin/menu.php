<!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
          <a href="index.php?act=dashboard" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
          <a href="index.php?act=customer" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Pengunjung
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-shopping-cart"></i>
              <p>
                Reservation
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="index.php?act=reserv_penginapan" class="nav-link">
                  <i class="fas nav-icon"></i>
                  <p>Penginapan</p><br>
                </a>
              </li>
            </ul>
			        <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="index.php?act=reserv_mobil" class="nav-link">
                  <i class="fas nav-icon"></i>
                  <p>Mobil</p><br>
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-table"></i>
              <p>
                Add Data
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="index.php?act=input_mobil" class="nav-link">
                  <i class="fas nav-icon"></i>
                  <p>Mobil</p><br>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item">
              <a href="index.php?act=input_penginapan" class="nav-link">
                  <i class="fas nav-icon"></i>
                  <p>Penginapan</p>
                </a>
              </li>
            </ul>
          <li class="nav-header">Admin</li>
          <li class="nav-item">
          <a href="index.php?act=admin" class="nav-link">
              <i class="nav-icon fas fa-user"></i>
              <p>Data Admin</p>
            </a>
          </li>
          <li class="nav-item">
          <a href="signout.php" class="nav-link">
              <i class="nav-icon fas fa-power-off"></i>
              <p>Logout</p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->