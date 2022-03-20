<?php
include("config.php");
?>
<ul class="nav">
        <li class="nav-item sidebar-category">
          <p>Navigation</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="dashboard.php">
            <i class="mdi mdi-church menu-icon"></i>
            <span class="menu-title">Dashboard</span>
            <div class="badge badge-info badge-pill">0</div>
          </a>
        </li>
        <li class="nav-item sidebar-category">
          <p>Menu</p>
          <span></span>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="wordfortheday.php">
            <i class="mdi mdi-bible menu-icon"></i>
            <span class="menu-title">Word for The Day</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="bibleverses.php">
            <i class="mdi mdi-book-open-page-variant menu-icon"></i>
            <span class="menu-title">Bible Verses</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="ToDoLists.php">
            <i class="mdi mdi-clipboard-outline menu-icon"></i>
            <span class="menu-title">ToDo Lists</span>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="generalreading.php">
            <i class="mdi mdi-book-open-page-variant menu-icon"></i>
            <span class="menu-title">General Reading</span>
          </a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="logout.php">
                  <i class="mdi mdi-logout menu-icon"></i>
                  <span class="menu-title">Logout</span>
                </a>
                </li>
    </nav>
    <!-- partial -->
    <div class="container-fluid page-body-wrapper">
      <!-- partial:./partials/_navbar.html -->
      <nav class="navbar col-lg-12 col-12 px-0 py-0 py-lg-4 d-flex flex-row">
        <div class="navbar-menu-wrapper d-flex align-items-center justify-content-end">
          <button class="navbar-toggler navbar-toggler align-self-center" type="button" data-toggle="minimize">
            <span class="mdi mdi-menu"></span>
          </button>
          <h4 class="font-weight-bold mb-0 d-none d-md-block mt-1"><p>
            Welcome,
                <?php echo $_SESSION['username']; ?>
        </p></h4>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item">
              <h4 class="mb-0 font-weight-bold d-none d-xl-block"><?php
  echo "Today is " . date("d-m-Y") . "<br>";
?></h4>
            </li>
            <li class="nav-item dropdown me-1">
              <a class="nav-link count-indicator dropdown-toggle d-flex justify-content-center align-items-center" id="messageDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-calendar mx-0"></i>
                <span class="count bg-info">0</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="messageDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header"><b>Notifications</b></p>
                <a class="dropdown-item preview-item">
No Notifications...
                </a>
              </div>
            </li>
            <li class="nav-item dropdown me-2">
              <a class="nav-link count-indicator dropdown-toggle d-flex align-items-center justify-content-center" id="notificationDropdown" href="#" data-bs-toggle="dropdown">
                <i class="mdi mdi-email-open mx-0"></i>
                <span class="count bg-danger">0</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="notificationDropdown">
                <p class="mb-0 font-weight-normal float-left dropdown-header"><b>Messages</b></p>
                <a class="dropdown-item preview-item">
                No Messages...
                </a>
              </div>
            </li>
          </ul>
          <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
            <span class="mdi mdi-menu"></span>
          </button>
        </div>
        <div class="navbar-menu-wrapper navbar-search-wrapper d-none d-lg-flex align-items-center">
          <ul class="navbar-nav mr-lg-2">
            <li class="nav-item nav-search d-none d-lg-block">
              <div class="input-group">
                <input type="text" class="form-control" placeholder="Search Here..." aria-label="search" aria-describedby="search">
              </div>
            </li>
          </ul>
          <ul class="navbar-nav navbar-nav-right">
            <li class="nav-item nav-profile dropdown">
              <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" id="profileDropdown">
              <span class="nav-profile-name">Menu</span>
              </a>
              <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="profileDropdown">
                <a class="dropdown-item">
                  <i class="mdi mdi-settings text-primary"></i>
                  Settings
                </a>
                <a class="dropdown-item" href="logout.php">
                  <i class="mdi mdi-logout text-primary"></i>
                    Logout
                </a>
              </div>
            </li>
          </ul>
        </div>