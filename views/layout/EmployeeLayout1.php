<?php
/**
 * Created by PhpStorm.
 * User: dulip
 * Date: 10/13/18
 * Time: 7:46 PM
 */
echo "<nav class='navbar navbar-expand-lg navbar-light bg-dark text-white'>
    <img src='../../img/icons/image13.png' width='110px'><a class='navbar-brand text-white display-5' href='#' style='font-size: 35px'>Salon Sanrooka</a>
    <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#navbarNav' aria-controls='navbarNav' aria-expanded='false' aria-label='Toggle navigation'>
        <span class='navbar-toggler-icon'></span>
    </button>
    <div class='collapse navbar-collapse justify-content-end' id='navbarNav'>
        <ul class='navbar-nav'>
            <li class='nav-item'>
                <a class='btn-outline-info nav-link text-white' href='../../'>Home <span class='sr-only'>(current)</span></a>
            </li>
            <li class='nav-item'>
                <a class='btn-outline-info nav-link text-white' href='./PreviousAppointments.php'>My Appointments</a>
            </li>
            <li class='nav-item text-white'>
                <a class='btn-outline-info nav-link text-white' href=''>Logged in as ".$_SESSION['name']."</a>
            </li>
            <li class='nav-item dropdown'>
             
                    <button class='btn btn-outline-primary dropdown-toggle btn-hover' type='button' id='navbarDropdownMenuLink' data-toggle='dropdown' aria-haspopup='true' aria-expanded='false'>
 
                    </button>
                    <div class='dropdown-menu dropdown-hover text-dark' aria-labelledby='navbarDropdownMenuLink'>
                        <!--<button class='dropdown-item'>--><a class='nav-link' href='./'>Profile</a>
                        <!--<button class='dropdown-item'>--><a class='nav-link' href='../logout.php'>Logout</a>

                    </div>
                
            </li>
            <li><span style='display: inline-block;width:175px'></span></li>
        </ul>
    </div>
</nav>"
?>
