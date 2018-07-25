<?php
//namespace views;
?>

<!DOCTYPE html>
<!-- Daniel ROUAIX 2018 -->

<html>
    <head>
        <title>E-commerce</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
  <body>
      <?php
      if ($_SESSION["alerte"]!=""){
          echo "<div class='alerte'>".$_SESSION["alerte"]."</div>";
          $_SESSION["alerte"] = "";
      }
      if ($_SESSION["message"]!=""){
          echo "<div class='message'>".$_SESSION["message"]."</div>";
          $_SESSION["message"] = "";
      }
      if ($_SESSION["erreur"]!=""){
          echo "<div class='erreur'>".$_SESSION["erreur"]."</div>";
          $_SESSION["erreur"] = "";
      }
      ?>
    <hr /> Views/layout.php (Disposition) <br />
    <?php
      require_once $content;
    ?>
    <hr />
  </body>
</html>
