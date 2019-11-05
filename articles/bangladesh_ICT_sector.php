<?php
include "../admin/dbconnection/DbConnection.php";
include "../admin/AdminModel/DataModel.php";
include "../admin/AdminModel/articleModel.php";
$get = new Student();
$alldatas = $get->getAllData();
$getDy = new Article();
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
    <style>
        p{
            color:black;
        }
    </style>

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
<div class="main-menu">
    <?php include 'nav.php'; ?>
</div>


<div class="latest-news-marquee-area">
    <div class="simple-marquee-container">
        <div class="marquee">
            <ul class="marquee-content-items">


                <?php foreach ($alldatas as $data):?>
                    <li><a href="<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>"><span class="latest-news-time"><?php $e = explode(' ', $data['date']); $time =explode(':',$e[1]); echo $time[0].':'.$time[1]  ?></span><?php  echo $data['title']; ?></a></li>
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
                    <h2 class="font-pt" style=""><?php echo $data['title'] ?></h2>
                    <p class="gazette-post-date"><?php
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
                        ?></p>
                    <!-- Post Thumbnail -->
                    <div style="">
                        <img src="../admin/uploads/<?php echo $data['author_photo']; ?>" alt="author_photo" width="30px;">
                        <span> 
                            <a href="../writers/<?php echo $data['author_link'] ?>?id=<?php echo $data['id'] ?>" target="_blank">
                                <?php echo $data['author'] ?>
                            </a>
                        </span>
                    </div>
                    <div class="blog-post-thumbnail my-5">
                        <p style="color:black">
                            Bangladesh is one of the fastest-growing economies in South Asia.
                            According to the World Bank 2019 report, Bangladesh is among the five
                            fastest-growing economies in the world. Furthermore, the International
                            Monetary Fund (IMF) has indicated that the economy of Bangladesh should
                            grow at a rate of 7.3 percent this year, which is the second-highest
                            in the world after Rwanda.
                        </p>
                        <img src="photos/bangladeshICTSector/article1.jpg" width="200px;" style="float: left;margin-right:10px;" alt="">
                        <p style="color:black">
                            Being the most attractive investment destination in South Asia, Bangladesh experienced a record level of foreign direct investment (FDI) inflow in the country last year, topping the list in South Asia.
                            Since “Digital Bangladesh” is an integral part of the present government’s Vision 2021, the country is committed to achieving substantial progress in the ICT sector, making “Digital Bangladesh” a reality.
                        </p>
                        <p style="color:black">
                            Having four key priorities and well-timed policies, the present government is fostering and shaping a new Bangladesh, transforming the agro-based country into a digital Bangladesh.
                        </p>

                        <img src="../admin/uploads/<?php echo $data['photo'] ?>" alt="post-thumb" width="100%">
                        <h5>The success of Bangladesh’s ICT sector</h5>
                        <p style="color:black">
                            Acknowledging the economic advantages of the expansion of the ICT sector,
                            the government has taken several growth-oriented policies to utilize the abundant human resources of the country, resulting in numerous IT innovations and digital entrepreneurship. As a result, the ICT sector of \
                            Bangladesh has achieved tremendous success under the present government.
                        </p>
                        <p style="color:black">
                            Bangladesh is now exporting software and IT related products to more than
                            50 countries across the globe. Moreover, the number of countries availing IT services from Bangladesh is increasing gradually. According to BASIS report, Bangladesh has earned $800 million in the year of 2017 by exporting ICT products and services. This tremendous success in the ICT sector has become possible by means of some judicious and progressive steps
                            taken by the present government and the stakeholders of the ICT sector.
                        </p>
                        <img src="photos/bangladeshICTSector/article2.png" >
                        <p>Source: Bangladesh Association of Software and Information Services (BASIS)</p>
                        <h5>Bangladesh: A home of IT outsourcing</h5>
                        <p style="color:black">With burgeoning export revenues from the ICT sector, Bangladesh
                            has become a great home for IT outsourcing. The business process
                            outsourcing (BPO) industry in Bangladesh is rising at a breakneck speed. The rapid digitalization of Bangladesh, including easy internet access in the urban areas and some inclusive government and non-government initiatives to promote freelancing, have contributed to the recent growth of freelancing activities in the country. As a result, Bangladesh has already become the second-largest country in supplying online labour, according to the Oxford Internet Institute (OII). About 500,000 active freelancers are regularly working out of 650,000 registered freelancers in the country, making $100 million annually, according to the ICT Division of Bangladesh.
                        </p>
                        <img src="photos/bangladeshICTSector/article3.png" >
                        <p>Source: Oxford Internet Institute</p>
                        <p style="color:black">
                            According to present data, India is the largest supplier of
                            online labour which is close to 24% of total freelancing workers, followed by Bangladesh (16%) and the US (12%). Different kinds of freelancing services are provided by different countries. For instance, while the technology and software development category is ruled by the Indian freelancers, sales and marketing
                            support services are dominated by Bangladeshi freelancers.
                        </p>
                        <h5>Internet connectivity and digitally savvy consumers</h5>
                        <p style="color:black">
                            With the availability of cheaper smartphones, the rapid rise in social
                            networking (23 million-plus Facebook users), and the increasing emergence of digitally-savvy consumers in the country, Bangladesh is experiencing tremendous growth in the ICT sector. This can be attributed to the country’s immense
                            progress in internet connectivity, mobile phone usage, and ICT education.
                        </p>

                        <img src="photos/bangladeshICTSector/article4.jpg" >
                        <p style="color:black">
                            According to the data produced by Internet World Stats, the number of internet users in Asia has grown extraordinarily in the last ten years, including Bangladesh. The data illustrates that the number of internet users in Bangladesh have increased
                            exponentially from 0.1 million to 80 million during the previous 18
                            years.
                        </p>
                        <h5>Government’s policy and support: The main catalysts for growth</h5>
                        <p style="color:black">
                            Putting forward the concept of “Digital Bangladesh” as part of its 
                            election manifesto, the present government of Bangladesh has played a significant role in promoting the ICT sector as a growth engine for Bangladesh. As the main driver of “Digital Bangladesh” from the Prime Minister’s Office, a2ihas triggered the swift expansion of technologies in delivering public services to citizens. 
                            Some of the key milestones of a2i have been the following:

                        <ul>
                            <li> - 8.5 million students learning from multimedia content developed by 100,000 teachers</li>
                            <li> - 105 digital talking textbooks for all visually disabled students</li>
                            <li> - 103 innovations incubated through Service Innovation Fund</li>
                            <li> - $28.15 million earnings for Digital Center Entrepreneurs</li>
                        </ul>
                        </p>
                        <p style="color:black">
                            The ICT ministry has played an impressive role in creating awareness and transforming ideas into reality through programs like Digital World, ICT Expo, National Hackathon, Connecting Startup Bangladesh, etc. Moreover, recent steps taken by the government have been very helpful in
                            enhancing the attractiveness of the ICT sector. Key incentives include:
                        <ul>
                            <li>- 100 percent foreign ownership of companies</li>
                            <li>- Small-cap exchange for the easier raising of capital/listing on capital markets</li>
                            <li>- Software park which facilitates high-speed internet connection trade facilities, similar to Export Processing Zones (EPZs)</li>
                        </ul>
                        </p>

                        <p style="color:black">
                            Also, the government’s quest to reduce the internet bandwidth price has been one of the major reasons for the fast internet penetration in Bangladesh. Statistics
                            show that there is a continuous reduction in the bandwidth price every year.
                        </p>
                        <img src="photos/bangladeshICTSector/article4.jpg" >
                        <h5>Building synergy: Associations and the government together</h5>
                        <p style="color:black">
                            Along with the Bangladesh government, many associations and professional bodies related to the ICT sector are also playing a vibrant role in developing this emerging sector of Bangladesh, creating tremendous synergy. For example, Bangladesh Computer Society (BCS), Bangladesh Computer Samity (BCS), Bangladesh Association of Software and Information Services (BASIS), Bangladesh Computer Writers Association (BCWA), and Bangladesh Association for Information Technology Education (BAITE) are some of the important organisations and professional bodies that are actively working besides the government to promote this sector in the country. Moreover, the presence of these professional associations ensures better governance in the sector,
                            creating a sustainable business environment in the country.
                        </p>
                        <h5>Government is fostering a digital ecosystem</h5>
                        <p style="color:black">
                            Due to the government’s intense promotion for the ICT sector, the young generation in Bangladesh has become very enthusiastic and appropriately identified ICT as the future economic driver in the country. Additionally, numerous computer clubs, IT festivals, programming contests, IT-related seminars, and discussions are taking place on a rolling basis in many cities of the country. There are about 16 magazines and four digital IT magazines are being published
                            monthly and some daily newspapers publish IT pages once/twice a week <br>
                            Many private and public organizations in Bangladesh have been working very closely with potential entrepreneurs to promote different start-ups by providing them with mentoring, coaching, and accelerator programs. Companies such as Startup Dhaka also known as SD Asia, Team Engine, Hub Dhaka, EMK Center, Better Stories, Preneur Lab, etc are vigorously working to accelerate start-ups in the country. As a result, it has been observed that the number of new startups has increased significantly. More and more people are taking the risk to start their own company with the help of ICT. Surprisingly, the study suggests that the start-ups are owned not only by first-time
                            entrepreneurs but also by different professionals from diverse fields.
                        </p>
                        <h5>Future prospects</h5>
                        <p style="color:black">
                            The usage of digital technology is creating countless opportunities for Bangladeshi youth, accelerating economic growth and social welfare. The ICT sector has a market of 160 million-plus people, where consumer spending is around USD 130 billion-plus and growing at 6 percent annually.
                            Therefore, Bangladesh has a great prospect in the ICT industry.<br>
                            Like other emerging Asian countries, including India, China, and Malaysia, Bangladesh is ready to exploit opportunities offered by the Digital Age and catch up with technologically advanced countries. Bangladesh is now heavily investing in IT sectors and should continue its endeavour, reaping considerable benefits in higher employment/income, and accelerating growth. With the continuous growth of the ICT sector and numerous new IT companies, the Bangladesh government is creating thousands of jobs for Bangladeshi youth, eradicating the unemployment problem in the country. By investing in IT parks, the government is also attracting foreign companies to set up their companies in Bangladesh, bringing billions of dollars in investment and generating many new jobs. The recent boom in the sector, therefore, indicates that Bangladesh is going to harness the full growth opportunities
                            of digital technologies and catch up faster with high-income countries.
                        </p>
                    </div>


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
                                <h3><a href="../articles/<?php echo $data['link'] ?>?link=<?php echo $data['link'] ?>" class="font-pt mb-2"><?php echo $data['title']; ?></a></h3>

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

                        <?php foreach ($new as $data) :?>
                            <!-- Single Breaking News Widget -->
                            <div class="single-breaking-news-widget">
                                <img src="../admin/uploads/<?php echo $data['photo'] ?>" alt="">
                                <div class="breakingnews-title">
                                    <p style="color:black">New Article</p>
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
<!--                    <div class="advert-widget">-->
<!--                        <div class="widget-title">-->
<!--                            <h5>Advert</h5>-->
<!--                        </div>-->
<!--                        <div class="advert-thumb mb-30">-->
<!--                            <a href="#"><img src="../img/bg-img/add.png" alt=""></a>-->
<!--                        </div>-->
<!--                    </div>-->

                    <!-- Subscribe Widget -->
                    <!-- <div class="subscribe-widget">
                        <div class="widget-title">
                            <h5>subscribe</h5>
                        </div>
                        <div class="subscribe-form">
                            <form action="../admin/AdminController/SubscriberController.php" method="POST">
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

<?php include 'footer.php'?>

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