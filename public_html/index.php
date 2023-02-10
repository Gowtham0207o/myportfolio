<!DOCTYPE html>
<?php
include 'libs/load.php';
?>

<html lang="en">
<?php
 load_template("_head");
?>
<body data-spy="scroll" data-target=".navbar" data-offset="40" id="home">
    <!-- <a href="components.html" class="btn btn-primary btn-component" data-spy="affix" data-offset-top="600"><i class="ti-shift-left-alt"></i> Components</a>-->
<?php
load_template("_header");
?>
   <?php
   load_template("hoover_img");
   ?>
   <?
   load_template("_about");
   ?>
  
    <!--Resume Section-->
  <?
  load_template("_resume");
  ?>

    <!-- Portfolio Section -->
<?
load_template("_projects");
?>
    <!-- End of portfolio section -->

    <?
    load_template("_footer");
    ?>

	<!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>

    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>

    <!-- Isotope  -->
    <script src="assets/vendors/isotope/isotope.pkgd.js"></script>
    
    <!-- Google mpas -->
    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCtme10pzgKSPeJVJrG1O3tjR6lk98o4w8&callback=initMap"></script>

    <!-- JohnDoe js -->
    <script src="assets/js/johndoe.js"></script>

</body>
</html>
