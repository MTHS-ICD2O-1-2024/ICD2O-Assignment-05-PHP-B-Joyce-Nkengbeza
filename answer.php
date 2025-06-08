<!DOCTYPE html>
<!-- ICS2O-Assignment-05-PHP-HTML-MDL -->
<html lang="en-ca">

<head>
  <meta charset="utf-8" />
  <meta name="description" content="Multiplying prime numbers using loops, with PHP" />
  <meta name="keywords" content="mths, icd2o" />
  <meta name="author" content="Joyce Nkengbeza" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.deep_purple-purple.min.css" />
  <link rel="stylesheet" href="./css/style.css" />
  <link rel="apple-touch-icon" sizes="180x180" href="./apple-touch-iconnew.png" />
  <link rel="icon" type="image/png" sizes="32x32" href="./favicon-32x32new.png" />
  <link rel="icon" type="image/png" sizes="16x16" href="./favicon-16x16new.png" />
  <link rel="manifest" href="./site.webmanifest" />
  <title>Multiplying Primes with PHP</title>
</head>

<body>
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <span class="mdl-layout-title">Multiplying Primes with PHP</span>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="right-image">
        <img src="./images/primenumbers.jpg" alt="primenumbers" />
      </div>
      <div class="page-content-php">
        <div id="user-info">
          <?php
          // This program finds prime numbers and multiplies them using addition
          function isPrime($number)
          {
            $count = 0;
            $loopCounter = 1;
            
            while ($loopCounter <= $number) {
              if ($number % $loopCounter == 0) {
                $count = $count + 1;
              }
              $loopCounter = $loopCounter + 1;
            }

            if ($count == 2) {
              return true;
            } else {
              return false;
            }
          }

          function multiplyByAdding($a, $b)
          {
            $total = 0;
            $counter = 0;

            while ($counter < $b) {
              $total = $total + $a;
              $counter = $counter + 1;
            }

            return $total;
          }

          // Main program
          if (isset($_POST["limit"])) {
            $limit = intval($_POST["limit"]);
            $number = 2;
            $product = 1;
            $steps = "1";
            $primeList = "";

            while ($number <= $limit) {
              if (isPrime($number)) {
                $product = multiplyByAdding($product, $number);
                $steps = $steps . " × " . $number;
                $primeList = $primeList . $number . ", ";
              }
              $number = $number + 1;
            }

            if ($primeList != "") {
              echo "Prime numbers: " . rtrim($primeList, ", ") . "<br>";
              echo "Steps: " . $steps . "<br>";
              echo "Final product: " . $product;
            } else {
              echo "There are no prime numbers in that range.";
            }
          }
          ?>