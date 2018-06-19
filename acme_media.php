<!DOCTYPE html>
<html>
<head>

<?php include( 'inc/meta.php') ?>
<!-- headtag -->
<link rel="icon" href="images/fav_icon.png" type="image/png" sizes="16x16">
<title>ACME  || Media</title>

<!-- CSS Files -->
<?php include( 'inc/css.inc.php') ?>

<!-- JavaScript Files -->
<?php //include( 'inc/js.inc.php') ?>

</head>
<body class="text-justify">
<!-- header -->
<?php include('inc/header.inc.php'); ?>

<!-- gallery section -->
<section class="sections_home gallery_with_filter container-fluid">
    <div class="container">
        <div class="row">
            <div class="gallery col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <h1 class="gallery-title">Gallery</h1>
            </div>

            <div align="center">
                <button class="btn filter-button" data-filter="all">All</button>
                <button class="btn filter-button" data-filter="ourTeam">ourTeam </button>
                <!-- <button class="btn filter-button" data-filter="sprinkle">Sprinkle Pipes</button> -->
            </div>
            <br/>


            <div class="gallery_images_grid">
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ourTeam">
                    <img src="images/media/ourTeam/ourTeam1.jpeg" class="img-responsive">
                </div>


                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ourTeam">
                    <img src="images/media/ourTeam/ourTeam2.jpeg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ourTeam">
                    <img src="images/media/ourTeam/ourTeam3.jpeg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ourTeam">
                    <img src="images/media/ourTeam/ourTeam4.jpeg" class="img-responsive">
                </div>


                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ourTeam">
                    <img src="images/media/ourTeam/ourTeam5.jpeg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ourTeam">
                    <img src="images/media/ourTeam/ourTeam6.jpeg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ourTeam">
                    <img src="images/media/ourTeam/ourTeam7.jpeg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter ourTeam">
                    <img src="images/media/ourTeam/ourTeam8.jpeg" class="img-responsive">
                </div>                

            </div>
        </div>
    </div>
</section>
<!-- /gallery section -->

<!--Footer File -->
<?php include( 'inc/footer.inc.php') ?>

<!-- JavaScript Files -->
<?php include( 'inc/js.inc.php') ?>

<script src="js/forms.js"></script>
</body>
</html>

