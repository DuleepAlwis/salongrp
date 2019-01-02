<?php
echo "
<div id='wrapper'>
        <nav class='navbar navbar-default navbar-cls-top ' role='navigation' style='margin-bottom: 0'>
            <div class='navbar-header'>
                <button type='button' class='navbar-toggle' data-toggle='collapse' data-target='.sidebar-collapse'>
                    <span class='sr-only'>Toggle navigation</span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                    <span class='icon-bar'></span>
                </button>
                <a class='navbar-brand' href='index.html'>COMPANY NAME</a>
            </div>

            <div class='header-right'>

              <a href='message-task.html' class='btn btn-info' title='New Message'><b>30 </b><i class='fa fa-envelope-o fa-2x'></i></a>
                <a href='message-task.html' class='btn btn-primary' title='New Task'><b>40 </b><i class='fa fa-bars fa-2x'></i></a>
                <a href='login.html' class='btn btn-danger' title='Logout'><i class='fa fa-exclamation-circle fa-2x'></i></a>


            </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class='navbar-default navbar-side' role='navigation'>
            <div class='sidebar-collapse'>
                <ul class='nav' id='main-menu'>
                    <li>
                        <div class='user-img-div'>
                            <img src='../assets/img/user.png' class='img-thumbnail' />

                            <div class='inner-text'>
                                Admin
                            <br />
                                <small></small>
                            </div>
                        </div>

                    </li>


                    <li>
                        <a href='AdminDashboard.php'><i class='fa fa-dashboard '></i>Dashboard</a>
                    </li>
                    <li>
                        <a href='#'><i class='fa fa-desktop '></i>Employee <span class='fa arrow'></span></a>
                         <ul class='nav nav-second-level'>
                            <li>
                                <a href='AdminempRegister.php'><i class='fa fa-toggle-on'></i>Add Employee</a>
                            </li>
                            <li>
                                <a href='AdminempView.php'><i class='fa fa-bell '></i>View Employee</a>
                            </li>
                            
                           
                        </ul>
                    </li>
                     <li>
                        <a href='#'><i class='fa fa-yelp '></i>Stock <span class='fa arrow'></span></a>
                         <ul class='nav nav-second-level'>
                            <li>
                                <a href='AdminProduct.php'><i class='fa fa-coffee'></i>Products</a>
                            </li>
                            <li>
                                <a href='AdminProductReport.php'><i class='fa fa-flash '></i>Products Report</a>
                            </li>
                             
                            
                           
                        </ul>
                    </li>
                    
            </div>

        </nav>
        
        

"
?>