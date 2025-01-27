<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/css/gamepage.css">
  <link rel="stylesheet" href="assets/css/style.css">
  <script src="script.js" defer></script>
</head>

<body>
  <?php

  require 'components/header.php';
  $GameChoice = $_GET['PlayButton'];
  if ($GameChoice == "YouHaveChosen2048") {
    echo
    '<main>
        <iframe src="games/2048.html" name="targetframe" allowTransparency="true" scrolling="no" frameborder="0" width="1280px" height="720px">
        </iframe>
    </main>';
  } else if ($GameChoice == "YouHaveChosenTetris") {
    echo
    '<main>
        <iframe src="games/tetris.html" name="targetframe" allowTransparency="true" scrolling="no" frameborder="0" width="1280px" height="720px">
        </iframe>
    </main>'; }

    else if ($GameChoice == "YouHaveChosenMonsterEating") {
          echo
          '<main>
        <iframe width="800" height="600" allow="fullscreen; autoplay; encrypted-media" src="https://games.construct.net/941/latest" frameborder="0" allowfullscreen="true" msallowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" allowpaymentrequest="false" referrerpolicy="unsafe-url" sandbox="allow-same-origin allow-forms allow-scripts allow-pointer-lock allow-orientation-lock allow-popups" scrolling="no"></iframe>
    </main>';


    }
    else if ($GameChoice == "YouHaveChosenThereIsNoGame") {
        echo
        '<main>
        <iframe width="800" height="600" allow="fullscreen; autoplay; encrypted-media" src="https://games.construct.net/174/latest" frameborder="0" allowfullscreen="true" msallowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" allowpaymentrequest="false" referrerpolicy="unsafe-url" sandbox="allow-same-origin allow-forms allow-scripts allow-pointer-lock allow-orientation-lock allow-popups" scrolling="no"></iframe>
    </main>';

    }
    else if ($GameChoice == "YouHaveChosenUltraPixelSurvive") {
        echo
        '<main>
        <iframe width="800" height="600" allow="fullscreen; autoplay; encrypted-media" src="https://games.construct.net/26420/latest" frameborder="0" allowfullscreen="true" msallowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" allowpaymentrequest="false" referrerpolicy="unsafe-url" sandbox="allow-same-origin allow-forms allow-scripts allow-pointer-lock allow-orientation-lock allow-popups" scrolling="no"></iframe>
    </main>';

    }
    else if ($GameChoice == "YouHaveChosenPixelBearAdventure") {
        echo
        '<main>
        <iframe width="800" height="600" allow="fullscreen; autoplay; encrypted-media" src="https://games.construct.net/904/latest" frameborder="0" allowfullscreen="true" msallowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" allowpaymentrequest="false" referrerpolicy="unsafe-url" sandbox="allow-same-origin allow-forms allow-scripts allow-pointer-lock allow-orientation-lock allow-popups" scrolling="no"></iframe>
    </main>';

    }
    else if ($GameChoice == "YouHaveRedTieRunner") {
        echo
        '<main>
        <iframe width="560" height="315" allow="fullscreen; autoplay; encrypted-media" src="https://games.construct.net/1463/latest" frameborder="0" allowfullscreen="true" msallowfullscreen="true" mozallowfullscreen="true" webkitallowfullscreen="true" allowpaymentrequest="false" referrerpolicy="unsafe-url" sandbox="allow-same-origin allow-forms allow-scripts allow-pointer-lock allow-orientation-lock allow-popups" scrolling="no"></iframe>
    </main>';

    }else {
    echo 'hello';
  }
  require 'components/footer.php';
  ?>
</body>

</html>