<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

  <link rel="stylesheet" href="<?= asset("style.min.css"); ?>"/>

  <title><?= $title; ?></title>
</head>
<body>

<div class="main">
  <?= $v->section("content"); ?>
</div>

<script src="<?= asset("scripts.min.js"); ?>"></script>
<?= $v->section("scripts"); ?>

</body>
</html>
