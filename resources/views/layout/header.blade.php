  <!-- Navbar -->
  <nav class="main-header navbar navbar-expand navbar-dark">
      <!-- Left navbar links -->
      <ul class="navbar-nav">
          <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
          </li>
      </ul>

      <!-- Right navbar links -->
      <ul class="navbar-nav ml-auto">
          {{-- <li class="nav-item">
              <a class="nav-link" href="#" role="button">
                  <i class="fas fa-bell"></i>
              </a>
          </li> --}}
          <li class="nav-item">
              <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                  <i class="fas fa-expand-arrows-alt"></i>
              </a>
          </li>
          <li class="nav-item">
              <form action="{{ route('logout') }}" method="POST">
                  @csrf
                  <button type="submit" class="nav-link btn" role="button">
                      <i class="fas fa-sign-out-alt"></i>
                      <label for="">Logout</label>
                  </button>
              </form>
          </li>

      </ul>
  </nav>
  <!-- /.navbar -->
