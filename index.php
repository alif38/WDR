<?php
include "admin/dbconnection/DbConnection.php";
include "admin/AdminModel/DataModel.php";
$get = new Student();
$datas = $get->getData();
$new = $get->latestData();
$dontmiss = $get->dontMissData();
$popular = $get->popularData();
$digital = $get->digitalEconomyData();
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
    <title>Home || World Data Review</title>

    <link rel="stylesheet" type="text/css" href="nav.css">
    <!-- Favicon  -->
    <link rel="icon" href="img/logo1.png">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="assets/css/core-style.css">
    <link rel="stylesheet" href="assets/style.css">
    <link rel="stylesheet" href="css/custom.css">
    <!-- Responsive CSS -->
    <link href="assets/css/responsive.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <script src="js/custom.js"></script>
    <!------ Include the above in your HEAD tag ---------->

</head>

<body>
    <!-- ==================== Header Area Start =====================-->
    <header class="header-area">
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <!-- Breaking News Area -->
                    <div class="col-12 col-md-6">
                        <div class="breaking-news-area">
                            <h5 class="breaking-news-title">NEW ARTICLES</h5>
                            <div id="breakingNewsTicker" class="ticker">
                                <ul>
                                    <?php foreach ($datas as $data):?>
                                        <li><a href="articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>"><?php  echo $data['title']; ?></a></li>
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
                            <a href="index.html"><img src="img/logo1.png" alt="logo"></a>
                        </div>
                    </div>
                    <!-- Header Advert Area -->
<!--                    <div class="col-12 col-md-8">-->
<!--                        <div class="header-advert-area">-->
<!--                            <a href="#"><img src="img/bg-img/top-advert.png" alt="header-add"></a>-->
<!--                        </div>-->
<!--                    </div>-->
                </div>
            </div>
        </div>
        <!-- Bottom Header Area -->

        <div class="bottom-header">
                <div class="row align-items-center">
                    <div class="col-12">
                        <?php include'nav.php'; ?>
                    </div>
                    <div class="col-12">
                        <!-- Latest News Marquee Area Start -->
                        <div class="latest-news-marquee-area">
                            <div class="simple-marquee-container">
                                <div class="marquee">
                                    <ul class="marquee-content-items">


                                        <?php foreach ($datas as $data):?>
                                            <li>
                                                <a href="articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>">
                                                    <span class="latest-news-time"><?php $e = explode(' ', $data['date']); $time =explode(':',$e[1]); echo $time[0].':'.$time[1]  ?>
                                                    </span>
                                                    <?php  echo $data['title'];?>
                                        </a></li>
                                        <?php endforeach; ?>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

            </div>
        </div>
    </header>
    <!-- Header Area End -->


    <!-- ==================== Main Section =========================-->
    <section class="main-content-wrapper">
        <!-- ====================Home Article =========================-->
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
                <div class="gazette-welcome-post home-article" style="margin-top: 5px;">

                    <div>

                        <h4 class="article-tile"><a href="articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>"><?php echo $data['title'] ?></a></h4>

                        <p style="font-size: 14px;line-height: 17px;margin-bottom: -5px;color:grey;"><a href="#">World Data Review</a>
                            | <a href="Country/<?php echo $data['region_link'] ?>?region=<?php echo $data['region'] ?>"><?php echo $data['region'] ?></a>
                            | <a href="Topic/<?php echo $data['topic_link'] ?>?topic=<?php echo $data['topic'] ?>"><?php echo $data['topic'] ?></a>
                            |
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
                            echo $month ." ".$date_ex[2]." ".$date_ex[0];
                            ?>
                            
                        </p>
                        <p style="color:#74b9ff">
                            <a href="writers/<?php echo $data['author_link'] ?>?id=<?php echo $data['id'] ?>" target="_blank">
                                <?php echo $data['author'] ?>
                            </a>
                        </p>
                    </div>
                    <div>
                        <div class="row">
                            <div class="col-3">
                                <img src="admin/uploads/<?php echo $data['photo'] ?>"  alt="post-thumb">
                            </div>
                            <div class="col-9">
                                <p  style="font-size: 15px;line-height: 17px;color: black;">
                                    <?php echo $data['text'] ?> <a href="articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>">Continue reading...</a>
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
                                <img src="img/blog-img/2.jpg" alt="">
                            </div>
                            <div class="todays-post-content">
                                <!-- Post Tag -->
                                <div class="gazette-post-tag">
                                    <a href="writers/<?php echo $data['author_link'] ?>"><?php echo $data['author'] ?></a>
                                </div>
                                <h3><a href="articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>" class="font-pt mb-2"><?php echo $data['title']; ?></a></h3>
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
<!--                                <a href="#" class="post-total-comments">3 Comments</a>-->
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
                                    <img src="admin/uploads/<?php echo $data['photo'] ?>" alt="">
                                    <div class="breakingnews-title">
                                        <p>New Article</p>
                                    </div>
                                    <div class="breaking-news-heading gradient-background-overlay" >
                                        <a href="articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>" class="font-pt" style="color:whitesmoke;font-size: 20px;"><?php echo $data['title']; ?></a>
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
                                    <img src="admin/uploads/<?php echo $data['photo'] ?>" alt="dont miss">
                                </div>
                                <div class="dont-miss-post-content">
                                    <a href="articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>" class="font-pt"><?php echo $data['title']; ?></a>
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
<!--                        <div class="advert-widget">-->
<!--                            <div class="widget-title">-->
<!--                                <h5>Advert</h5>-->
<!--                            </div>-->
<!--                            <div class="advert-thumb mb-30">-->
<!--                                <a href="#"><img src="img/bg-img/add.png" alt=""></a>-->
<!--                            </div>-->
<!--                        </div>-->

                        <!-- Subscribe Widget -->
                        <div class="subscribe-widget">
                            <div class="widget-title">
                                <h5>subscribe</h5>
                            </div>
                            <div class="subscribe-form">
                                <form action="admin/AdminController/SubscriberController.php" method="POST">
                                    <input type="email" name="email" id="subs_email" placeholder="Your Email">
                                    <button type="submit">subscribe</button>
                                    <input type="hidden" name="action" value="add">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <!-- Main Content Area End -->



    </section>


    <!-- ==================== Footer Area Start ===============-->
    <footer class="footer-area bg-img background-overlay" style="background-image: url(img/bg-img/4.jpg);">
        <!-- Top Footer Area -->
        <div class="top-footer-area section_padding_100_70">
            <div class="container">
                <div class="row">
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">Regions</h4>
                            </div>

                                <ul class="footer-widget-menu">
                                    <li><a href='Country/India.php?region=India'>India</a></li>
                                    <li><a href='Country/Pakistan.php?region=Pakistan'>Pakistan</a></li>
                                    <li><a href="Country/Bangladesh.php?region=Bangladesh">Bangladesh</a></li>
                                    <li><a href='Country/Sri_Lanka.php?region=Sri Lanka'>Sri Lanka</a></li>
                                    <li><a href='Country/Nepal.php?region=Nepal'>Nepal</a></li>
                                    <li><a href='Country/Afghanistan.php?region=Afghanistan'>Afghanistan</a></li>
                                    <li><a href='Country/Bhutan.php?region=Bhutan'>Bhutan</a></li>
                                    <li><a href='Country/Maldives.php?region=Maldives'>Maldives</a></li>
                                </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">Topic</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href='Topic/agriculture.php?topic=Agriculture'>Agricultural</a></li>
                                <li><a href='Topic/poverty.php?topic=Poverty'>Poverty</a></li>
                                <li><a href='Topic/digital_economy.php?topic=Digital Economy'>Digital Economy</a></li>
                                <li><a href='Topic/demographics.php?topic=Demographics'>Demographics</a></li>
                                <li><a href='Topic/economy_growth.php?topic=Economy and Growth'>Economy & Growth</a></li>
                                <li><a href='Topic/foreign_trade.php?topic=Foreign Trade'>Foreign Trade</a></li>
                                <li><a href='Topic/education.php?topic=Education'>Education</a></li>
                                <li><a href='Topic/energy.php?topic=Energy'>Energy</a></li>
                                <li><a href='Topic/environment.php?topic=Environment'>Environment</a></li>
                                <li><a href='Topic/food_security.php?topic=Food Security'>Food Security</a></li>
                                <li><a href='Topic/health.php?topic=Health'>Health</a></li>
                                <li><a href='Topic/land_use.php?topic=Land Use'>Land Use</a></li>
                                <li><a href='Topic/nationaldefense.php?topic=National Defense'>National Defense</a></li>
                                <li><a href='Topic/research_development.php?topic=Research and Development'>Research and Development</a></li>
                                <li><a href='Topic/telecommunication.php?topic=Telecommunication'>Telecommunication</a></li>
                                <li><a href='Topic/transportation.php?topic=Transportation'>Transportation</a></li>
                                <li><a href='Topic/water.php?topic=Water'>Water</a></li>
                                <li><a href='Topic/companies.php?topic=Companies'>Companies</a></li>
                                <li><a href='Topic/world_rankings.php?topic=World Rankings'>World Rankings</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">Database</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href="#">Agricultural</a></li>
                                <li><a href="#">Digital Economy</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">Publications</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href="#">Books</a></li>
                                <li><a href="#">Magazine</a></li>]
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">Evenet</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href="#">Conference</a></li>
                                <li><a href="#">Seminar</a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- Single Footer Widget -->
                    <div class="col-12 col-sm-6 col-md-4 col-lg-2">
                        <div class="single-footer-widget">
                            <div class="footer-widget-title">
                                <h4 class="font-pt">About</h4>
                            </div>
                            <ul class="footer-widget-menu">
                                <li><a href='about.php'>Who We Are   </a></li>
                                <li><a href='about.php#vision'>Mission & Vision  </a></li>
                                <li><a href='about.php#audience'>Audience & Coverage  </a></li>
                                <li><a href='about.php#founder'>Founder & President    </a></li>
                            </ul>
                        </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Footer Area -->
        <div class="bottom-footer-area">
            <div class="container h-100">
                <div class="row h-100 align-items-center justify-content-center">
                    <div class="col-12">
                        <div class="copywrite-text">
                            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | <a href="#" target="_blank">naimurrahmanalif5@gmail.com</a>|<a href="admin/admin-login.php" target="_blank">Writers</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</p>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!-- Footer Area End -->





    <script type="text/javascript" src="nav.js"></script>
    <!-- jQuery (Necessary for All JavaScript Plugins) -->
    <script src="assets/js/jquery/jquery-2.2.4.min.js"></script>
    <!-- Popper js -->
    <script src="assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- Plugins js -->
    <script src="assets/js/plugins.js"></script>
    <!-- Active js -->
    <script src="assets/js/active.js"></script>
</body>

</html>