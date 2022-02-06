<?php include '../admin/scripts/config.php'; ?>
<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Editing Merits">
    <title>ThinkLove.tech - Edit Merits</title>
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
include '../admin/classes/Merit.class.php';
include 'templates/top-bar.php';
include 'templates/left-sidebar.php';
//include  'templates/right-sidebar.php';
//include 'templates/chat-launcher.php';

if (isset($_POST['saveChanges'])) {

    // User has posted the post edit form: save the post changes

    if (!$merit = Merit::getByMeritId((int)$_POST['id'])) {
        return;
    }

    $merit->storeMeritValues($_POST);
    if(isset($_FILES['image']) && !empty($_FILES['image']['name'])) $merit->storeUploadedImage($_FILES['image']);
    $merit->update();
    echo '<h2>Merit has been updated!</h2>';
}
?>

<!-- Main Content -->
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Edit Merits
                    <small class="text-muted">Click on a merit title to edit it.</small>
                </h2>
            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <div class="col-lg-12">
                <?php $emotionalMerits = Merit::getList(100);
                for($i = 0; $i < sizeof($emotionalMerits['results']); $i++) {?>
                <div class="card property_list">
                    <div class="body">
                        <div class="row">
                            <div class="col-lg-4 col-md-6">
                                <div class="property_image">
                                    <img class="img-thumbnail img-fluid" src="images/thumb/<?php echo preg_replace('~[^a-zA-Z0-9]+~', '-',preg_replace('~^[^a-zA-Z0-9]+|[^a-zA-Z0-9]+$~', '', strtolower($emotionalMerits['results'][$i]->action))).$emotionalMerits['results'][$i]->image; ?>" alt="img">
                                </div>
                            </div>
                            <div class="col-lg-8 col-md-6">
                                <div class="property-content">
                                    <div class="detail">
                                        <h5 class="text-success m-t-0 m-b-0"><?php echo $emotionalMerits['results'][$i]->value; ?> Merit Points</h5>
                                        <h4 class="m-t-0"><a href="edit-merit.php?id=<?php echo $emotionalMerits['results'][$i]->id; ?>" class="col-blue-grey"><?php echo $emotionalMerits['results'][$i]->title; ?></a></h4>
                                        <p class="text-muted"><?php echo $emotionalMerits['results'][$i]->action; ?></p>
                                        <p class="text-muted m-b-0"><?php echo $emotionalMerits['results'][$i]->achievement; ?></p>
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