<div id="carousel1" class="carousel slide carousel-fade" data-ride="carousel" data-interval=7000>
  <ol class="carousel-indicators">
    <li data-target="#carousel1" data-slide-to="0" class="active"></li>
    <li data-target="#carousel1" data-slide-to="1"></li>
    <li data-target="#carousel1" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner" role="listbox">
    <div class="item active"><img src="<?php echo base_url('public_html/images/CrossFit_DV8_snatch_girl.jpg');?>" alt="First slide image" class="center-block img-responsive">
      <div class="carousel-caption">
        <h2 data-animation="animated fadeInDown" >CrossFit DV8 is a private gym located in Downtown Rochester with unique workouts for every age and fitness level.</h2>
        <?php echo anchor('index/wodify?id=9', '<h1 data-animation="animated fadeInDown" class="text-capitalize psuedo-btn">sign up for your free trial</h1>')?>
      </div>
    </div>
    <div class="item"><img src="<?php echo base_url('public_html/images/DV8_view_of_open_gym.jpg'); ?>" alt="Second slide image" class="center-block img-responsive">
      <div class="carousel-caption">
        <h2 data-animation="animated fadeInDown" >Our WODs offer targeted exercises for strength and conditioning training. BootCamp, Olympic Weightlifting, and Youth Fitness classes provide a well-rounded exercise program for our athletes. </h2>
        <?php echo anchor('index/programs', '<h1 data-animation="animated fadeInDown" class="text-capitalize psuedo-btn">get started</h1>'); ?>   
	  </div>
    </div>
    <div class="item">
     <img src="<?php echo base_url('public_html/images/CrossFit_Deviate_rower.jpg');?>" alt="Third slide image" class="center-block img-responsive">
      <div class="carousel-caption">
        <h2 data-animation="animated fadeInDown" >Be a part of a family who motivates and inspires you.</h2>
        <?php echo anchor('index/gettingstarted', '<h1 data-animation="animated fadeInDown" class="text-capitalize psuedo-btn">meet us</h1>')?>
      </div>
    </div>
  </div>
</div>