<?php include ("settings.php"); ?>
<?php include ("controller.php"); ?>

<!DOCTYPE html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <link rel="icon" href="../../favicon.ico">

    <title>Rockurator</title>

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <?php include(MODULES_PATH."menu.php"); ?>

    <div class="container">
      <div class="row row-offcanvas row-offcanvas-right">
        <div class="col-sm-12">
          <?php include(MODULES_PATH."jumbotron.php"); ?>

          <div class="row">
            
            <?php
              for ($i=0; $i < 15; $i++) { 
                include(MODULES_PATH."publication.php");
              }
            ?>

          </div>
        </div>
      </div>

      <hr>

      <?php include(MODULES_PATH."footer.php"); ?>

    </div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
