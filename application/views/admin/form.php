<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<?php echo form_open('admin/insert'); ?>
                	<div class="form-group">
                		<?php echo validation_errors(); ?>
                	</div>
                		<?php echo form_label('Name', 'name'); ?>
                    		<?php echo form_input('name', '', 'class="form-control"'); ?>
                 <div class="form-group">
                		<?php echo form_label('Email', 'email'); ?>
                    	<?php echo form_input('email', '', 'class="form-control"'); ?>
                	</div>
                    <div class="form-group">
                		<?php echo form_label('Password', 'password'); ?>
                    	<?php echo form_password('password', '', 'class="form-control"'); ?>
                	</div>
                     <div class="form-group">
                		<?php echo form_label('Confirm Password', 'confirm_password'); ?>
                    	<?php echo form_password('confirm_password', '', 'class="form-control"'); ?>
                	</div>
                <?php echo form_submit('mysubmit', 'Add user', 'class="btn btn-default"'); ?>
          	<?php echo form_close(); ?>
		</div>
	</div>
</div>