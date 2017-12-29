<div class="container-fluid">
	<div class="row mar-50 mar-bot-50">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-uppercase">welcome community</h1>
			<h3>Our community is unlike any in Rochester. Warm and welcoming to all who walk through its doors, our athletes are quick to give encouragement and support to everyone. Athletes become friends, and friends become family at DV8. We strive to create an environment that makes everyone feel comfortable, and we believe every athlete has the potential to be great! Come in and see us between the Firestone building and Sargent Appliance.
			</h3>
		</div>
	</div>
	<div class="row">
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
			<form method="post" id="leadsubmit">
     			<label for="first_name">First Name</label> 
     			<input id="first_name" type="text" name="first_name"> 
    	 			<label for="last_name">Last Name</label> 
    	 			<input id="last_name"  type="text" name="Last_name"> 
    	 			<label for="email">Email</label> 
    	 			<input type="text" name="email"> 
    	  			<button onclick="addlead()" type="button">Click Me!</button>  
			</form>
	</div>
	
	<script type="text/javascript">
		function addlead() {
			
			var param = $("#leadsubmit").serialize();
			$.post('<?php echo base_url('index/inset'); ?>', param,
					function(data) 
					{
					$('#loading_pic').hide();
					 if(data == "Success")
					 {
					  alert("poop");
					 }
					});
					);
			
		}
	</script>
	<!-- Modal -->
        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
          <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title" id="myModalLabel">Modal title</h4>
              </div>
              <div class="modal-body">
                ...
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
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