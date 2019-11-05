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
$datas = $getData->getAllData();
?>
    <!DOCTYPE html>
    <html>
<head>
    <meta charset="utf-8" />
    <title>HOME CONTENT || LIST</title>
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
                                <li><a href="#">WORLD DATA REVIEW </a></li>
                                <li class="active">Content List</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">List of Home Content</h3>
                            </div>
                            <div class="panel-body"><?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg'];} ?>
                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Title</th>
                                        <th>Article Link</th>
                                        <th>Author</th>
                                        <th>Author Photo</th>
                                        <th>Author Link</th>
                                        <th>Region</th>
                                        <th>Region Link</th>
                                        <th>Topic</th>
                                        <th>Topic Link</th>
                                        <th>Date</th>
                                        <th>Photo</th>
                                        <th>Text</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($datas as $key=>$data) : ?>
                                        <tr>
                                            <td><?php echo $key+1;?> </td>
                                            <td><?php echo $data['title'];?> </td>
                                            <td><?php echo $data['link'];?> </td>
                                            <td><?php echo $data['author'];?> </td>
                                            <td><img src="uploads/<?php echo $data['author_photo'] ;?> " width='50px;' alt=""></td>
                                            <td><?php echo $data['author_link'];?> </td>
                                            <td><?php echo $data['region'];?> </td>
                                            <th><?php echo $data['region_link'];?> </th>
                                            <td><?php echo $data['topic'];?> </td>
                                            <td><?php echo $data['topic_link'];?> </td>
                                            <td><?php echo $data['date'];?> </td>
                                            <td><img src="uploads/<?php echo $data['photo'] ;?> " width='50px;' alt=""></td>
                                            <td><?php echo $data['text'];?> </td>
                                            <td><?php echo $data['status'];?> </td>
                                            <td>
                                                <div><a href="update_home_content.php?id=<?php echo $data['id']; ?>"><button class="btn btn-primary btn-sm " title="Edit">Update</button></a></div>
                                                <form action="AdminController/EditorController.php" method="POST">
                                                    <input type="hidden" name="action" value="delete">
                                                    <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
                                                    <input type="submit" class="btn btn-danger btn-sm " title="Delete" value="Delete&nbsp;" >
                                                </form>
                                            </td>
                                        </tr>
                                    <?php endforeach; ?>

                                    </tbody>
                                </table>

                            </div>
                        </div>
                    </div>

                </div> <!-- End Row -->

                <!-- End Row -->


            </div> <!-- container -->

        </div> <!-- content -->


        <?php include 'include/footer.php'; ?>

    </div>
    <!-- End Right content here -->

</div>
<!-- END wrapper -->



</body>
    </html><?php unset($_SESSION['msg']) ?>
