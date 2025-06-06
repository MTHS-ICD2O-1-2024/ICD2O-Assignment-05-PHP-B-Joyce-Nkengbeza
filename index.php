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
      <form action="answer.php" method="GET">
        <p>Enter a number to multiply all prime numbers up to that number:</p>
        <div class="mdl-textfield mdl-js-textfield">
          <input
            class="mdl-textfield__input"
            type="number"
            pattern="-?[0-9]*(\.[0-9]+)?"
            name="limit"
            id="limit" />
          <label class="mdl-textfield__label" for="limit">Enter a number...</label>
          <span class="mdl-textfield__error">Input is not a number!</span>
        </div>
        <br />
        <button
          class="mdl-button mdl-js-button mdl-button--raised mdl-js-ripple-effect mdl-button--accent"
          type="submit">
          Calculate
        </button>
      </form>
    </main>
  </div>
</body>

</html>