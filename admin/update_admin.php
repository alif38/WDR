<?php
session_start();
if(empty($_SESSION['user_id']) && $_SESSION['admin_email']== '' ) {
    header('location:admin-login.php');
    $_SESSION['msg'] = " <div class='alert alert-danger'>Please Login First</div>";
    exit();
}
include 'dbconnection/DbConnection.php';
include "AdminModel/AdminModel.php";
$get = new Admin();
$data = $get->GetAdminByID($_GET['id'])
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ADD || ADMIN</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
    <meta content="Admin Dashboard" name="description" />
    <meta content="alif" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <link rel="shortcut icon" href="../img/logo1.png" >

    <!-- DataTables -->
    <link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>


    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <?php include 'include/topbar.php'; ?>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    <?php include 'include/sidebar.php'; ?>
    <!-- Left Sidebar End -->

    <!-- Start right Content here -->

    <div class="content-page">
        <!-- Start content -->
        <div class="content">
            <div class="container">

                <!-- Page-Title -->
                <div class="row">
                    <div class="col-sm-12">
                        <div class="page-header-title">
                            <h4 class="pull-left page-title">Update</h4>
                            <ol class="breadcrumb pull-right">
                                <li><a href="#">WORLD DATA REVIEW</a></li>
                                <li class="active">Update admin</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>

                <!--   ================== Body ============-->
                <div class="row">
                    <!-- Basic example -->
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading"><h3 class="panel-title">Update Admin</h3></div>
                            <div class="panel-body">
                                <form role="form" action="AdminController/AdminController.php" method="POST" enctype="multipart/form-data">
                                    <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg'];} ?>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Full Name</label>
                                            <input type="text" class="form-control" name="name" value="<?php echo $data['name'] ?>" placeholder="Full Name" >
                                        </div>
                                        <div class="form-group">
                                            <label >E-mail</label>
                                            <input type="email" class="form-control" name="email" value="<?php echo $data['email'] ?>" placeholder="email">
                                        </div>
                                        <div class="form-group">
                                            <label >Password</label>
                                            <input type="password" class="form-control" name="password" value="<?php echo $data['password'] ?>" placeholder="Password" >
                                        </div>

                                        <div class="form-group">
                                            <label >Phone Number</label>
                                            <input type="text" class="form-control" name="phone" value="<?php echo $data['phone'] ?>" placeholder="Phone Number">
                                        </div>

                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group">
                                            <label >Designation</label>
                                            <input type="text" class="form-control" name="designation" value="<?php echo $data['designation'] ?>" placeholder="Designation" >
                                        </div>

                                        <div class="form-group">
                                            <label >Address</label>
                                            <input type="text" class="form-control" name="address" value="<?php echo $data['address'] ?>" placeholder="Address">
                                        </div>
                                        <div class="form-group">
                                            <label >Photo</label>
                                            <input type="file" class="form-control" name="photo">
                                            <img src="uploads/<?php echo $data['photo'] ?>" alt="admin_photo">
                                        </div>
                                        <div class="form-group">
                                            <label >Status</label>

                                            <select class="form-control" name="status">
                                                <option value="<?php echo $data['status'] ?>"><?php echo $data['status'] ?></option>
                                                <option value="active">Active</option>
                                                <option value="inactive">Inactive</option
                                            </select>
                                            <input type="hidden" name="action" value="update">
                                            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                            <input type="hidden" name="old_photo" value="<?php echo $data['photo'] ?>">
                                        </div>

                                    </div>
                                    <div class="col-sm-12">
                                        <button type="submit" class="btn btn-primary waves-effect waves-light">Submit</button>
                                    </div>

                                </form>

                            </div><!-- panel-body -->
                        </div> <!-- panel -->
                    </div> <!-- col-->

                </div> <!-- container -->

            </div> <!-- content -->


            <?php include 'include/footer.php'; ?>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    <?php unset($_SESSION['msg']) ;?>
</body>
</html>