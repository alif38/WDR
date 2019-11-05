<?php
include "admin/dbconnection/DbConnection.php";
include "admin/AdminModel/DataModel.php";
$get = new Student();
$datas = $get->getData();
$new = $get->latestData();
$dontmiss = $get->dontMissData();
$popular = $get->popularData();
?>
<!DOCTYPE html>
<html>
<head><!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>World Data Review | About Us</title>

    <link rel="stylesheet" type="text/css" href="nav.css">
    <!-- Favicon  -->
    <link rel="icon" href="assets/img/core-img/favicon.ico">

    <!-- Core Style CSS -->
    <link rel="stylesheet" href="assets/css/core-style.css">
    <link rel="stylesheet" href="assets/style.css">

    <!-- Responsive CSS -->
    <link href="assets/css/responsive.css" rel="stylesheet">

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</head>
</head>
<body>
	<div class="main-menu">
        <?php include'nav.php'; ?>
    </div>


    <div class="container">
    	<section class="main-content-wrapper section_padding_100">
        <div class="container">
            <div class="row">
                <div class="col-12 col-lg-9">
                    <!-- Gazette Welcome Post -->
                    <div class="gazette-welcome-post">
                        <!-- Post Tag -->
                        <div class="gazette-post-tag">
                            <a href="#">About Us</a>
                        </div>
                        <h2 class="font-pt">Who We Are </h2>
                        <!-- Post Excerpt -->
                        <p><strong>World Dara Review (WDR)</strong>, a non-profit organization, started its journey in 2019 to fight against the problem of data inaccessibility in least-developed and developing countries across the globe. WDR has created a single, digital, open data platform that includes macro and micro-level data of these countries. At present, WDR is covering only the South Asian countries.  </p>

						<p><strong>World Dara Review (WDR)</strong>, an open data platform for the South Asian countries, is a great addition to the public goods of these developing nations. Moreover, our attractive infographics, online reports, interactive maps, and other data visualization techniques would make data not only interesting but also informative to the young generation. </p>

						<p>We believe that the world has the resources and the knowledge to do much better. But we do not make enough use of the wealth of existing research and data that allows us to understand the global and local issues that we face. World Dara Review (WDR) is committed to  </p>
                        <!-- Reading More -->
                        <div class="post-continue-reading-share d-sm-flex align-items-center justify-content-between mt-30">
                            <div class="post-share-btn-group">
                                <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div style="border-bottom: 2px solid #dfe6e9;"></div><br><br>

                    <!-- =======================Vision & Mission============ -->

					<div class="gazette-welcome-post" id="vision">
                        <h2 class="font-pt">Vision & Mission </h2>
                        <!-- Post Excerpt -->
                        <p>Recognizing that access to information is crucial for the benefit of society in the third world countries, World Dara Review (WDR) envisions to become the most comprehensive open data platform for the least-developed and developing countries across the globe. Similarly, the foundations of WDR’s mission is to promote equitable access to data for all citizens. </p>
             
                    </div>
                    <div style="border-bottom: 2px solid #dfe6e9;"></div><br><br>

                    <!-- =======================Audience & Coverage============ -->

					<div class="gazette-welcome-post" id="audience">
                        <h2 class="font-pt">Audience & Coverage </h2>
                        <!-- Post Excerpt -->
                        <p>World Dara Review (WDR) initially covers the South Asian countries only.  </p>
                     
                                <img src="img/4VHA5f.png" alt="audiene" width="500px">
                           
                    </div>
                    <div style="border-bottom: 2px solid #dfe6e9;"></div><br><br>

                    <!-- =======================Founder & President============ -->

					<div class="gazette-welcome-post" id="founder">
                        <h2 class="font-pt ">Founder & President </h2>

                        <h4 class="font-pt">Azaz Zaman</h4>
                        <!-- Post Excerpt -->
                        <p><strong>Azaz Zaman</strong> is the founder and president of World Data Review (WDR), a non-profit organization fighting against data inaccessibility problem in South Asia. WDR collects scatted data from different sources and store on a single digital platform. He is also the CEO of Eduzone International consultancy firm and the chairman of Madinatul Orphanage. </p>

						<p>Currently, Mr. Zaman is working as an Assistant Professor at Bangladesh Army International University of Science & Technology (BAIUST). Before joining BAIUST, he worked as a Lecturer at the State University of Bangladesh (SUB) for one and half years.</p> 

						<p>He has also worked as a researcher in several national and international research firms, including IPAG (Bangladesh) and EPSCoR (US). He regularly publishes articles in both national and international journals and daily newspapers covering various local and global issues. His writings have been featured in  World Economic Forum (Switzerland), Fair Observer (US), The Print (India), Modern Diplomacy (Europe), Global Research (Canada), Europe String (Europe), Gazate Impakt (Albania), Bangla Tribune, The Daily Sun, The Financial Express, The New Nation, The Perspective, and others. He was selected as one of the outstanding young researchers by the South-Central Climate Science Center, US, in 2014.  </p>

						<p>He completed his BBA in Finance at NSU, Bangladesh and MSc in Applied Economics at Oklahoma State University, US. </p>
                     
                                
                    </div>
					<div class="gazette-welcome-post" id="chief">
                        <h2 class="font-pt ">Editor & Chief </h2>

                        <h4 class="font-pt">Azaz Zaman</h4>
                        <!-- Post Excerpt -->
                        <p><strong>Azaz Zaman</strong> is the founder and president of World Data Review (WDR), a non-profit organization fighting against data inaccessibility problem in South Asia. WDR collects scatted data from different sources and store on a single digital platform. He is also the CEO of Eduzone International consultancy firm and the chairman of Madinatul Orphanage. </p>

						<p>Currently, Mr. Zaman is working as an Assistant Professor at Bangladesh Army International University of Science & Technology (BAIUST). Before joining BAIUST, he worked as a Lecturer at the State University of Bangladesh (SUB) for one and half years.</p> 

						<p>He has also worked as a researcher in several national and international research firms, including IPAG (Bangladesh) and EPSCoR (US). He regularly publishes articles in both national and international journals and daily newspapers covering various local and global issues. His writings have been featured in  World Economic Forum (Switzerland), Fair Observer (US), The Print (India), Modern Diplomacy (Europe), Global Research (Canada), Europe String (Europe), Gazate Impakt (Albania), Bangla Tribune, The Daily Sun, The Financial Express, The New Nation, The Perspective, and others. He was selected as one of the outstanding young researchers by the South-Central Climate Science Center, US, in 2014.  </p>

						<p>He completed his BBA in Finance at NSU, Bangladesh and MSc in Applied Economics at Oklahoma State University, US. </p>
                     
                                
                    </div>
                    <div style="border-bottom:2px solid #dfe6e9;"></div><br><br>

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
                        <!-- <div class="advert-widget">
                            <div class="widget-title">
                                <h5>Advert</h5>
                            </div>
                            <div class="advert-thumb mb-30">
                                <a href="#"><img src="img/bg-img/add.png" alt=""></a>
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
        <!-- Main Content Area End -->

    </section>
    </div>


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
                                <li><a href="Country/Bangladesh.php?region=Bangladesh">Bangladesh</a></li>
                                <li><a href='Country/India.php?region=India'>India</a></li>
                                <li><a href="Country/Pakistan.php?region=Pakistan">Pakistan</a></li>
                                <li><a href="Country/srilanka.php?region=Sri Lanka">Sri Lanka</a></li>
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
                                <li><a href="Topic/agriculture.php?topic=Agriculture">Agricultural</a></li>
                                <li><a href="Topic/digital_economy.php?topic=Digital Economy">Digital Economy</a></li>
                                <li><a href="Topic/poverty.php?topic=Poverty">Poverty</a></li>
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
                                <li><a href="#">Seminar</a></li>]
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
</body>

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
</html>