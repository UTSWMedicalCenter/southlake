<?php include("session.start.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="southlake tutoring academy, STA">
    <meta name="author" content="Shidan Wang">

    <title>Southlake Tutoring Academy</title>

    <!-- Bootstrap Core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Theme CSS -->
    <link href="css/agency.min.css" rel="stylesheet">

    <!-- my css -->
    <link href="css/mycss.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- All the scripts here -->
    <!-- jQuery -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>

    <!-- Contact Form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Theme JavaScript -->
    <script src="js/agency.min.js"></script>

    <!-- My javascript -->
    <!-- Jssor slider -->
    <script type="text/javascript" src="js/jssor.slider-21.1.5.mini.js"></script>
    <script src="js/myjs.js"></script>

    <!-- end of scripts-->

</head>

<body id="page-top" class="index">

    <!-- Navigation -->
    <?php include("navigation.php"); ?>

    <!-- Header -->
    <?php include("header.php"); ?>

    <!-- Services Section -->
    <?php include("services.php"); ?>

    <!-- Classes Section -->
    <?php include("classes.php"); ?>

    <!-- About Section -->
    <?php include("gallery.php"); ?>

    <!-- Contact Section -->
    <?php include("contact.php"); ?>

    <?php
    if (isset($_SESSION['stausername'])) {
        //<!-- Myclasses Section -->
        include("myclasses.php");
    } else {
        include("login.php");
    }
    ?>

    <!-- Footer -->
    <?php include("footer.php"); ?>
</body>
</html>
