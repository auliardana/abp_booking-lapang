<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3 sidebar-sticky">
        
      <ul class="nav flex-column">
          <li class="nav-item">
            <!-- untuk class = jika ada request yang urlnya dashboard_real  maka tampilkan kelas active, jika bukan maka kosongkan -->
            <a class="nav-link {{Request::is('home') ? 'active' : '' }}  " aria-current="page" href="/home">
              <span data-feather="home" class="align-text-bottom"></span>
              Home
            </a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link {{Request::is('dashboard/bookingmanagement') ? 'active' : '' }}" href="/dashboard/bookingmanagement">
              <span data-feather="users" class="align-text-bottom"></span>
              Booking Management
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link {{Request::is('admin/user') ? 'active' : '' }}" href="/admin/user">
              <span data-feather="users" class="align-text-bottom"></span>
              users
            </a>
          </li>
          
          <!-- report -->
          <li class="nav-item">
            <!-- untuk class = jika ada request yang urlnya dashboard_real  maka tampilkan kelas active, jika bukan maka kosongkan -->
            <a class="nav-link {{Request::is('dashboard/report') ? 'active' : '' }}" href="/dashboard/report">
              <span data-feather="bar-chart-2" class="align-text-bottom"></span>
              Reports (keluhan)
            </a>
          </li>
        </ul>
      </div>
    </nav>