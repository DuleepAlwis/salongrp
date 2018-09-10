<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 9/8/2018
 * Time: 3:26 PM
 */
echo "
<nav class='navbar navbar-expand-sm navbar-dark bg-dark p-0'>
    <div class='container'>
      <a href='index.html' class='navbar-brand'>Salon Sanrooka</a>
      <button class='navbar-toggler' data-toggle='collapse' data-target='#navbarNav'>
        <span class='navbar-toggler-icon'></span>
      </button>
      <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
        

        <ul class='navbar-nav ml-auto justify-content-end'>
          <li class='nav-item dropdown mr-3'>
            <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>
              <img src='../img/user.png' width='35%' height='35%'></i><?php echo; ?>
            </a>
            <div class='dropdown-menu'>
              <a href='profile.html' class='dropdown-item'>
                <i class='fa fa-user-circle'></i> Profile
              </a>
              <a href='settings.html' class='dropdown-item'>
                <i class='fa fa-gear'></i> Logout
              </a>
            </div>
          </li>
          
        </ul>
      </div>
    </div>
  </nav>

  <header id='main-header' class='py-2 bg-primary'>
    <div class='container'>
      <div class='row'>
        <div id='payment' class='col-md-2 menuBox' style='border-style: outset;background-color: #28a745'>
         <img src='../img/coins.png' width='35%' height='35%'><a href='ReceptionistPayment.php' style='font-size: 23px;color: #343a40 ' class='navbar-brand display-5'>Payment</a>
        </div>
        <div id='appointment' class='col-md-2 menuBox' style='border-style: outset;background-color: #28a745'>
         <img src='../img/appointment.png' width='35%' height='35%'><a href='ReceptionistAppointment.php' style='font-size: 23px;color: #343a40 ' class='navbar-brand display-5'>Appointment</a>
        </div>
        <div id='stock' class='col-md-2 menuBox' style='border-style: outset;background-color: #28a745'>
         <img src='../img/stock.png' width='35%' height='35%'><a href='ReceptionistStock.php' style='font-size: 23px;color: #343a40 ' class='navbar-brand display-5'>Stock details</a>
        </div>
        <div id='report' class='col-md-2 menuBox' style='border-style: outset;background-color: #28a745'>
         <img src='../img/report1.png' width='35%' height='35%'><a href='ReceptionistReport.php' style='font-size: 23px;color: #343a40 ' class='navbar-brand display-5'>S & R Report</a>
        </div>
        <div id='support' class='col-md-2 menuBox' style='border-style: outset;background-color: #28a745'>
         <img src='../img/support.png' width='35%' height='35%'><a href='ReceptionistSupport.php' style='font-size: 23px;color: #343a40 ' class='navbar-brand display-5'>Customer Sup.</a>
        </div>
        <div id='leave' class='col-md-2 menuBox' style='border-style: outset;background-color: #28a745'>
         <img src='../img/leave.png' width='35%' height='35%'><a href='ReceptionistLeave.php' style='font-size: 23px;color: #343a40 ' class='navbar-brand display-5'>Employee Leave</a>
        </div>
        
      </div>
    </div>
  </header>

  
    "
?>

