<?php
/**
 * Created by PhpStorm.
 * User: dulee
 * Date: 11/7/2018
 * Time: 7:39 PM
 */
echo "
 <nav class='navbar navbar-expand-lg navbar-dark bg-dark text-white'>

      <a class='navbar-brand mr-1' href='../../'>Salon Sanrooka</a>

      <button class='btn btn-link btn-sm text-white order-1 order-sm-0' id='sidebarToggle' href='#'>
        <i class='fas fa-bars'></i>
      </button>

      <!-- Navbar Search -->
      <form class='d-none d-md-inline-block form-inline ml-auto mr-0 mr-md-3 my-2 my-md-0'>
        <div class='input-group'>
          <!--<input type='text' class='form-control' placeholder='Search for...' aria-label='Search' aria-describedby='basic-addon2'>
          <div class='input-group-append'>
            <button class='btn btn-primary' type='button'>
              <i class='fas fa-search'></i>
            </button>
          </div>
          -->
          <button type='button' class='btn btn-primary' data-toggle='modal' data-target='#ReceptionistAdd'>
          Appoint Receptionist
</button>
        
        </div>
      </form>

      <!-- Navbar -->
      <ul class='navbar-nav ml-auto ml-md-0'>
        <li class='nav-item dropdown no-arrow mx-1'>
          <a class='nav-link dropdown-toggle' href='#' id='alertsDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <i class='fas fa-bell fa-fw'></i>
            <span class='badge badge-danger'>9+</span>
          </a>
          <div class='dropdown-menu dropdown-menu-right' aria-labelledby='alertsDropdown'>
            <a class='dropdown-item' href='#'>Action</a>
            <a class='dropdown-item' href='#'>Another action</a>
            <div class='dropdown-divider'></div>
            <a class='dropdown-item' href='#'>Something else here</a>
          </div>
        </li>
        <li class='nav-item dropdown no-arrow mx-1'>
          <a class='nav-link dropdown-toggle' href='#' id='messagesDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <i class='fas fa-envelope fa-fw'></i>
            <span class='badge badge-danger'>7</span>
          </a>
          <div class='dropdown-menu dropdown-menu-right' aria-labelledby='messagesDropdown'>
            <a class='dropdown-item' href='#'>Action</a>
            <a class='dropdown-item' href='#'>Another action</a>
            <div class='dropdown-divider'></div>
            <a class='dropdown-item' href='#'>Something else here</a>
          </div>
        </li>
        <li class='nav-item dropdown no-arrow'>
          <a class='nav-link dropdown-toggle' href='#' id='userDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <i class='fas fa-user-circle fa-fw'></i>
          </a>
          <div class='dropdown-menu dropdown-menu-right' aria-labelledby='userDropdown'>
            <a class='dropdown-item' href='./ReceptionistProfile.php'>Profile</a>
            <a class='dropdown-item' href='../logout.php'>Logout</a>
            
        </li>
      </ul>

    </nav>

    <div id='wrapper'>

      <!-- Sidebar -->
      <ul class='sidebar navbar-nav'>
        <li class='nav-item'>
          <a class='nav-link' href=''>
            <i class='fas fa-fw fa-tachometer-alt'></i>
            <span>Dashboard</span>
          </a>
        </li>
        <li class='nav-item dropdown'>
          <a class='nav-link dropdown-toggle' href='#' id='pagesDropdown' role='button' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
            <i class='fas fa-fw fa-folder'></i>
            <span>Pages</span>
          </a>
          <div class='dropdown-menu' aria-labelledby='pagesDropdown'>
            <h6 class='dropdown-header'>Login Screens:</h6>
            <a class='dropdown-item' href='login.html'>Login</a>>
            <a class='dropdown-item' href='register.html'>Register</a>
            <a class='dropdown-item' href='forgot-password.html'>Forgot Password</a>
            <div class='dropdown-divider'></div>
            <h6 class='dropdown-header'>Other Pages:</h6>
            <a class='dropdown-item' href='404.html'>404 Page</a>
            <a class='dropdown-item active' href='blank.html'>Blank Page</a>
          </div>>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='./'>
            <i class='fas fa-fw fa-chart-area'></i>
            <span>Appointments</span></a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='./AdminEmployee.php'>
            <i class='fas fa-fw fa-chart-area'></i>
            <span>Employee</span></a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='./AdminUsers.php'>
            <i class='fas fa-fw fa-chart-area'></i>
            <span>Admin Users</span></a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='./AdminServiceEmp.php'>
            <i class='fas fa-fw fa-chart-area'></i>
            <span>Service & Employee</span></a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='./AdminStock.php'>
            <i class='fas fa-fw fa-table'></i>
            <span>Stock</span></a>
        </li>
        <li class='nav-item'>
          <a class='nav-link' href='./AdminService.php'>
            <i class='fas fa-fw fa-chart-area'></i>
            <span>Service</span></a>
        </li>
          <li class='nav-item'>
              <a class='nav-link' href='./AdminReport.php'>
                  <i class='fas fa-fw fa-table'></i>
                  <span>Revenue Reports</span></a>
          </li>
          <li class='nav-item'>
              <a class='nav-link' href='./ReceptionistReport1.php'>
                  <i class='fas fa-fw fa-table'></i>
                  <span>Report1</span></a>
          </li>
          
      </ul>
      <div class='modal fade' id='ReceptionistAdd' tabindex='-1' role='dialog' aria-labelledby='exampleModalLabel' aria-hidden='true'>
  <div class='modal-dialog' role='document'>
    <div class='modal-content'>
      <div class='modal-header'>
        <h5 class='modal-title' id='exampleModalLabel'>Modal title</h5>
        <button type='button' class='close' data-dismiss='modal' aria-label='Close'>
          <span aria-hidden='true'>&times;</span>
        </button>
      </div>
      <div class='modal-body'>
        ...
      </div>
      <div class='modal-footer'>
        <button type='button' class='btn btn-secondary' data-dismiss='modal'>Close</button>
        <button type='button' class='btn btn-primary'>Save changes</button>
      </div>
    </div>
  </div>
</div>
 "


?>