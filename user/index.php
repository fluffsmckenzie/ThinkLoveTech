<?php
 include '../admin/scripts/config.php';
 include '../admin/classes/Merit.class.php';
?>
<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Strive to keep your self-care balanced.">
    <title>ThinkLove.tech - Manifest you!</title>
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.min.css"/>
    <link rel="stylesheet" href="assets/plugins/morrisjs/morris.min.css" />
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
</head>
<body class="theme-purple">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30"><img class="zmdi-hc-spin" src="images/thinklove.png" width="48" height="48" alt="Compass"></div>
        <p>Please wait...</p>
    </div>
</div>
<!-- Overlay For Sidebars -->
<div class="overlay"></div>


<?php
    include 'templates/top-bar.php';
    include 'templates/left-sidebar.php';
    //include 'templates/right-sidebar.php';
    //include 'templates/chat-launcher.php';
    ?>

<!-- Main Content -->
<section class="content home">
    <div class="block-header">

        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Dashboard
                    <small class="text-muted">Think Love! Manifest You!</small>
                </h2>
                <?php if (isset($_POST['saveChanges'])) {

                // User has posted the post edit form: save the new post
                $merit = new Merit();
                //print_r($_POST);
                $merit->storeMeritValues($_POST);
                $merit->insert();
                if(isset($_FILES['image']) && !empty($_FILES['image']['name'])) $merit->storeUploadedImage($_FILES['image']);

                echo '<h2>Merit added to database.</h2>';
                } ?>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2><strong>Merit Points</strong> Earned<small >11% Higher then last month</small></h2>
                    </div>
                    <div class="body">
                        <div class="row stats-report">
                            <div class="col-4">
                                <p class="m-b-0">Overall</p>
                                <b class="col-indigo">455</b>
                            </div>
                            <div class="col-4">
                                <p class="m-b-0">Monthly</p>
                                <b class="col-indigo">150</b>
                            </div>
                            <div class="col-4">
                                <p class="m-b-0">Day</p>
                                <b class="col-indigo">25</b>
                            </div>
                        </div>
                        <div class="sparkline m-t-20" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(63, 81, 181)" data-highlight-Line-Color="#222"
                             data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(63, 81, 181)" data-spot-Color="rgb(63, 81, 181, 0.7)"
                             data-offset="90" data-width="100%" data-height="80px" data-line-Width="1" data-line-Color="rgb(63, 81, 181, 0.7)"
                             data-fill-Color="rgba(0, 0, 0, 0.1)"> 2,1,3,5,6,3,2,7,5,2 </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="card">
                    <div class="header">
                        <h2><strong>Happiness </strong> Analysis<small >12% High then last month</small></h2>
                    </div>
                    <div class="body">
                        <div class="row stats-report">
                            <div class="col-4">
                                <p class="m-b-0">Overall</p>
                                <b class="col-amber">7</b>
                            </div>
                            <div class="col-4">
                                <p class="m-b-0">Monthly</p>
                                <b class="col-amber">8</b>
                            </div>
                            <div class="col-4">
                                <p class="m-b-0">Day</p>
                                <b class="col-amber">2</b>
                            </div>
                        </div>
                        <div class="sparkline m-t-20" data-type="line" data-spot-Radius="1" data-highlight-Spot-Color="rgb(255, 193, 7)" data-highlight-Line-Color="#222"
                             data-min-Spot-Color="rgb(233, 30, 99)" data-max-Spot-Color="rgb(255, 193, 7)" data-spot-Color="rgb(255, 193, 7, 0.7)"
                             data-offset="90" data-width="100%" data-height="80px" data-line-Width="1" data-line-Color="rgb(255, 193, 7, 0.7)"
                             data-fill-Color="rgba(0, 0, 0, 0.1)"> 2,1,3,5,6,3,2,7,5,2 </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-5 col-md-12">
                <div class="card weather2">
                    <div class="city-selected body l-parpl">
                        <div class="row">
                            <div class="info col-7">
                                <div class="city"><span>City:</span> New York</div>
                                <div class="night">Day - 12:07 PM</div>
                                <div class="temp"><h2>34°</h2></div>
                            </div>
                            <div class="icon col-5">
                                <img src="assets/images/weather/summer.svg" alt="">
                            </div>
                        </div>
                    </div>
                    <table class="table table-striped m-b-0">
                        <tbody>
                        <tr>
                            <td>Wind</td>
                            <td class="font-medium">ESE 17 mph</td>
                        </tr>
                        <tr>
                            <td>Humidity</td>
                            <td class="font-medium">72%</td>
                        </tr>
                        <tr>
                            <td>Pressure</td>
                            <td class="font-medium">25.56 in</td>
                        </tr>
                        <tr>
                            <td>Cloud Cover</td>
                            <td class="font-medium">80%</td>
                        </tr>
                        <tr>
                            <td>Ceiling</td>
                            <td class="font-medium">25280 ft</td>
                        </tr>
                        </tbody>
                    </table>
                    <div class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner" role="listbox">
                            <div class="carousel-item text-center active">
                                <div class="col-12">
                                    <ul class="row days-list list-unstyled">
                                        <li class="day col-4">
                                            <p>Monday</p>
                                            <img src="assets/images/weather/rain.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Tuesday</p>
                                            <img src="assets/images/weather/cloudy.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Wednesday</p>
                                            <img src="assets/images/weather/wind.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <div class="col-12">
                                    <ul class="row days-list list-unstyled">
                                        <li class="day col-4">
                                            <p>Thursday</p>
                                            <img src="assets/images/weather/sky.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Friday</p>
                                            <img src="assets/images/weather/cloudy.svg" alt="">
                                        </li>
                                        <li class="day col-4">
                                            <p>Saturday</p>
                                            <img src="assets/images/weather/summer.svg" alt="">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Inspiration</strong> &amp; Help</h2>
                    </div>
                    <div class="body">
                        <h2><em>“We are all in the gutter, but some of us are looking at the stars.”</em><br />
                            <strong>― Oscar Wilde, Lady Windermere's Fan</strong></h2>
                        <div id="m_area_chart2" style="height: 290px"><a href="../twilio-php-app/index.php">Get a call</a> </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row clearfix">
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob dial2" value="66" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#4CAF50" readonly>
                        <h6 class="m-t-20">Emotional Merits</h6>
                        <p class="displayblock m-b-0">29% Average <i class="zmdi zmdi-trending-up"></i></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob dial2" value="26" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#7b69ec" readonly>
                        <h6 class="m-t-20">Physical Merits</h6>
                        <p class="displayblock m-b-0">45% Average <i class="zmdi zmdi-trending-down"></i></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob dial3" value="76" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#f9bd53" readonly>
                        <h6 class="m-t-20">Social Merits</h6>
                        <p class="displayblock m-b-0">75% Average <i class="zmdi zmdi-trending-up"></i></p>

                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 col-sm-12 text-center">
                <div class="card tasks_report">
                    <div class="body">
                        <input type="text" class="knob dial4" value="88" data-width="90" data-height="90" data-thickness="0.1" data-fgColor="#00adef" readonly>
                        <h6 class="m-t-20">Spiritual Merits</h6>
                        <p class="displayblock m-b-0">12% Average <i class="zmdi zmdi-trending-up"></i></p>

                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/morrisscripts.bundle.js"></script><!-- Morris Plugin Js -->
<script src="assets/bundles/jvectormap.bundle.js"></script> <!-- JVectorMap Plugin Js -->
<script src="assets/bundles/knob.bundle.js"></script> <!-- Jquery Knob Plugin Js -->
<script src="assets/bundles/countTo.bundle.js"></script> <!-- Jquery CountTo Plugin Js -->
<script src="assets/bundles/sparkline.bundle.js"></script> <!-- Sparkline Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
<script src="assets/js/pages/index.js"></script>
</body>
</html>