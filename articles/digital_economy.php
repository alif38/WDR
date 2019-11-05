<?php
include "../admin/dbconnection/DbConnection.php";
include "../admin/AdminModel/DataModel.php";
include "../admin/AdminModel/articleModel.php";
$get = new Student();
$all = $get->getData();
//$getDy = new Article();
$link = $_GET['link'];
$data = $get->getDataByLink($link);
//$content = $getDy->getData($link);
$new = $get->latestData();
$dontmiss = $get->dontMissData();
$popular = $get->popularData();
$digital = $get->digitalEconomyData();
?>
<!DOCTYPE html>
<html>


<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title><?php echo $data['title'] ?> || World Data Review</title>

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

    <script src="js/custom.js"></script>
    <!------ Include the above in your HEAD tag ---------->

</head>

<body>
<div class="main-menu">
    <?php include 'nav.php'; ?>
</div>


<div class="latest-news-marquee-area">
    <div class="simple-marquee-container">
        <div class="marquee">
            <ul class="marquee-content-items">


                <?php foreach ($all as $data): ?>
                    <li><a href="<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>"><span
                                    class="latest-news-time"><?php $e = explode(' ', $data['date']);
                                $time = explode(':', $e[1]);
                                echo $time[0] . ':' . $time[1] ?></span><?php echo $data['title']; ?></a></li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</div>
<section class="main-content-wrapper section_padding_100">
    <div class="container" style="
         padding: 10px;
         box-shadow: 0px 15px 18px #888888;">
        <div class="row container">
            <!--                ================Articles===========-->

            <div class="col-12 col-lg-9">
                <div class="gazette-welcome-post">
                    <!-- Post Tag -->
                    <!-- <div class="gazette-post-tag">
                        <a href="#">Digital Economy and Society</a>
                    </div> -->
                    <h2 class="font-pt"><?php echo $data['title'] ?></h2>
                    <p class="gazette-post-date"><?php
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
                        echo $month . " " . $date_ex[2] . " " . $date_ex[0];
                        ?></p>
                    <!-- Post Thumbnail -->
                    <div style="">
                        <img src="../admin/uploads/<?php echo $data['author_photo']; ?>" alt="author_photo"
                             width="30px;"><span> 
                            <a href="../writers/<?php echo $data['author_link'] ?>?id=<?php echo $data['id'] ?>" target="_blank">
                                <?php echo $data['author'] ?>
                            </a></span>
                    </div>
                    <div class="blog-post-thumbnail my-5">
                        <img src="../admin/uploads/<?php echo $data['photo'] ?>" alt="post-thumb">
                        <p>Image: REUTERS/Andrew Biraj</p>
                    </div>
                    <p style="color: black">
                        With the advent of rapid digitalization, many developing countries like Bangladesh are focusing
                        on the digital
                        economy: a global market for digital outsourcing.<br>
                        The digitalization of a country’s economy not only drives innovation in its service industry, it
                        also fuels domestic job opportunities, enabling faster economic growth. In the quest to lower
                        costs and risks, many large corporations in developed nations like the US, UK and
                        Australia are turning to IT outsourcing from countries including Bangladesh, leading to a recent
                        boom in freelancing.<br>
                        Freelancing jobs include everything from computer programming to web design
                        tax preparation, and search engine optimization. This has generated a wide range of new
                        opportunities for people in emerging markets that did not previously exist. Asia has become the
                        number-one region for providing outsourcing services to the rest of the world.
                    </p>
                    <img src="photos/digital_econoy/img1.jpg" alt="">
                    <p>The Online Labour Index, by region
                        <span style="float: right">Image: Oxford Internet Institute</span>
                    </p>

                    <p style="color: black">
                        Freelancing offers many advantages, including the freedom to choose clients and projects, access
                        to the global market, and flexibility over location. Most importantly, freelancers can avoid the
                        long, frustrating
                        hours commuting in traffic in the Bangladeshi capital of Dhaka.<br>
                        Consequently, freelancing has become a popular career option for many Bangladeshi people,
                        offering a new and flexible source of income that suits their lifestyles.<br>
                        The rapid digitalization of Bangladesh - including easy internet access in urban areas and
                        government and non-government initiatives
                        to promote freelancing - has contributed to the recent growth of this way of working.<br>
                        As a result, Bangladesh has already become the second-largest supplier of online labour,
                        according to the Oxford Internet Institute (OII). About 500,000 active freelancers are working
                        regularly, out of 650,000 registered freelancers in the country; between them they are
                        generating
                        $100 million annually, according to the ICT Division of Bangladesh.
                    </p>

                    <img src="photos/digital_econoy/img2.jpg" alt="">
                    <p>The Online Labour Index, by country
                        <span style="float: right">Image: Oxford Internet Institute</span>
                    </p>
                    <p style="color: black">
                        India is the largest supplier of online labour, with close to 24% of total global freelance
                        workers, followed by Bangladesh (16%) and the US (12%). Different countries focus on different
                        sectors of freelancing services. For instance, technology and software development is dominated
                        by Indian freelancers,
                        while Bangladesh is the top supplier of sales and marketing support services.
                    </p>
                    <h4>Freelancing: a solution to the unemployment problem</h4>
                    <p style="color: black">
                        One in every 10 of Bangladesh's 44 million young people is unemployed, according to research by
                        World Vision Bangladesh. Moreover, thousands of graduates who are finishing their studies at
                        different public and private universities in Bangladesh are failing to find suitable positions
                        in the job market each year.<br>

                        As a result, the rate of educated unemployment in the country is increasing exponentially.
                        However, these young unemployed people can easily start their career by taking some IT training
                        and freelancing online. By doing so, they not only make a living but also contribute
                        to the economy by earning a salary in a valuable foreign currency.
                    </p>
                    <h4>
                        Opportunities for women
                    </h4>
                    <p style="color: black">
                        A lot of women in Bangladesh, including highly educated women, often sacrifice their careers in
                        order to take care of their families. Freelancing is becoming a preferred career option for many
                        Bangladeshi women, as it provides them with an opportunity to work from home.<br>

                        Bangladeshi women who are looking to take a step out of their traditional domestic roles are
                        finding freelance jobs to be a great solution. Research shows that in terms of the quality of
                        the work, Bangladesh's female freelancers have started gaining more credibility than their male
                        counterparts. Increasing women's
                        participation in freelancing is therefore boosting trust in the sector.
                    </p>
                    <h4>Challenges</h4>
                    <p style="color: black">
                        Government initiatives to develop the ICT service sector, such as creating a high-tech park in
                        every district, coupled with the low-cost workforce, have made Bangladesh a key player in the
                        global outsourcing market.<br>

                        Nevertheless, several challenges hinder the growth of this industry in Bangladesh. The absence
                        of an uninterrupted power supply is still a major problem for the country. Freelancing work,
                        like complex coding for software development, requires a high level of concentration, which is
                        often shattered by the frequent power cuts.<br>

                        A lack of quality internet services, along with higher broadband prices, is a major problem for
                        freelancers in rural areas. In spite of having broadband connections in some areas, freelancers
                        often find it too slow to suit their work.<br>

                        The lack of an easy payment system – especially for receiving payments from foreign clients – is
                        another problem for this fast-growing industry.<br>

                        And women's participation in freelancing, although increasing gradually, is still not high
                        enough.
                    </p>
                    <h4>The way forward</h4>
                    <p style="color: black">
                        Bangladesh is one of the few countries in Asia that has a huge youth population. Of its 163
                        million people, almost 65% are under the age of 25. This vast, young and strong human resource,
                        however, is still lacking in the knowledge necessary to thrive in the competitive global market.<br>

                        Although freelancing as a career has gained in popularity over the last few years, thousands of
                        Bangladesh's young people are in need of proper training and government support to help them
                        take advantage of this opportunity.<br>

                        The government should focus on turning unemployed young people into tech-savvy workers and
                        engage them in IT-based freelancing. In this way, the government of Bangladesh can attain its
                        goal of translating the vision of Digital Bangladesh into a reality by focusing on human capital
                        development for the global digital economy.<br>

                        Share
                    </p>
                </div>

                <div class="post-continue-btn" id="hidden" style="display: none;">
                    <a href="#" class="font-pt">Hide<i class="fa fa-chevron-right" aria-hidden="true"></i></a>
                </div>
                <div class="post-continue-reading-share d-sm-flex align-items-center justify-content-between mt-30">

                    <div class="post-share-btn-group">
                        <a href="#"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                    </div>
                </div>

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
                                <h3><a href="../articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>"
                                       class="font-pt mb-2"><?php echo $data['title']; ?></a></h3>
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

            <!-- ====================Sidebar ============================-->

            <div class="col-12 col-lg-3 col-md-6">
                <div class="sidebar-area">

                    <!-- New Article Widget -->
                    <!--=============================New Article==============================-->

                    <div class="breaking-news-widget">
                        <div class="widget-title">
                            <h5>New Article</h5>
                        </div>

                        <?php foreach ($new as $data) : ?>
                            <!-- Single Breaking News Widget -->
                            <div class="single-breaking-news-widget">
                                <img src="../admin/uploads/<?php echo $data['photo'] ?>" alt="">
                                <div class="breakingnews-title">
                                    <p>New Article</p>
                                </div>
                                <div class="breaking-news-heading gradient-background-overlay">
                                    <a href="../articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>"
                                       class="font-pt"
                                       style="color:whitesmoke;font-size: 20px;"><?php echo $data['title']; ?></a>
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
                        <?php foreach ($dontmiss as $data) : ?>
                            <div class="single-dont-miss-post d-flex mb-30">
                                <div class="dont-miss-post-thumb">
                                    <img src="../admin/uploads/<?php echo $data['photo'] ?>" alt="dont miss">
                                </div>
                                <div class="dont-miss-post-content">
                                    <a href="../articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>"
                                       class="font-pt"><?php echo $data['title']; ?></a>
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
<!--                    <div class="advert-widget">-->
<!--                        <div class="widget-title">-->
<!--                            <h5>Advert</h5>-->
<!--                        </div>-->
<!--                        <div class="advert-thumb mb-30">-->
<!--                            <a href="#"><img src="../img/bg-img/add.png" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->

                    <!-- Subscribe Widget -->
                   <!--  <div class="subscribe-widget">
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
                    </div> -->

                </div>
            </div>
        </div>
    </div>
    <!-- Main Content Area End -->

</section>
<?php include 'footer.php' ?>

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