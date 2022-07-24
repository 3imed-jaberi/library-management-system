<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?= $title ?></title>
    <link rel="stylesheet" href="/assets/styles/bootstrap.min.css">
  </head>
  <body>
    <?php include 'components/nav-bar.php'; ?>
    <?= $page ?>
    <?php include 'components/footer.php'; ?>
    <script src="/assets/scripts/bootstrap.min.js" ></script> 
    <script src="/assets/scripts/app.js" ></script> 
  </body>
</html>
