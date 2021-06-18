<?php
  require_once 'properties.php';
  require_once __ROOT__.'/src/Helpers/Authentication.php';

  $auth = new Authentication();
  $auth->validateSession();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="lib/font-awesome/css/all.min.css" rel="stylesheet">

  <link rel="stylesheet" href="src/assets/css/global.css" />
  <link rel="stylesheet" href="src/assets/css/loading.css" />
  <title>Anhembi Pokémon</title>
</head>
<style>
body {
  height: 100vh;
  overflow: hidden
}

#root {
  border: none;
  width: 100%;
  margin: 0;
  padding: 0;
  overflow: hidden;
  box-sizing: border-box;
}
</style>

<body class="">
  <div class="bg-loading">
    <div class="lds-dual-ring"></div>
  </div>
  <?php
    require_once __ROOT__.'/src/View/components/navigation/navigation.php';
    ?>
  <iframe id="root" src="src/View/pages/pokedex/pokedex.php" frameborder="0"></iframe>

  <script src="lib/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
  <script src="lib/bootstrap/js/bootstrap.min.js"></script>
  <script src="src/assets/js/loading.js" type="text/javascript"></script>
  <script>
  changeHeight();
  $(document).on("change", function() {
    changeHeight()
  });

  function changeHeight() {
    $("#root").css({
      height: `${$(window).height()-60}px`,
    });
  }
  </script>
</body>

</html>