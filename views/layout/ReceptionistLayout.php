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
      <img src='../img/icon/image13.png' width='10%' height='10%'><a href='index.php' class='navbar-brand'>Salon Sanrooka</a>
      <button class='navbar-toggler' data-toggle='collapse' data-target='#navbarNav'>
        <span class='navbar-toggler-icon'></span>
      </button>
      <span style='display: inline-block;width=350px'></span>
      <div class='collapse navbar-collapse justify-content-end' style='align-content: right;' id='navbarNav'>
        

        <ul class='navbar-nav ml-auto justify-content-end'>
          <li class='nav-item dropdown mr-3'>
            <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>
              <img src='../img/icon/user.png' width='35%' height='35%'></i><?php echo; ?>
            </a>
            <div class='dropdown-menu' style='z-index: 999'>
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
         <img src='../img/icon/coins.png' width='35%' height='35%'><a href='ReceptionistPayment.php' style='font-size: 23px;color: #343a40 ' class='navbar-brand display-5'>Payment</a>
        </div>
        <div id='appointment' class='col-md-2 menuBox' style='border-style: outset;background-color: #28a745'>
         <img src='../img/icon/appointment.png' width='35%' height='35%'><a href='ReceptionistAppointment.php' style='font-size: 23px;color: #343a40 ' class='navbar-brand display-5'>Appointment</a>
        </div>
        <div id='stock' class='col-md-2 menuBox' style='border-style: outset;background-color: #28a745'>
         <img src='../img/icon/stock.png' width='35%' height='35%'><a href='ReceptionistStock.php' style='font-size: 23px;color: #343a40 ' class='navbar-brand display-5'>Stock details</a>
        </div>
        <div id='report' class='col-md-2 menuBox' style='border-style: outset;background-color: #28a745'>
         <img src='../img/icon/report1.png' width='35%' height='35%'><a href='ReceptionistReport.php' style='font-size: 23px;color: #343a40 ' class='navbar-brand display-5'>S & R Report</a>
        </div>
        <div id='support' class='col-md-2 menuBox' style='border-style: outset;background-color: #28a745'>
         <img src='../img/icon/support.png' width='35%' height='35%'><a href='ReceptionistSupport.php' style='font-size: 23px;color: #343a40 ' class='navbar-brand display-5'>Customer Sup.</a>
        </div>
        <div id='leave' class='col-md-2 menuBox' style='border-style: outset;background-color: #28a745;z-index: 9'>
         <img src='../img/icon/leave.png' width='35%' height='35%'><a href='ReceptionistLeave.php' style='font-size: 23px;color: #343a40;z-index: 9 ' class='navbar-brand display-5'>Employee Leave</a>
        </div>
        
      </div>
    </div>
  </header>

  
    "
?>

