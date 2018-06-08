<!DOCTYPE html>
<html>
<head>

<?php include( 'inc/meta.php') ?>
<!-- headtag -->
<link rel="icon" href="images/fav_icon.png" type="image/png" sizes="16x16">
<title>ACME  || Contact us</title>

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
                <button class="btn filter-button" data-filter="hdpe">HDPE Pipes</button>
                <button class="btn filter-button" data-filter="sprinkle">Sprinkle Pipes</button>
                <button class="btn filter-button" data-filter="spray">Spray Nozzle</button>
                <button class="btn filter-button" data-filter="irrigation">Irrigation Pipes</button>
            </div>
            <br/>


            <div class="gallery_images_grid">
                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="http://www.bdlmuseum.org/collections/img/galleries/img_02_895X539.jpg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                    <img src="https://www.mumbai.org.uk/pics/chhatrapati-shivaji-terminus.jpg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="http://www.travel-tripods.com/wp-content/uploads/mumbai-crossing.jpg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <img src="http://jollyhoo.com/wp-content/uploads/2013/12/Aarti-Chhabria-Rehearses-For-New-Year-Eve-Event-In-Mumbai-Photo-Gallery-6.jpg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="http://www.freepressjournal.in/wp-content/uploads/2017/04/Mumbai-airport.jpg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <img src="https://traveljee.com/wp-content/uploads/2013/10/volte_gallery_mumbai.jpg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="http://im.hunt.in/cg/mumbai/City-Guide/Art%20Galleries%20in%20Mumbai.jpg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ38r8wr7QzvKLLnvySHAhVTcj6zNyxBCtmcZlqYYvN-ZXwBP63" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter irrigation">
                    <img src="https://www.mumbai.org.uk/pics/ajanta-ellora-caves.jpg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter hdpe">
                    <img src="http://www.travel-tripods.com/wp-content/uploads/mumbai-crossing.jpg" class="img-responsive">
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter spray">
                    <img src="http://im.hunt.in/cg/mumbai/City-Guide/Art%20Galleries%20in%20Mumbai.jpg" class="img-responsive">                    
                </div>

                <div class="gallery_product col-lg-4 col-md-4 col-sm-4 col-xs-6 filter sprinkle">
                    <img src="https://traveljee.com/wp-content/uploads/2013/10/volte_gallery_mumbai.jpg" class="img-responsive">
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

