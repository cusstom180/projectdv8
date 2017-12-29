<div class="container mar-50 mar-bot-50">
	<div class="row">
		<div>
			<?php echo heading('our community', 1); ?>
			<?php echo heading("Explore our athlete's other passions", 2, 'class="text-center"'); ?>
		</div>
	</div>
	<div class="row">
		<?php foreach ($community as $row) {?>
		<div class="col-md-4 text-capitize text-center">
			<?php echo img('public_html/images/'.$row['image'], false, array('class' => 'logo', 'alt' => $row['bus_name']))?>
			<?php echo heading($row['bus_name'], 2, 'class="text-uppercase"');?>
			<?php echo heading($row['contact_name'], 3, 'class="mem-head text-uppercase"');?>
			<p class="text-uppercase"><?php echo $row['address_1']; ?></p>
			<p class="text-uppercase"><?php echo $row['address_2']; ?></p>
			<p class="text-uppercase"><?php echo $row['phone']; ?></p>
			<a href="mailto:<?php echo $row['email']; ?>"><p ><?php echo $row['email']; ?></p></a>
			<a href="<?php echo $row['website']; ?>" target="_blank"><p><?php echo $row['website']; ?></p></a>
			<hr class="hr-block">
		</div>
		<?php  } ?>
	</div>
</div>