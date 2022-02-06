<?php include '../admin/scripts/config.php';
include '../admin/classes/Merit.class.php';?>
<?php $meritInfo = Merit::getMeritTypeDescription($_GET['id']);?>
<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="View a list of awesome self-care techniques.">
    <title>ThinkLove.tech - <?php echo $meritInfo[0]['title'].' Merits';?></title>
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link href="assets/plugins/bootstrap-select/css/bootstrap-select.css" rel="stylesheet" />
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
//include  'templates/right-sidebar.php';
//include 'templates/chat-launcher.php';

?>

<!-- Main Content -->
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">

                <h2><?php echo $meritInfo[0]['title'].' Merits';?>
                    <small class="text-muted"><?php echo $meritInfo[0]['description'];?></small>
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <?php $emotionalMerits = Merit::getMeritByType($_GET['id']);
                for($i = 0; $i < sizeof($emotionalMerits); $i++) {?>
                <div class="card property_list">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="property_image">
                                    <img class="img-thumbnail img-fluid" src="images/thumb/<?php echo preg_replace('~[^a-zA-Z0-9]+~', '-',preg_replace('~^[^a-zA-Z0-9]+|[^a-zA-Z0-9]+$~', '', strtolower($emotionalMerits[$i]->action))).$emotionalMerits[$i]->image; ?>" alt="img">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <div class="property-content">
                                    <div class="detail">
                                        <h5 class="text-success m-t-0 m-b-0"><?php echo $emotionalMerits[$i]->value; ?> Merit Points</h5>
                                        <h4 class="m-t-0"><a href="#" class="col-blue-grey"><?php echo $emotionalMerits[$i]->title; ?></a></h4>
                                        <p class="text-muted"><?php echo $emotionalMerits[$i]->action; ?></p>
                                        <p class="text-muted m-b-0"><?php echo $emotionalMerits[$i]->achievement; ?></p>
                                    </div>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
                <?php } ?>

            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>