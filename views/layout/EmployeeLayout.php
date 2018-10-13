<?php
/**
 * Created by PhpStorm.
 * User: dulip
 * Date: 10/6/18
 * Time: 6:15 AM
 */
echo "
<nav class='navbar navbar-expand-sm navbar-dark bg-dark p-0'>
    <div class='container'>
      <a href='../../index1.html' class='navbar-brand'>Salon Sanrooka</a>
      <button class='navbar-toggler' data-toggle='collapse' data-target='#navbarNav'>
        <span class='navbar-toggler-icon'></span>
      </button>
      <div class='collapse navbar-collapse' id='navbarNav'>
        <!-- <ul class='navbar-nav'>
          <li class='nav-item px-2'>
            <a href='employee_viewappointments.html' class='nav-link'>View Appointments</a>
          </li>
          <li class='nav-item px-2'>
            <a href='employee_postpone.html' class='nav-link'>Postpone</a>
          </li>
        </ul> -->

        <ul class='navbar-nav ml-auto'>
          <li class='nav-item px-2'>
            <a href='employee_viewappointments.php' class='nav-link'>View Appointments</a>
          </li>
          <li class='nav-item px-2'>
            <a href='employee_postpone.php' class='nav-link'>Apply Leave</a>
          </li>
          <li class='nav-item dropdown mr-3'>
            <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>
              <i class='fa fa-user'></i> 
            </a>
            <div class='dropdown-menu'>
              <a href='employee_myprofile.php' class='dropdown-item'>
                <i class='fa fa-user-circle'></i> Profile
              </a>
              <a href='#' class='dropdown-item'>
                <i class='fa fa-gear'></i> Logout
              </a>
            </div>
          </li>
      </div>
    </div>
  </nav>
  ";
