<?php
echo "
<div id='wrapper'>

    <!-- Sidebar -->
    <div id='sidebar-wrapper'>
        <ul class='sidebar-nav'>
            <li class='sidebar-brand'>
                <a href='#'>
                    Start Bootstrap
                </a>
            </li>
            <li>
                <a href='#'>Dashboard</a>
            </li>
            <li>
                <a href='#'>Shortcuts</a>
            </li>
            <li>
                <a href='#'>Overview</a>
            </li>
            <li>
                <a href='#'>Events</a>
            </li>
            <li>
                <a href='#'>About</a>
            </li>
            <li>
                <a href='#'>Services</a>
            </li>
            <li>
                <a href='#'>Contact</a>
            </li>
        </ul>
    </div>
    <!-- /#sidebar-wrapper -->

    <!-- Page Content -->
    <div id='page-content-wrapper'>


        <nav class='navbar navbar-expand-sm navbar-dark bg-dark p-0'>

            <div class='container'>
                <a href='#menu-toggle' class='btn btn-secondary' id='menu-toggle'>Toggle Menu</a>

                <a href='index.html' class='navbar-brand'>Salon Sanrooka</a>
                <button class='navbar-toggler' data-toggle='collapse' data-target='#navbarNav'>
                    <span class='navbar-toggler-icon'></span>
                </button>
                <span style='display: inline-block;width=350px'></span>
                <div class='collapse navbar-collapse justify-content-end' style='align-content: right;' id='navbarNav'>


                    <ul class='navbar-nav ml-auto justify-content-end'>
                        <li class='nav-item dropdown mr-3'>
                            <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>
                                <img src='../img/icon/user.png' width='35%' height='35%'></i><?php echo 'MkJ'; ?>
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
    </div>
    <!-- /#page-content-wrapper -->

</div>
    "
?>