<?php
session_start();
if(empty($_SESSION['user_id']) && $_SESSION['admin_email']== '' ) {
    header('location:admin-login.php');
    $_SESSION['msg'] = " <div class='alert alert-danger'>LOL..! Login First</div>";
    exit();
}
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

    <link rel="shortcut icon" href="../assets/images/baiust.png">

    <!-- DataTables -->
    <link href="../assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/datatables/responsive.bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="../assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>


    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/icons.css" rel="stylesheet" type="text/css">
    <link href="../assets/css/style.css" rel="stylesheet" type="text/css">

</head>


<body class="fixed-left">

<!-- Begin page -->
<div id="wrapper">

    <!-- Top Bar Start -->
    <?php include '../include/topbar.php'; ?>
    <!-- Top Bar End -->


    <!-- ========== Left Sidebar Start ========== -->

    <?php include '../include/sidebar.php'; ?>
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
                                <form role="form" action="../AdminController/EditorController.php" method="POST" enctype="multipart/form-data">
                                    <?php if(isset($_SESSION['msg'])){ echo $_SESSION['msg'];} ?>
                                    <div class="col-md-6">


                                        <div class="form-group">
                                            <label >Author Name</label>
                                            <input type="text" class="form-control" name="author"required>
                                        </div>

                                        <div class="form-group">
                                            <label >Author Link</label>
                                            <input type="text" class="form-control" name="author_link" required>
                                        </div>

                                        <div class="form-group">
                                            <label >Title</label>
                                            <input type="text" class="form-control" name="title"  required>
                                        </div>


                                        <div class="form-group">
                                            <label >Content</label>
                                            <input type="text" class="form-control" name="text">
                                        </div>

                                        <div class="form-group">
                                            <label >Region</label>

                                            <select class="form-control" name="region">
                                                <option value="">Select any</option>
                                                <option value="India">India</option>
                                                <option value="Bangladesh">Bangladesh</option>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Sri Lanka">Sri Lanka</option>
<!--                                                <option value="cse31">CSE L-3 T-I</option>-->
<!--                                                <option value="cse32">CSE L-3 T-II</option>-->
<!--                                                <option value="cse41">CSE L-4 T-I</option>-->
<!--                                                <option value="cse42">CSE L-4 T-II</option>-->
<!---->
<!--                                                <option value="eee11">EEE L-1 T-I</option>-->
<!--                                                <option value="eee12">EEE L-1 T-II</option>-->
<!--                                                <option value="eee21">EEE L-2 T-I</option>-->
<!--                                                <option value="eee22">EEE L-2 T-II</option>-->
<!--                                                <option value="eee31">EEE L-3 T-I</option>-->
<!--                                                <option value="eee32">EEE L-3 T-II</option>-->
<!--                                                <option value="eee41">EEE L-4 T-I</option>-->
<!--                                                <option value="eee42">EEE L-4 T-II</option>-->
<!---->
<!--                                                <option value="ce11">CE L-1 T-I</option>-->
<!--                                                <option value="ce12">CE L-1 T-II</option>-->
<!--                                                <option value="ce21">CE L-2 T-I</option>-->
<!--                                                <option value="ce22">CE L-2 T-II</option>-->
<!--                                                <option value="ce31">CE L-3 T-I</option>-->
<!--                                                <option value="ce32">CE L-3 T-II</option>-->
<!--                                                <option value="ce41">CE L-4 T-I</option>-->
<!--                                                <option value="ce42">CE L-4 T-II</option>-->
<!---->
<!--                                                <option value="eng11">ENG L-1 T-I</option>-->
<!--                                                <option value="eng12">ENG L-1 T-II</option>-->
<!--                                                <option value="eng21">ENG L-2 T-I</option>-->
<!--                                                <option value="eng22">ENG L-2 T-II</option>-->
<!--                                                <option value="eng31">ENG L-3 T-I</option>-->
<!--                                                <option value="eng32">ENG L-3 T-II</option>-->
<!--                                                <option value="eng41">ENG L-4 T-I</option>-->
<!--                                                <option value="eng42">ENG L-4 T-II</option>-->
<!---->
<!--                                                <option value="dba11">DBA L-1 T-I</option>-->
<!--                                                <option value="dba12">DBA L-1 T-II</option>-->
<!--                                                <option value="dba21">DBA L-2 T-I</option>-->
<!--                                                <option value="dba22">DBA L-2 T-II</option>-->
<!--                                                <option value="dba31">DBA L-3 T-I</option>-->
<!--                                                <option value="dba32">DBA L-3 T-II</option>-->
<!--                                                <option value="dba41">DBA L-4 T-I</option>-->
<!--                                                <option value="dba42">DBA L-4 T-II</option>-->
<!---->
<!--                                                <option value="law11">LAW L-1 T-I</option>-->
<!--                                                <option value="law12">LAW L-1 T-II</option>-->
<!--                                                <option value="law21">LAW L-2 T-I</option>-->
<!--                                                <option value="law22">LAW L-2 T-II</option>-->
<!--                                                <option value="law31">LAW L-3 T-I</option>-->
<!--                                                <option value="law32">LAW L-3 T-II</option>-->
<!--                                                <option value="law41">LAW L-4 T-I</option>-->
<!--                                                <option value="law42">LAW L-4 T-II</option>-->

                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label >Region Link</label>
                                            <input type="text" class="form-control" name="region_link" required>
                                        </div>

                                    </div>

                                    <div class="col-md-6">



                                        <div class="form-group">
                                            <label >Topic</label>

                                            <select class="form-control" name="topic" required>
                                                <option value="">Select any</option>
                                                <option value="Digital Economy">Digital Economy</option>
                                                <option value="Agriculture">Agriculture</option>
                                                <option value="Poverty">Poverty</option>
                                                <option value="Education">Education</option>
                                                <option value="Energy">Energy</option>
                                            </select>
                                            <input type="hidden">
                                        </div>

                                        <div class="form-group">
                                            <label >Topic Link</label>
                                            <input type="text" class="form-control" name="topic_link" required>
                                        </div>

                                        <div class="form-group">
                                            <label >Photo</label>
                                            <input type="file" class="form-control" name="photo">
                                        </div>


                                        <div class="form-group">
                                            <label >Link</label>
                                            <input type="text" class="form-control" name="link">
                                        </div>
                                        <div class="form-group">
                                            <label >Status</label>

                                            <select class="form-control" name="status" required>
                                                <option value="">Select any</option>
                                                <option value="latest">Latest</option>
                                                <option value="popular">Popular</option>
                                                <option value="dontmiss">Don't Miss</option>
                                            </select>
                                            <input type="hidden">
                                        </div>
                                        <input type="hidden" name="action" value="add">



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


            <?php include '../include/footer.php'; ?>

        </div>
        <!-- End Right content here -->

    </div>
    <!-- END wrapper -->


    <?php unset($_SESSION['msg']) ;?>
</body>
</html>