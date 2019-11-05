<?php
include "../admin/dbconnection/DbConnection.php";
include "../admin/AdminModel/DataModel.php";
$get = new Student();
$alldatas = $get->getData();
$region= $_GET['region'];
$new = $get->latestData();
$dontmiss = $get->dontMissData();
$popular = $get->popularData();
$digital = $get->digitalEconomyData();
$datas = $get->getDataByRegion($region);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><?php echo $_GET['region'] ?> || World Data Review</title>

    <link rel="stylesheet" type="text/css" href="nav.css">
    <!-- Favicon  -->
    <link rel="icon" href="../img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="../assets/css/core-style.css">
    <link rel="stylesheet" href="../assets/style.css">
    <link rel="stylesheet" href="../css/custom.css">
    <!-- Responsive CSS -->
    <link href="../assets/css/responsive.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="../js/custom.js"></script>
    <!------ Include the above in your HEAD tag ---------->

</head>

<body>
<!-- Header Area Start -->
<header class="header-area">
    <div class="top-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Breaking News Area -->
                <div class="col-12 col-md-6">
                    <div class="breaking-news-area">
                        <h5 class="breaking-news-title">Articles</h5>
                        <div id="breakingNewsTicker" class="ticker">
                            <ul>
                                <?php foreach ($alldatas as $data):?>
                                    <li><a href="../articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>"><?php  echo $data['title']; ?></a></li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Middle Header Area -->
    <div class="middle-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <!-- Logo Area -->
                <div class="col-12 col-md-4">
                    <div class="logo-area">
                        <a href="../index.html"><img src="../img/logo1.png" alt="logo" width="200px"></a>
                    </div>
                </div>
                <!-- Header Advert Area -->
                <div class="col-12 col-md-8">
                    <div class="header-advert-area">
                        <a href="#"><img src="../img/bg-img/top-advert.png" alt="header-add"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Bottom Header Area -->
    <div class="bottom-header">
        <div class="container h-100">
            <div class="row h-100 align-items-center">
                <div class="col-12">
                    <div class="main-menu">
                        <?php include'nav.php'; ?>

                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- Header Area End -->


<section class="main-content-wrapper">
    <div class="container-fluid"><!-- ====================Home Article =========================-->
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="main_head">
                        <h2 style="color:black">ARTICLES</h2>
                    </div>
                </div>
                <!-- ======================= Main  ============================-->
                <div class="col-12 col-lg-9">
                    <!-- ====================Home Article ============================-->

                    <?php foreach ($datas as $data) :?>
                        <div class="home-article" style="margin-top: 5px;">

                            <div>

                                <h4 style="color:#74b9ff;"><a href="../articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>"><?php echo $data['title'] ?></a></h4>
                                <p style="font-size: 14px;line-height: 17px;margin-bottom: -5px;color:grey;"><a href="#">World Data Review</a> | <a href="../Country/<?php echo $data['region_link'] ?>?region=<?php echo $data['region'] ?>"><?php echo $data['region'] ?></a> | <a href="../Topic/<?php echo $data['topic_link'] ?>?topic=<?php echo $data['topic'] ?>"><?php echo $data['topic'] ?></a> |
                                    <?php
                                    $e =explode(' ',$data['date']);
                                    $date = $e[0];
                                    $time = $e[1];
                                    $date_ex = explode('-',$date);
                                    $month = $date_ex[1];
                                    if($month == '10'){
                                        $month = 'October';
                                    }
                                    elseif($month == '1'){
                                        $month = 'January';
                                    }
                                    elseif($month == '2'){
                                        $month = 'February';
                                    }
                                    elseif($month == '3'){
                                        $month = 'March';
                                    }
                                    elseif($month == '4'){
                                        $month = 'April';
                                    }
                                    elseif($month == '5'){
                                        $month = 'May';
                                    }
                                    elseif($month == '6'){
                                        $month = 'June';
                                    }
                                    elseif($month == '7'){
                                        $month = 'july';
                                    }
                                    elseif($month == '8'){
                                        $month = 'August';
                                    }
                                    elseif($month == '9'){
                                        $month = 'September';
                                    }
                                    elseif($month == '11'){
                                        $month = 'November';
                                    }
                                    elseif($month == '12'){
                                        $month = 'December';
                                    }
                                    echo $month ."-".$date_ex[2]."-".$date_ex[0];
                                    ?>

                                </p>
                                <p style="color:#74b9ff">
                                    <a href="../writers/<?php echo $data['author_link'] ?>?id=<?php echo $data['id'] ?>" target="_blank">
                                        <?php echo $data['author'] ?>
                                    </a>
                                </p>
                            </div>
                            <div>
                                <div class="row">
                                    <div class="col-3">
                                        <img src="../admin/uploads/<?php echo $data['photo'] ?>"  alt="post-thumb">
                                    </div>
                                    <div class="col-9">
                                        <p  style="font-size: 15px;line-height: 17px;color: black;">
                                            <?php echo $data['text'] ?>
                                        </p>
                                    </div>
                                </div>
                            </div>


                            <div class="post-continue-btn" id="hidden" style="display: none;">
                                <a href="#" class="font-pt">Hide<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                            </div>
                            <!--  <div class="post-continue-reading-share d-sm-flex align-items-center justify-content-between mt-30">

                                 <div class="post-share-btn-group">
                                     <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                     <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                     <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                     <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                 </div>
                             </div> -->
                        </div>

                    <?php endforeach; ?>

                    <!-- ====================Popular  Article ============================-->
                    <div class="gazette-todays-post section_padding_100_50">
                        <div class="gazette-heading">
                            <h4>today’s most popular</h4>
                        </div>
                        <!-- Single Today Post -->
                        <?php foreach ($popular as $data) : ?>
                            <div class="gazette-single-todays-post d-md-flex align-items-start mb-50">
                                <div class="todays-post-thumb">
                                    <img src="../img/blog-img/2.jpg" alt="">
                                </div>
                                <div class="todays-post-content">
                                    <!-- Post Tag -->
                                    <div class="gazette-post-tag">
                                        <a href="../writers/<?php echo $data['author_link'] ?>"><?php echo $data['author'] ?></a>
                                    </div>
                                    <h3><a href="../articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>" class="font-pt mb-2"><?php echo $data['title']; ?></a></h3>
                                    <!--                                <span class="gazette-post-date mb-2">--><?php
                                    //                                    $e =explode(' ',$data['date']);
                                    //                                    $date = $e[0];
                                    //                                    $time = $e[1];
                                    //                                    $date_ex = explode('-',$date);
                                    //                                    $month = $date_ex[1];
                                    //                                    if($month == '10'){
                                    //                                        $month = 'October';
                                    //                                    }
                                    //                                    elseif($month == '1'){
                                    //                                        $month = 'January';
                                    //                                    }
                                    //                                    elseif($month == '2'){
                                    //                                        $month = 'February';
                                    //                                    }
                                    //                                    elseif($month == '3'){
                                    //                                        $month = 'March';
                                    //                                    }
                                    //                                    elseif($month == '4'){
                                    //                                        $month = 'April';
                                    //                                    }
                                    //                                    elseif($month == '5'){
                                    //                                        $month = 'May';
                                    //                                    }
                                    //                                    elseif($month == '6'){
                                    //                                        $month = 'June';
                                    //                                    }
                                    //                                    elseif($month == '7'){
                                    //                                        $month = 'july';
                                    //                                    }
                                    //                                    elseif($month == '8'){
                                    //                                        $month = 'August';
                                    //                                    }
                                    //                                    elseif($month == '9'){
                                    //                                        $month = 'September';
                                    //                                    }
                                    //                                    elseif($month == '11'){
                                    //                                        $month = 'November';
                                    //                                    }
                                    //                                    elseif($month == '12'){
                                    //                                        $month = 'December';
                                    //                                    }
                                    //                                    echo $month ."-".$date_ex[2]."-".$date_ex[0];
                                    //                                    ?><!--</span>-->
                                    <!--                                <a href="../#" class="post-total-comments">3 Comments</a>-->
                                    <p><?php echo $data['text']; ?></p>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>

                <!-- ==================== Side Bar ============================-->
                <div class="col-12 col-lg-3 col-md-6">
                    <div class="sidebar-area">

                        <!-- New Article Widget -->
                        <!--=============================New Article==============================-->

                        <div class="breaking-news-widget">
                            <div class="widget-title">
                                <h5>New Article</h5>
                            </div>

                            <?php foreach ($new as $data) :?>
                                <!-- Single Breaking News Widget -->
                                <div class="single-breaking-news-widget">
                                    <img src="../admin/uploads/<?php echo $data['photo'] ?>" alt="">
                                    <div class="breakingnews-title">
                                        <p>New Article</p>
                                    </div>
                                    <div class="breaking-news-heading gradient-background-overlay" >
                                        <a href="../articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>" class="font-pt" style="color:whitesmoke;font-size: 20px;"><?php echo $data['title']; ?></a>
                                    </div>
                                </div>


                            <?php endforeach; ?>

                        </div>

                        <!-- Don't Miss Widget -->
                        <!--=============================Don't Miss====================-->
                        <div class="donnot-miss-widget">
                            <div class="widget-title">
                                <h5>Don't miss</h5>
                            </div>
                            <!-- Single Don't Miss Post -->
                            <?php foreach ($dontmiss as $data) :?>
                                <div class="single-dont-miss-post d-flex mb-30">
                                    <div class="dont-miss-post-thumb">
                                        <img src="../admin/uploads/<?php echo $data['photo'] ?>" alt="dont miss">
                                    </div>
                                    <div class="dont-miss-post-content">
                                        <a href="../articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>" class="font-pt"><?php echo $data['title']; ?></a>
                                        <span><?php
                                            $e = explode(' ', $data['date']);
                                            $date = $e[0];
                                            $time = $e[1];
                                            $date_ex = explode('-', $date);
                                            $month = $date_ex[1];
                                            if ($month == '10') {
                                                $month = 'October';
                                            } elseif ($month == '1') {
                                                $month = 'January';
                                            } elseif ($month == '2') {
                                                $month = 'February';
                                            } elseif ($month == '3') {
                                                $month = 'March';
                                            } elseif ($month == '4') {
                                                $month = 'April';
                                            } elseif ($month == '5') {
                                                $month = 'May';
                                            } elseif ($month == '6') {
                                                $month = 'June';
                                            } elseif ($month == '7') {
                                                $month = 'july';
                                            } elseif ($month == '8') {
                                                $month = 'August';
                                            } elseif ($month == '9') {
                                                $month = 'September';
                                            } elseif ($month == '11') {
                                                $month = 'November';
                                            } elseif ($month == '12') {
                                                $month = 'December';
                                            }
                                            echo $month . "-" . $date_ex[2] . "-" . $date_ex[0];
                                            ?></span>
                                    </div>
                                </div>
                            <?php endforeach; ?>

                        </div>

                        <!-- Advert Widget -->
                       <!--  <div class="advert-widget">
                            <div class="widget-title">
                                <h5>Advert</h5>
                            </div>
                            <div class="advert-thumb mb-30">
                                <a href="#"><img src="../img/bg-img/add.png" alt=""></a>
                            </div>
                        </div> -->

                        <!-- Subscribe Widget -->
                        <!-- <div class="subscribe-widget">
                            <div class="widget-title">
                                <h5>subscribe</h5>
                            </div>
                            <div class="subscribe-form">
                                <form action="#">
                                    <input type="email" name="email" id="subs_email" placeholder="Your Email">
                                    <button type="submit">subscribe</button>
                                </form>
                            </div>
                        </div> -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Area End -->

</section>
<!-- Catagory Posts Area End -->



<!-- ==================== Footer Area Start ===============-->
<?php include 'footer.php'?>
<!-- Footer Area End -->
<script type="text/javascript" src="nav.js"></script>
<!-- jQuery (Necessary for All JavaScript Plugins) -->
<script src="../assets/js/jquery/jquery-2.2.4.min.js"></script>
<!-- Popper js -->
<script src="../assets/js/popper.min.js"></script>
<!-- Bootstrap js -->
<script src="../assets/js/bootstrap.min.js"></script>
<!-- Plugins js -->
<script src="../assets/js/plugins.js"></script>
<!-- Active js -->
<script src="../assets/js/active.js"></script>
</body>

</html>