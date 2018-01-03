<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php echo link_tag('public_html/images/dv8_web_icon.png', 'icon', 'image/png'); ?>

<?php foreach ($title as $key) { ?>
 <title><?php echo $key['title']; ?></title>
<?php } ?>
<?php foreach ($meta as $value) { ?>
<meta name="<?php echo $value['name']; ?>" content="<?php echo $value['content'];?>" >
<?php } ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-75136848-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-75136848-1');
</script>

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