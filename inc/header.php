<?php

include 'lib/session.php';
Session::init();
?>
<?php

include 'lib/database.php';
include 'helpers/format.php';

spl_autoload_register(function ($class) {
  include_once "classes/" . $class . ".php";
});


$db = new Database();
$fm = new Format();
$ct = new cart();
$us = new user();
$cs = new customer();
$cat = new category();
$product = new product();
?>

<?php
header("Cache-Control: no-cache, must-revalidate");
header("Pragma: no-cache");
header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: max-age=2592000");
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/homepage.css">
  <link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
  <title>Porsche.ca</title>
  <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/login.css" rel="stylesheet" type="text/css" media="all" />
  <link href="css/creat_an_acc.css" rel="stylesheet" type="text/css" media="all" />
  <script src="js/jquerymain.js"></script>
  <script src="js/script.js" type="text/javascript"></script>
  <script type="text/javascript" src="js/jquery-1.7.2.min.js"></script>
  <link rel="stylesheet" href="css/718.css">
  <link rel="stylesheet" href="css/interested.css">
  <script src="js/bootstrap.min.js"></script>
  <script>
    function validateEmail(email) {
      const re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
      return re.test(email);
    }

    function validate() {
      const $result = $("#result");
      const email = $("#email").val();
      $result.text("");

      if (validateEmail(email)) {
        $result.text(email + " is valid :)");
        $result.css("color", "green");
      } else {
        $result.text(email + " is not valid :(");
        $result.css("color", "red");
      }
      return false;
    }

    function confirmPass() {
      var pass = document.getElementById("pass").value
      var confPass = document.getElementById("c_pass").value
      if (pass != confPass) {
        alert('Wrong confirm password !');
      }
    }
    $("#validate").on("click", validate);
  </script>
</head>

<body>
  <div class="wrap">
    <div class="header_top" style="background-color: #e71f35;">

      <div class="navigation">
        <div class="navigation_left">
          <a href="#">Porsche.ca</a>
          <a href="login.html">My Porsche</a>
        </div>

        <?php
        if (isset($_GET['customer_id'])) {
          $customer_id = $_GET['customer_id'];
          $delCart = $ct->del_all_data_cart();
          $delCompare = $ct->del_compare($customer_id);
          Session::destroy();
        }
        ?>
        <div class="navigation_right">
          <?php
          $login_check = Session::get('customer_login');
          if ($login_check == false) {
            echo '<a href="login.php">Login & Register </a></div>';
          } else {
            echo '<a  href="?customer_id=' . Session::get('customer_id') . ' ">Log out</a></div>';
          }
          ?>



        </div>
      </div>
    </div>