<?php echo "
<nav class='navbar navbar-expand-sm navbar-dark bg-dark p-0'>
    <div class='container'>
        <img src='../img/icons/image13.png' width='10%' height='10%'><a href='index.php' class='navbar-brand'>Salon Sanrooka</a>
        <button class='navbar-toggler' data-toggle='collapse' data-target='#navbarNav'>
            <span class='navbar-toggler-icon'></span>
        </button>
        <span style='display: inline-block;width=350px'></span>
        <div class='collapse navbar-collapse justify-content-end' style='align-content: right;' id='navbarNav'>


            <ul class='navbar-nav ml-auto justify-content-end'>
                <li class='nav-item dropdown mr-3'>
                    <a href='#' class='nav-link dropdown-toggle' data-toggle='dropdown'>
                        <img src='../img/icons/user.png' width='35%' height='35%'></i>
                    </a>
                    <div class='dropdown-menu' style='z-index: 999'>
                        <a href='AdminProfile.php' class='dropdown-item'>
                            <i class='fa fa-user-circle'></i> Profile
                        </a>
                        <a href='logout.php' class='dropdown-item'>
                            <i class='fa fa-gear'></i> Logout
                        </a>
                    </div>
                </li>

            </ul>
        </div>
    </div>
</nav>
"
?>