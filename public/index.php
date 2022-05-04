<?php 
    require_once('main.php');
?>
<html>
    <head>
        <title>
        Gestion Des Projets
        </title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <link rel="stylesheet" type="text/css" href="../src/style/header.css">
    </head>

    <body>
    <!--En tete -->
        <?php
            require_once('../src/components/header.php');        
        ?>
        <div id="caroussel">
            <?php
                require_once('../src/components/home_carrousel.php');   
            ?>
        </div>
        <div id="travaux_recent">
            <?php
                require_once('../src/components/travaux_recent.php');   
            ?>
        </div>
        <hr class=" col-lg-7 col-md-12 ">
        <div id="blog">
            <?php
                require_once('../src/components/blog.php');   
            ?>
        </div>
        <hr class=" col-lg-7 col-md-12 ">
        <div id="contactus">
            <?php
                require_once('../src/components/contactus.php');   
            ?>
        </div>

        <hr class=" col-lg-7 col-md-12 ">
        <div id="inscription">
            <?php
                require_once('../src/components/inscription.php');   
            ?>
        </div>
        <hr class=" col-lg-7 col-md-12 ">
        <div id="connexion">
            <?php
                require_once('../src/components/connexion.php');   
            ?>
        </div>
        <div id="profile">
            <?php
                require_once('../src/components/profile.php');   
            ?>
        </div>
        <hr class=" col-lg-7 col-md-12 ">
        <div id="footer">
            <?php
                require_once('../src/components/footer.php');   
            ?>
        </div>

    <!--En tete -->   


    <script>
   function onSubmit(token) {
     document.getElementById("demo-form").submit();
   }
 </script>
    <script src="https://www.google.com/recaptcha/api.js"></script>

       <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="an
    onymous"></script>
    </body>
</html>