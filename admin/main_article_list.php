<?php
session_start();
if(empty($_SESSION['user_id']) && $_SESSION['admin_email']== '' ) {
    header('location:admin-login.php');
    $_SESSION['msg'] = " <div class='alert alert-danger'>Please Login First</div>";
    exit();
}
include "dbconnection/DbConnection.php";
include "AdminModel/articleModel.php";
$gets = new Article();
$datas = $gets->getDatas();
?>
    <!DOCTYPE html>
    <html>
<head>
    <meta charset="utf-8" />
    <title>ARTICLE || LIST</title>
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
                                <li><a href="#">HOME</a></li>
                                <li class="active">Article List</li>
                            </ol>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-primary">
                            <div class="panel-heading">
                                <h3 class="panel-title">List of Article</h3>
                            </div>
                            <div class="panel-body"><?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg'];} ?>
                                <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                                    <thead>
                                    <tr>
                                        <th>#SL</th>
                                        <th>Article Link</th>
                                        <th>Author Name</th>
                                        <th>Author's photo</th>
                                        <th>Article photo author</th>
                                        <th>Heading 1</th>
                                        <th>Heading 2</th>
                                        <th>Heading 3</th>
                                        <th>Heading 4</th>
                                        <th>Heading 5</th>
                                        <th>Heading 6</th>
                                        <th>Heading 7</th>
                                        <th>Heading 8</th>
                                        <th>Paragraph 1</th>
                                        <th>Paragraph 2</th>
                                        <th>Paragraph 3</th>
                                        <th>Paragraph 4</th>
                                        <th>Paragraph 5</th>
                                        <th>Paragraph 6</th>
                                        <th>Paragraph 7</th>
                                        <th>Paragraph 8</th>
                                        <th>Article Photo 1</th>
                                        <th>Article Photo 2</th>
                                        <th>Article Photo 3</th>
                                        <th>Article Photo 4</th>
                                        <th>Article Photo 5</th>
                                        <th>Article Photo 6</th>
                                        <th>Article Photo 7</th>
                                        <th>Article Photo 8</th>
                                        <th>Footer</th>
                                        <th>Action</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($datas as $key=>$data) : ?>
                                        <tr>
                                            <td><?php echo $key+1;?> </td>
                                            <td><?php echo $data['article_link'];?> </td>
                                            <td><?php echo $data['author'];?> </td>
                                            <td><?php echo $data['author_photo'];?> </td>
                                            <td><?php echo $data['photo_author'];?> </td>
                                            <td><?php echo $data['h1'];?> </td>
                                            <td><?php echo $data['h2'];?> </td>
                                            <td><?php echo $data['h3'];?> </td>
                                            <td><?php echo $data['h4'];?> </td>
                                            <td><?php echo $data['h5'];?> </td>
                                            <td><?php echo $data['h6'];?> </td>
                                            <td><?php echo $data['h7'];?> </td>
                                            <td><?php echo $data['h8'];?> </td>
                                            <td><?php echo $data['p1'];?> </td>
                                            <td><?php echo $data['p2'];?> </td>
                                            <td><?php echo $data['p3'];?> </td>
                                            <td><?php echo $data['p4'];?> </td>
                                            <td><?php echo $data['p5'];?> </td>
                                            <td><?php echo $data['p6'];?> </td>
                                            <td><?php echo $data['p7'];?> </td>
                                            <td><?php echo $data['p8'];?> </td>
                                            <td><?php echo $data['photo1'];?> <img src="../admin/uploads/<?php echo $data['photo1'];?>" alt="" width="50px;"> </td>
                                            <td><?php echo $data['photo2'];?> <img src="../admin/uploads/<?php echo $data['photo2'];?>" alt="" width="50px;"></td>
                                            <td><?php echo $data['photo3'];?> <img src="../admin/uploads/<?php echo $data['photo3'];?>" alt="" width="50px;"></td>
                                            <td><?php echo $data['photo4'];?> <img src="../admin/uploads/<?php echo $data['photo4'];?>" alt="" width="50px;"></td>
                                            <td><?php echo $data['photo5'];?> <img src="../admin/uploads/<?php echo $data['photo5'];?>" alt="" width="50px;"></td>
                                            <td><?php echo $data['photo6'];?> <img src="../admin/uploads/<?php echo $data['photo6'];?>" alt="" width="50px;"></td>
                                            <td><?php echo $data['photo7'];?> <img src="../admin/uploads/<?php echo $data['photo7'];?>" alt="" width="50px;"></td>
                                            <td><?php echo $data['photo8'];?> <img src="../admin/uploads/<?php echo $data['photo8'];?>" alt="" width="50px;"></td>
                                            <td><?php echo $data['footer'];?> ></td>
                                            <td>
                                                <div><a href="update_article_content.php?id=<?php echo $data['id']; ?>"><button class="btn btn-primary btn-sm " title="Edit">Update</button></a></div>
                                                <form action="AdminController/articleController.php" method="POST">
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
    </html><?php unset($_SESSION['msg']); ?>
