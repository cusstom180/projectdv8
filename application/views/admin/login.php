<div class="container">
	<?php if (isset($error)) { ?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
		<div>errors</div>
			<div class="alert danger"><?php echo $_SERVER['error']; ?></div>
		</div>
	</div>
	<?php } ?>
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php echo form_open('admin/loginUser'); ?>
                	<div class="form-group">
                		<?php echo validation_errors(); ?>
                	</div>
                 <div class="form-group">
                		<?php echo form_label('Email', 'email'); ?>
                    	<?php echo form_input('email', '', 'class="form-control"'); ?>
                	</div>
                    <div class="form-group">
                		<?php echo form_label('Password', 'password'); ?>
                    	<?php echo form_password('password', '', 'class="form-control"'); ?>
                	</div>
                <?php echo form_submit('mysubmit', 'Add user', 'class="btn btn-default"'); ?>
          	<?php echo form_close(); ?>
		</div>
	</div>
</div>