<div class="topbar">
    <!-- LOGO -->
    <div class="topbar-left">
        <div class="text-center">
            <a href="index.html" class="logo"><h3 style="color: white;">World Data Review</h3></a>

        </div>
    </div>
    <!-- Button mobile view to collapse sidebar menu -->
    <div class="navbar navbar-default" role="navigation">
        <div class="container">
            <div class="">
                <div class="pull-left">
                    <button type="button" class="button-menu-mobile open-left waves-effect waves-light">
                        <i class="ion-navicon"></i>
                    </button>
                    <span class="clearfix"></span>
                </div>
                </form>

                <ul class="nav navbar-nav navbar-right pull-right">
                    
                   
                    <li class="dropdown">
                        <a href="" class="dropdown-toggle profile waves-effect waves-light" data-toggle="dropdown" aria-expanded="true"><img src="uploads/<?php echo $_SESSION['admin_photo'] ?>" alt="" class="img-circle"> </a>
                        <ul class="dropdown-menu">
                            <li><a href="javascript:void(0)" onclick="document.getElementById('logout-form').submit()"> Logout</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <form action="AdminController/AdminController.php" method="POST" id="logout-form">
                <input type="hidden" name="action" value="logout" >
            </form>
            <!--/.nav-collapse -->
        </div>
    </div>
</div>