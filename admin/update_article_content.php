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
$data = $gets->getDataById($_GET['id']);
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>ADD || ARTICLE CONTENT</title>
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
                                <li><a href="#">ARTICLE</a></li>
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
                            <div class="panel-heading"><h3 class="panel-title">Add Article Content</h3></div>
                            <div class="panel-body">
                                <form role="form" action="AdminController/articleController.php" method="POST" enctype="multipart/form-data">
                                    <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg'];} ?>
                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label >Author Name</label>

                                            <select class="form-control" name="author" >
                                                <option value="<?php echo $data['author']; ?>"><?php echo $data['author']; ?></option>
                                                <option value="Azaz Jaman">Azaz Jaman</option>
                                                <option value="Naimur Rahman">Naimur Rahman</option>
                                                <option value="Leanne Kemp">Leanne Kemp</option>
                                                <option value="Justine">Justine D’Souza</option>
                                            </select>
                                            <input type="hidden">
                                        </div>

                                        <div class="form-group">
                                            <label >Author Photo</label>
                                            <input type="file" class="form-control" value="<?php echo $data['author_photo']; ?>" name="author_photo" >
                                        </div>

                                        <div class="form-group">
                                            <label >Image author</label>
                                            <input type="text" class="form-control" value="<?php echo $data['photo_author']; ?>" name="photo_author" >
                                        </div>


                                        <div class="form-group">
                                            <label >Article Link</label>
                                            <input type="text" class="form-control" value="<?php echo $data['article_link']; ?>" name="article_link" >
                                        </div>


                                        <div class="form-group">
                                            <label >Footer</label>
                                            <input type="text" class="form-control" value="<?php echo $data['footer']; ?>" name="footer">
                                        </div>


                                    </div>

                                    <div class="col-md-6">

                                        <div class="form-group">
                                            <label >Heading 1</label>
                                            <input type="text" class="form-control" value="<?php echo $data['h1']; ?>" name="h1" >
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Paragraph 1</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="2" value="<?php echo $data['p1']; ?>" name="p1"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label >Article Photo 1</label>
                                            <input type="file" class="form-control" value="<?php echo $data['photo1']; ?>" name="photo1">
                                        </div>

                                        <div class="form-group">
                                            <label >Heading 2</label>
                                            <input type="text" class="form-control" value="<?php echo $data['h2']; ?>" name="h2" >
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Paragraph 2</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="2" value="<?php echo $data['p2']; ?>" name="p2"></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label >Article Photo 2</label>
                                            <input type="file" class="form-control" value="<?php echo $data['photo2']; ?>" name="photo2">
                                        </div>

                                        <div class="form-group">
                                            <label >Heading  3</label>
                                            <input type="text" class="form-control" value="<?php echo $data['h3']; ?>" name="h3" >
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Paragraph 3</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="2" value="<?php echo $data['p3']; ?>" name="p3"></textarea>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <label >Article Photo 3</label>
                                            <input type="file" class="form-control" value="<?php echo $data['photo3']; ?>" name="photo3">
                                        </div>

                                        <div class="form-group">
                                            <label >Heading 4</label>
                                            <input type="text" class="form-control" value="<?php echo $data['h4']; ?>" name="h4" >
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Paragraph 4</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="2" value="<?php echo $data['p4']; ?>" name="p4"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label >Article Photo 4</label>
                                            <input type="file" class="form-control" value="<?php echo $data['photo4']; ?>" name="photo4">
                                        </div>

                                        <div class="form-group">
                                            <label >Heading 5</label>
                                            <input type="text" class="form-control" value="<?php echo $data['h5']; ?>" name="h5" >
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Paragraph 5</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="2" value="<?php echo $data['p5']; ?>" name="p5"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label >Article Photo 5</label>
                                            <input type="file" class="form-control" value="<?php echo $data['photo5']; ?>" name="photo5">
                                        </div>

                                        <div class="form-group">
                                            <label >Heading 6</label>
                                            <input type="text" class="form-control" value="<?php echo $data['h6']; ?>" name="h6" >
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Paragraph 6</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="2" value="<?php echo $data['p6']; ?>" name="p6"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label >Article Photo 6</label>
                                            <input type="file" class="form-control" value="<?php echo $data['photo6']; ?>" name="photo6">
                                        </div>

                                        <div class="form-group">
                                            <label >Heading 7</label>
                                            <input type="text" class="form-control" name="h7" >
                                        </div>

                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Paragraph 7</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="2" name="p7"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label >Article Photo 7</label>
                                            <input type="file" class="form-control" value="<?php echo $data['photo7']; ?>" name="photo7">
                                        </div>

                                        <div class="form-group">
                                            <label >Heading 8</label>
                                            <input type="text" class="form-control" value="<?php echo $data['h8']; ?>" name="h8" >
                                        </div>
                                        <div class="form-group">
                                            <label class="col-md-2 control-label">Paragraph 8</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="2" value="<?php echo $data['p8']; ?>" name="p8"></textarea>
                                            </div>
                                        </div>

                                        <div class="form-group">
                                            <label >Article Photo 8</label>
                                            <input type="file" class="form-control" value="<?php echo $data['photo8']; ?>" name="photo8">
                                        </div>


                                        <input type="hidden" name="action" value="update">
                                        <input type="hidden" name="id" value="<?php echo $data['id'] ?>">



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