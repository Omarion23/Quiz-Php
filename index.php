<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- STYLE CSS LINK-->
    <link rel="stylesheet" href="css/style.css">
    <!-- BOOTSTRAP PLUGIN FILE CSS LINK -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- FONT AWESOME PLUGIN FILE-->
    <script src="js/all.min.js"></script>
    <!-- FONT PLUGIN FILE-->
    <link rel="stylesheet" href="font/DoHyeon-Regular.ttf">
      <!-- GOOGLE FONT LINK-->
      <link href="https://fonts.googleapis.com/css2?family=Exo+2:ital,wght@0,700;1,300&display=swap" rel="stylesheet">
    <!--jQuery Ripple Effect Google CDN -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.ripples/0.5.3/jquery.ripples.min.js"></script>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>QUIZ PHP LANDING PAGE</title>

    <style>
        

    </style>
  </head>
  <body>
        <!--FIRST NAVBAR
    START HERE-->
<div class="container-fluid info p-3">
    <div class="row">
        <div class="col col-md-12 col-sm-12 d-flex">
                        <!--TEXT H2 FOR NAVBAR INFO-->
          <h2 class=" p-2 mx-auto">This is a easy science test for you.</h2>
        </div>
    </div>
</div><!--====END FIRST NAVBAR CLASS INFO ===== -->

<!-- HEADER SECTION CLASS START HERE-->
<header id="header">
    <div class="container">
        <div class="row height-90 align-items-center justify-content-center">
            <div class="col">
                <div class="banner text-center">
                    
                    <h1 class="display-4  mx-auto"><small>Test your</small><br>
                        <strong class="display-1"> Science </strong><br>
                        <small class="display-4">Knowledge.</small>
                    </h1>
                    <a href="questions.php" class="btn main-btn main-btn-anim my-4" id="main-btn">
                        <i class="far fa-hand-point-right mr-2"></i>START QUIZ
                    </a>
                </div>
            </div>
        </div>
    </div>
</header> <!--=== END OF HEADER SECTION ==-->

<script>

  // JQWERY RIPPLE EFFECT 
    $("#header").ripples({
      resolution:600,
      perturbance:0.04,

    });
</script>
<!-- BOOTSTRAP JS PLUGINS LINK-->
<script src="js/bootstrap.bundle.min.js"></script>
<!-- JQWERY PLUGINS LINK-->
<script src="js/jquery-3.4.1.min.js"></script>
   <!-- Optional JavaScript -->
<script src="js/script.js"></script>
  </body>
</html>