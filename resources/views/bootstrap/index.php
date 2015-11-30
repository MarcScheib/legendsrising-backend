<!doctype html>
<html>
  <head>
    <title>LegendsRising</title>
    <base href="/">

    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="icon" href="favicon.ico">

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8" />
  </head>
  <body aurelia-app="configuration/legendsrising">
    <div class="splash">
      <div class="message">LegendsRising</div>
      <i class="fa fa-spinner fa-spin"></i>
    </div>

    <script src="jspm_packages/system.js"></script>
    <script src="config.js"></script>
    <script>
      System.import('aurelia-bootstrapper');
    </script>
  </body>
</html>