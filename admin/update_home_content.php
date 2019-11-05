<?php
session_start();
if(empty($_SESSION['user_id']) && $_SESSION['admin_email']== '' ) {
    header('location:admin-login.php');
    $_SESSION['msg'] = " <div class='alert alert-danger'>Please Login First</div>";
    exit();
}

include "dbconnection/DbConnection.php";
include "AdminModel/AdminModel.php";
include "AdminModel/DataModel.php";

$getData = new Student();
$id= $_GET['id'];
$data = $getData->getDataById($id);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ADD || CONTENT</title>
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
                            <h4 class="pull-left page-title">Dashboard</h4>
                            <ol class="breadcrumb pull-right">
                                <li><a href="#">WORLD DATA REVIEW</a></li>
                                <li class="active">CONTENT</li>
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
                            <div class="panel-heading"><h3 class="panel-title">Add Content</h3></div>
                            <div class="panel-body">
                                <form role="form" action="AdminController/EditorController.php" method="POST" enctype="multipart/form-data">
                                    <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg'];} ?>
                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <label >Author Name</label>
                                            <input type="text" class="form-control" name="author" value="<?php echo $data['author'] ?>" >
                                        </div>
                                        <div class="form-group">
                                            <label >Author's Photo</label>
                                            <input type="file" class="form-control" value="" name="author_photo">
                                            <img src="uploads/<?php echo $data['author_photo'] ;?> " width='50px;' alt="">
                                        </div>

                                        <div class="form-group">
                                            <label >Author Link</label>
                                            <input type="text" class="form-control" name="author_link" value="<?php echo $data['author_link'] ?>" >
                                        </div>

                                        <div class="form-group">
                                            <label >Title</label>
                                            <input type="text" class="form-control" name="title" value="<?php echo $data['title'] ?>"  >
                                        </div>


                                        <div class="form-group">
                                            <label >Content</label>
                                            <input type="text" class="form-control" name="text" value="<?php echo $data['text'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label >Region</label>

                                            <select class="form-control" name="region">
                                                <option value="<?php echo $data['region'] ?>"><?php echo $data['region'] ?></option>
                                                <option value="India">India</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
                                                <option value="Nepal">Nepal</option>
                                                <option value="Afghanistan">Afghanistan</option>
                                                <option value="Bhutan">Bhutan</option>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label >Region Link</label>
                                            <input type="text" class="form-control" name="region_link" value="<?php echo $data['region_link'] ?>">
                                        </div>

                                    </div>

                                    <div class="col-md-6">



                                        <div class="form-group">
                                            <label >Topic</label>

                                            <select class="form-control" name="topic" >
                                                <option value="<?php echo $data['topic'] ?>"><?php echo $data['topic'] ?></option>
                                                <option value="Digital Economy">Digital Economy</option>
                                                <option value="Agriculture">Agriculture</option>
                                                <option value="Poverty">Poverty</option>
                                                <option value="Education">Education</option>
                                                <option value="Energy">Energy</option>
                                                <option value="Demographics">Demographics</option>
                                                <option value="Economy and Growth">Economy & Growth</option>
                                                <option value="Foreign Trade">Foreign Trade</option>
                                                <option value="Environment">Environment</option>
                                                <option value="Food Security">Food Security</option>
                                                <option value="Health">Health</option>
                                                <option value="Land Use">Land Use</option>
                                                <option value="National Defense">National Defense</option>
                                                <option value="Research and Development">Research and Development</option>
                                                <option value="Telecommunication">Telecommunication</option>
                                                <option value="Transportation">Transportation</option>
                                                <option value="Water">Water</option>
                                                <option value="Companies">Companies</option>
                                                <option value="World Rankings">World Rankings</option>
                                            </select>
                                            <input type="hidden">
                                        </div>

                                        <div class="form-group">
                                            <label >Topic Link</label>
                                            <input type="text" class="form-control" name="topic_link" value="<?php echo $data['topic_link'] ?>">
                                        </div>

                                        <div class="form-group">
                                            <label >Photo</label>
                                            <input type="file" class="form-control" name="photo" ><img src="uploads/<?php echo $data['photo'] ?>" width="60px" alt="">
                                        </div>


                                        <div class="form-group">
                                            <label >Link</label>
                                            <input type="text" class="form-control" name="link" value="<?php echo $data['link'] ?>">
                                        </div>
                                        <div class="form-group">
                                            <label >Status</label>

                                            <select class="form-control" name="status" >
                                                <option value="<?php echo $data['status'] ?>"><?php echo $data['status'] ?></option>
                                                <option value="latest">Latest</option>
                                                <option value="popular">Popular</option>
                                                <option value="dontmiss">Don't Miss</option>
                                            </select>
                                            <input type="hidden">
                                        </div>
                                        <input type="hidden" name="action" value="update">
                                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
                                        <input type="hidden" name="old_logo" value="<?=$data['photo']?>">
                                        <input type="hidden" name="old_author_photo" value="<?=$data['author_photo']?>">

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