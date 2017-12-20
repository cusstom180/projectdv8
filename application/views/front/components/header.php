<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php foreach ($meta as $title) {?>
<title><?php echo $title['title'];?></title>
<?php } ?>
<?php ?>
<?php echo $trace['function'];?>
<!-- Bootstrap -->
<!-- <link href="css/bootstrap.css" rel="stylesheet"> -->
<!-- <link rel="shortcut icon" href="img/dv8-web-icon.png" type="image/x-icon" /> -->
<link href="https://fonts.googleapis.com/css?family=Orbitron|Yanone+Kaffeesatz" rel="stylesheet">
<script src='https://www.google.com/recaptcha/api.js'></script>
<?php echo link_tag('public_html/bootstrap/stylesheets/font-awesome.css', 'stylesheet', 'text/css', false);?>
<?php echo link_tag('public_html/bootstrap/stylesheets/styles.css', 'stylesheet', 'text/css', false);?>
<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>