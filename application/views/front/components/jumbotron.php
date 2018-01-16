<div class="container-fluid">
	<div class="row mar-50 mar-bot-50">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-uppercase">welcome community</h1>
			<h3>Our community is unlike any in Rochester. Warm and welcoming to all who walk through its doors, our athletes are quick to give encouragement and support to everyone. Athletes become friends, and friends become family at DV8. We strive to create an environment that makes everyone feel comfortable, and we believe every athlete has the potential to be great! Come in and see us between the Firestone building and Sargent Appliance.
			</h3>
		</div>
	</div>
   <div class="row mar-bot-50">
		
		</div>	
		<div class="col-md-12 text-center leads-form mar-bot-50">
			<?php echo heading('There’s always something going on at DV8. Sign-up and stay up-to-date with our events & happenings', 2, 'class="mar-bot-50"')?>
				<div id="errors"></div>
				<?php echo form_open(base_url('index/insert'), array('class' => 'jsform form-inline', 'id' => 'newsform'));?>
				<div class="form-group">
					<?php echo form_label('First Name', 'first_name');?>
					<?php echo form_input('first_name', '', 'id="first_name" class="form-control" required');?>
				</div>
				<div class="form-group">
					<?php echo form_label('Last Name', 'last_name');?>
					<?php echo form_input('last_name', '', 'id="last_name" class="form-control" required');?>
				</div>
				<div class="form-group">
					<?php echo form_label('Email', 'email');?>
					<?php echo form_input('email', '', 'id="email" class="form-control" required'); ?>
				</div>
				<?php echo form_submit('submit', 'Sign Me Up!', 'class="btn btn-default" data-toggle="modal" data-target="myModal"');?>
				<input type="hidden" id="check" name="check" value="check" />
				<?php echo form_close();?>
				
			<p id="message"></p>
		</div>
	
	<script type="text/javascript">

	$("document").ready(function(){
		'use strict';
		$("form.jsform").on("submit", function(form) {
			
			form.preventDefault();

			var fname = $('#first_name').val();
			var lname = $('#last_name').val();
			var email = $('#email').val();
			var check = $('#check').val();
			
			$('#form-message').load('<?php echo site_url('index/insert');?>',
					{
				'fname': fname,
				'lname': lname,
				'email': email,
				'check': check
				}
			);
			
		});
	});
			
	</script>
	<!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-capitalize" id="myModalLabel">dv8 newsletter</h4>
              </div>
              <div class="modal-body text-center">
                <p id="form-message"></p>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
</div> 
</div>

<div class="jumbotron text-center work">
  <h1>get started today</h1>
  <p>
  	<a class="btn btn-default btn-lg" href="<?php echo base_url('index/gettingstarted');?>" role="button">i'm new to crossfit <i class="fa fa-arrow-right hide1" aria-hidden="true"></i></a>
  	<a class="btn btn-default btn-lg" href="<?php echo base_url('index/schedule');?>" role="button">not my first rodeo <i class="fa fa-arrow-right hide1" aria-hidden="true"></i></a>
  </p>
</div>