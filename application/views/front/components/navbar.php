<body>
<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container-fluid">
   <div class="row bg-faded" id="top-line">
     <div class="navbar-right" id="soc-links">
     	<a href="https://www.facebook.com/CrossfitDV8/" title="CrossFit DV8 Facebook page" target="_blank"><i class="fa fa-facebook-square" aria-hidden="true"></i></a>
      	<a href="https://www.instagram.com/crossfitdv8/" title="CrossFit DV8 Instragram" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a>
      	<a href="https://twitter.com/CrossFitDV8" title="CrossFit DV8 twitter" target="_blank"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
     	<a href="tel:2482666688" title="Call Us"><i class="fa fa-phone" aria-hidden="true"><span id="black">(246) 266-6688</span></i></a>
    </div>
   </div>
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
    		<?php foreach ($img as $row) {
            foreach ($row as $item) { ?>
    		<a id="<?php echo $item['id'];?>" href="<?php echo base_url();?>">
     	<?php echo img($item); ?>
     	<?php //echo img($src, 'height="'.$row['height'].'"'); ?>
     	</a>
     	<?php } } ?>
      	<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#topFixedNavbar1" aria-expanded="false"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
	</div>
    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="topFixedNavbar1">
      <ul class="nav navbar-nav navbar-right" id="nav-space">
        <li><?php echo anchor('gettingstarted', 'Getting Started');?></li>
        <li><?php echo anchor('programs', 'Programs');?></li>
        <li><?php echo anchor('membership', 'Membership');?></li>
        <li><?php echo anchor('schedule', 'Schedule');?></li>
        <li><?php echo anchor('contact', 'Contact');?></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Us<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><?php echo anchor('coaches', 'Our Coaches');?></li>
            <li><?php echo anchor('community', 'Our Community');?></li>
          </ul>
        </li>
      </ul>
    </div>
    <!-- /.navbar-collapse -->
  </div>
  <!-- /.container-fluid -->
</nav>

 