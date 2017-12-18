<div class="container-fluid contact-header">
	<div class="row">
		<?php echo heading('say hello', 1, 'class=mar-bot-50');?>
	</div>
</div>
<div class="container-fluid mar-50">
    <form id="form-back" class="col-md-8 col-md-offset-2" action="https://app.wodify.com/API/WebToLeadFormPostEntry_v1.aspx?" accept-charset="UTF-8" method="POST" id="wodifyLeadForm" name="wodifyLeadForm" onsubmit="return validateWodifyLeadForm();">
    <div class="form-row">
      <div class="form-group col-md-6">
        <label class="col-form-label" for="name">Name</label>
        <input class="form-control" type="text" name="name" maxlength="50" required data-required></input>
        <span id="errorname" name="errorname" style="display: none; color: #cc2626;"> Required field!</span>
      </div>
      <div class="form-group col-md-6">
        <label class="col-form-label" for="email">Email</label>
        <input class="form-control" type="email" name="email" maxlength="250" required data-required></input><span id="erroremail" name="erroremail" style="display: none; color: #cc2626;"> Required field!</span></div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label class="col-form-label" for="location">Location</label>
        <select class="form-control" name="location" required><option value="">-</option><option value="2048" selected="selected">CrossFit Deviate</option></select><span id="errorlocation" name="errorlocation" style="display: none; color: #cc2626;"> Required field!</span>
      </div>
      <div class="form-group col-md-6">
        <label class="col-form-label" for="phone">Phone</label>
        <input class="form-control" type="text" name="phone" maxlength="20"></input>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label class="col-form-label" for="city">City</label>
        <input class="form-control" type="text" name="city" maxlength="50"></input>
      </div>
      <div class="form-group col-md-6">
        <label class="col-form-label" for="state">State</label>
        <select class="form-control" name="state">
          <option value="">-</option><option value="24">Alaska</option><option value="22">Alabama</option><option value="20">Arkansas</option><option value="11">Arizona</option><option value="21">California</option><option value="32">Colorado</option><option value="12">Connecticut</option><option value="44">District of Columbia</option><option value="9">Delaware</option><option value="39">Florida</option><option value="34">Georgia</option><option value="19">Hawaii</option><option value="49">Iowa</option><option value="40">Idaho</option><option value="23">Illinois</option><option value="5">Indiana</option><option value="25">Kansas</option><option value="30">Kentucky</option><option value="48">Louisiana</option><option value="6">Massachusetts</option><option value="1">Maryland</option><option value="50">Maine</option><option value="33">Michigan</option><option value="27">Minnesota</option><option value="2">Missouri</option><option value="36">Mississippi</option><option value="18">Montana</option><option value="8">North Carolina</option><option value="29">North Dakota</option><option value="35">Nebraska</option><option value="31">New Hampshire</option><option value="38">New Jersey</option><option value="43">New Mexico</option><option value="10">Nevada</option><option value="3">New York</option><option value="47">Ohio</option><option value="42">Oklahoma</option><option value="28">Oregon</option><option value="51">Pennsylvania</option><option value="13">Rhode Island</option><option value="45">South Carolina</option><option value="17">South Dakota</option><option value="37">Tennessee</option><option value="15">Texas</option><option value="41">Utah</option><option value="16">Virginia</option><option value="4">Vermont</option><option value="7">Washington</option><option value="26">Wisconsin</option><option value="46">West Virginia</option><option value="14">Wyoming</option>
          </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <label class="col-form-label" for="leadsource">How Did You Hear About Us</label>
        <select class="form-control" name="leadsource">
          <option value="">-</option><option value="Friend/Family">Friend/Family</option><option value="Facebook">Facebook</option><option value="Google/Search Engine">Google/Search Engine</option><option value="SMS">SMS</option><option value="Online Sales">Online Sales</option><option value="Other">Other</option>
          </select>
      </div>
    </div>
    <div class="form-row">
      <div class="form-group col-md-6">
        <div class='g-recaptcha' data-sitekey='6Ld3SgsUAAAAAKOwXbX-HMX1bf38TJ-WY2Q6wr9S' data-callback='callbackFunc'></div>
		<input type='hidden' id='recaptcha_response_field' name='recaptcha_response_field' value='manual_challenge' style='margin-top:20px;'><span id="errorCAPTCHA" name="errorCAPTCHA" style="display: none; color: #cc2626;"> Invalid reCAPTCHA!</span><input type="hidden" id="usecaptcha" name="usecaptcha" value="true"></input>
      </div>
      <div>
        <div class="form-row">
          <div class="form-group col-md-12">
            <label class="col-form-label" for="comments">Comments</label>
            <textarea class="form-control" name="comments" maxlength="2000" rows="4" cols="50"></textarea>
          </div>
        </div>
      </div>
      
    </div>
    <div class="form-row">
      <div class="form-group col-md-12">
        
        <input class="form-control" type="submit" value="Submit">
        <input type="hidden" name="apikey" value="us7kwfsehb">
      </div>
    </div>
  </form>
</div>
<div class="container-fluid mar-50 mar-bot-50">
  <div class="row mar-tp-100 text-center text-capitalize">
  	<div class="col-md-4">
  			<i class="fa fa-map-marker fa-3x" aria-hidden="true"></i>
  		<div class="inline">
  		  <h2 class="inline">location</h2>
  		  <h3>528 n. main st, rochester, mi 48307</h3>
	  </div>
  	</div>
  	<div class="col-md-4 text-center">
 		  	<i class="fa fa-phone fa-3x" aria-hidden="true"></i>
 		  <div class="inline">
  		  <h2 class="inline">phone</h2>
  		  <h3><a href="tel:2482666688">&#40;248&#41; 266-6688</a></h3>
	  </div></div>
  	<div class="col-md-4 text-center">
 		  	<i class="fa fa-envelope fa-3x" aria-hidden="true"></i>
 		  <div class="inline">
  		  <h2 class="inline">email</h2>
  		  <h3><a class="text-lowercase" href="mailto:crossfitdv8@gmail.com">crossfitdv8@gmail.com</a></h3>
	  </div></div>
  </div>
</div>
<div class="container-fluid">
	<div class="row">
		<iframe class="google-map" src="https://www.google.com/maps/embed/v1/place?key=AIzaSyCNNiWqCJe5HnyMJ_sEpNyLvskuZ2A1iRg&q=CrossFit+Deviate,Rochester+MI" width="100%" height="350px" frameborder="0" >
    </iframe>
</div>
</div>