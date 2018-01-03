<div class="container-fluid">
	<div class="row mar-50 mar-bot-50">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-uppercase">welcome community</h1>
			<h3>Our community is unlike any in Rochester. Warm and welcoming to all who walk through its doors, our athletes are quick to give encouragement and support to everyone. Athletes become friends, and friends become family at DV8. We strive to create an environment that makes everyone feel comfortable, and we believe every athlete has the potential to be great! Come in and see us between the Firestone building and Sargent Appliance.
			</h3>
		</div>
	</div>
	<div class="row mar-bot-50">
		<?php /* echo form_open('');
		      echo validation_errors();
		      echo form_label('First Name', 'first_name');
		      echo form_input('first_name');
		      echo form_label('Last Name', 'last_name');
		      echo form_input('last_name');
		      echo form_label('Email', 'email');
		      echo form_input('email');
		      echo form_submit('leadsubmit', 'Sign me up!', 'class="btn btn-default" data-toggle="modal" data-target="#myModal"');
		      echo form_close(); */
		?>
		</div>	
		<div class="col-md-12 text-center leads-form">
			<?php echo heading('There’s always something going on at DV8. Sign-up and stay up-to-date with our events & happenings', 2, 'class="mar-bot-50"')?>
				<?php echo validation_errors();?>
				<div id="errors"></div>
				<?php echo form_open('', array('class' => 'jsform'));?>
				<?php echo form_label('First Name', 'first_name');?>
				<?php echo form_input('first_name', '', 'id="first_name" required');?>
				<?php echo form_label('Last Name', 'last_name');?>
				<?php echo form_input('last_name', '', 'id="last_name"');?>
				<?php echo form_label('Email', 'email');?>
				<?php echo form_input('email', '', 'id="email"'); ?>
				<?php echo form_submit('submit', 'Sign Me Up!', 'class="btn btn-default" data-toggle="modal" data-target="myModal"');?>
				<?php echo form_close();?>
				
    	 		<!-- 	<label for="last_name">Last Name</label> 
    	 			<input id="last_name" type="text" name="Last_name"> 
    	 			<label for="email">Email</label> 
    	 			<input id="email" type="text" name="email">  
    	 			<button onclick="addlead()" type="button" class="btn btn-default" data-toggle="modal" data-target="myModal">Sign Me Up!</button>  -->
    	  			
			<p id="message"></p>
		</div>
	
	<script type="text/javascript">

	$("document").ready(function(){
		$("form.jsform").on("submit", function(form) {
			form.preventDefault();

			$.ajax({
			    type: "POST",
			    url: "<?php echo base_url('index/insert');?>",
			    data: {fname: first_name,
			    			lname: last_name,
			    			email: email},
			    datatype: "JSON",
			    success: function(data) {
			        
			        var response = JSON.parse(data);
			        console.log(response);
			        //$("#message").html(response);
			        //$("#message").addClass("alert alert-success");
			    },
			    error: function(err) {
			        alert(err);
			    }
			});
			
		});
	});
	
			/* $(document).ready(function(){
			        $('.jsform').on('submit', function(form){
			            form.preventDefault();
			            $.post('insert', $('.jsform').serialize(), function(data){
			                $('div.jsError').html(data);
			            });
			        });
			    });
			 */
		
	</script>
	<!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-capitalize" id="myModalLabel">dv8 newsletter</h4>
              </div>
              <div class="modal-body">
                <p>Thank you for joining our newsletter. </p>
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