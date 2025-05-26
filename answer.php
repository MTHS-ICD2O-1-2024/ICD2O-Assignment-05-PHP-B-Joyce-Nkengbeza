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
          // Get input
          $limit = $_GET["limit"];

          // check if a number is prime
          function isPrime($num)
          {
            if ($num < 2) return false;
            for ($i = 2; $i <= sqrt($num); $i++) {
              if ($num % $i == 0) return false;
            }
            return true;
          }

          // Multiply using addition
          function multiplyByAddition($a, $b)
          {
            $result = 0;
            for ($i = 0; $i < $b; $i++) {
              $result += $a;
            }
            return $result;
          }

          $product = 1;
          $primes = [];
          $steps = "1";

          for ($i = 2; $i <= $limit; $i++) {
            if (isPrime($i)) {
              $primes[] = $i;
              $product = multiplyByAddition($product, $i);
              $steps .= " × $i";
            }
          }

          // Output
          if (count($primes) > 0) {
            echo "Prime numbers up to $limit: " . implode(", ", $primes) . "<br>";
            echo "Multiplication using only addition: $steps<br>";
            echo "Final product: $product<br>";
          } else {
            echo "There are no prime numbers in the range.";
          }
          ?>
          <div class="page-content-answer">
            <a href="./index.html">Return</a>
          </div>
        </div>
      </div>
    </main>
  </div>
</body>

</html>