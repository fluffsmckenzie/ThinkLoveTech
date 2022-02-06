<?php include '../admin/scripts/config.php'; ?>
<!doctype html>
<html class="no-js " lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <meta name="description" content="Add merits to database.">
    <title>ThinkLove.tech - Add Merits</title>
    <link rel="icon" href="../img/favicon.ico" type="image/x-icon"> <!-- Favicon-->
    <link rel="stylesheet" href="assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/plugins/dropzone/dropzone.css">
    <!-- Custom Css -->
    <link rel="stylesheet" href="assets/css/main.css">
    <link rel="stylesheet" href="assets/css/color_skins.css">
    <script>

        // Prevents file upload hangs in Mac Safari
        // Inspired by http://airbladesoftware.com/notes/note-to-self-prevent-uploads-hanging-in-safari

        function closeKeepAlive() {
            if ( /AppleWebKit|MSIE/.test( navigator.userAgent) ) {
                var xhr = new XMLHttpRequest();
                xhr.open( "GET", "/ping/close", false );
                xhr.send();
            }
        }

    </script>
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

?>




<!-- Main Content -->
<section class="content home">
    <div class="block-header">
        <div class="row">
            <div class="col-lg-7 col-md-6 col-sm-12">
                <h2>Add Merit
                    <small class="text-muted">Welcome to Think Love Admin Panel</small>
                </h2>
            </div>
            <div class="col-lg-5 col-md-6 col-sm-12">

            </div>
        </div>
    </div>
    <div class="container-fluid">
        <div class="row clearfix">
            <form action="index.php" method="post" enctype="multipart/form-data" onsubmit="closeKeepAlive()">
            <div class="col-lg-12">
                <div class="card">
                    <div class="header">
                        <h2><strong>Merit</strong> Information <small>Enter the merit info</small> </h2>
                    </div>
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="title" id="title" class="form-control" placeholder="Name">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <input type="text" name="action" id="action" class="form-control" placeholder="Action">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <div class="form-line">
                                        <input type="text" name="achievement" id="achievement" class="form-control" placeholder="Achievement"></input>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="header">
                        <h2><strong>Other</strong> values <small>Sweating the small stuff</small> </h2>
                    </div>
                    <div class="body">

                        <div class="row clearfix">
                            <div class="col-sm-6 form-group">
                                <?php
                                $frequencies = Merit::getMeritFrequency();
                                $dummy = 0;
                                foreach ($frequencies as $f){ ?>
                                <div class="radio inlineblock <?php if($dummy==0) echo 'm-r-25';?>">
                                    <input type="radio" name="frequency" id="radio<?php echo $f->id; ?>" value="<?php echo $f->id; ?>">
                                    <label for="radio<?php echo $f->id; ?>"><?php echo $f->title; ?></label>
                                </div>
                                <?php $dummy++; } ?>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <select id="type" name="type">
                                    <?php
                                    $types = Merit::getMeritType();
                                    $dummy = 0;
                                    foreach ($types as $t){ ?>
                                        <option value="<?php echo $t->id; ?>"><?php echo $t->title; ?></option>
                                        <?php $dummy++; } ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row clearfix">
                            <div class="col-lg-3 col-dm-3 col-sm-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="value" placeholder="Value of Merit">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                    <div class="body">
                        <div class="row clearfix">
                            <div class="col-sm-12">
                                <input type="file" id="image" name="image" class="dropzone m-b-15 m-t-15" />
                                    <div class="dz-message">
                                        <div class="drag-icon-cph"> <i class="material-icons">touch_app</i> </div>
                                        <h3>Click to upload.</h3>
                            </div>
                            <div class="col-sm-12">
                                <button type="submit" name="saveChanges" class="btn btn-primary btn-round">Submit</button>
                                <button type="submit" class="btn btn-default btn-round btn-simple">Cancel</button>
                            </div>
                        </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Jquery Core Js -->
<script src="assets/bundles/libscripts.bundle.js"></script> <!-- Lib Scripts Plugin Js ( jquery.v3.2.1, Bootstrap4 js) -->
<script src="assets/bundles/vendorscripts.bundle.js"></script> <!-- slimscroll, waves Scripts Plugin Js -->

<script src="assets/plugins/dropzone/dropzone.js"></script> <!-- Dropzone Plugin Js -->

<script src="assets/bundles/mainscripts.bundle.js"></script>
</body>
</html>