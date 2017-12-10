<div class="container-fluid">
	<div class="row mar-50">
    		<div class="col-md-6 col-md-offset-3 text-center text-uppercase">
      		<h3>membership rates</h3>
      		<h1>unlimited membership</h1>
    		</div>
	</div>
   	<div class="row text-center text-uppercase">
    		<div class="col-md-8 col-md-offset-2">
        		<?php foreach ($programs as $row) {?>
          	<div class="col-md-3">
              	<h4 class="mem-head"><?php echo $row['name']; ?></h4>
               	<h3><?php echo $row['price']; ?></h3><hr class="hr-block">
               	<p><?php echo $row['line_1']?></p><hr>
              	<p><?php echo $row['line_2']?></p><hr>
             	<p><?php echo $row['line_3']?></p><hr>
             	<a href="<?php echo site_url('index/wodify?id='. $row['id']);?>" class="btn btn-default">join now <i class="fa fa-arrow-right hide1" aria-hidden="true"></i></a>
            	</div>
            	<?php if ($row['id'] == 4) { ?>
         	<div class="row mar-50">
    				<div class="col-md-6 col-md-offset-3 text-center text-uppercase">
     				<h1>other rates</h1>
    				</div>
			</div>
         	<?php } ?>
    			<?php } ?>
      	</div>
  	</div> 
   	<div class="row">
    		<div class="text-center mar-50">
        		<p>&#42; student, couple, and family rates available upon request</p>
      	</div>
    	</div>
</div>
