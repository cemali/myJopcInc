<?php

/*
 * home.php to keep things dry in the home html
 * 09092012 Matt Lee
 */
?>




<?php
  include "../includes/header.html"
?>


<!-- start of the slideshow -->
	<div class="slideshow">

		<div id="slider">
			<img src="../images/man_femaleElder2.jpg" alt="" title="always finding new friends " />
			<img src="../images/man-playing-bridge2.jpg" alt="" title="always something to do" />
			<img src="../images/women-friends2.jpg" alt="" title="BFFL" />
                        <img src="../images/homelessMan.jpg" alt="" title="Some still loves their independence" /> 
                        <img src="../images/nurseHappyMoments.jpg" alt="" title="Days can be fun" /> 
                        <img src="../images/elderlyWondering.jpg" alt="" title="love life" />
                        <img src="../images/promise2.jpg" alt="" title="It would always be here for us." /> 
                        <img src="../images/nurseGivingAssistance2.jpg" alt="" title="always willing to help" />
                        <img src="../images/relaxingMoment2.jpg" alt="" title="enjoying the moments" />
                       
		</div>

	</div>




<!-- Adding Slider to body -->
<script type="text/javascript">
$(window).load(function() {
	$('#slider').nivoSlider({
		effect:'fade', //Specify sets like: 'fold,fade,sliceDown'
		animSpeed:500, //Slide transition speed = 500
		pauseTime:5000, //3000
		startSlide:0, //Set starting Slide (0 index)
		directionNav:true, //Next & Prev
		directionNavHide:true, //Only show on hover
		controlNav:false //1,2,3...
	});
});
</script>

<div class="page content">
        <div id="columnl"> 
              <h1>Joint Olive Prayer Connection Inc (JOPC)</h1>
                 <p>
JOPC Inc. is a nonprofit organization that offers adult day services, community outreach, and medical equipment. Our adult day center provides a coordinated program of professional and compassionate services for adults who need supervised care in a safe place outside the home. During the day program, we offer healthy meals that accommodate special diets along with afternoon snacks. We also offer socialization, structured activities, and outings for more, <a href="socAct.php">click here</a></p>
<p>We give caregivers respite from the demanding responsibilities of care giving. Our program also will offer services in the evenings and on weekends as needed. Our community outreach will provide food, clothing, and spiritual uplifting on a monthly basis to our surrounding communities. For more click here 
</p>
<p>We also have a conference prayer line where individuals can call and join us live during our corporate prayer. For more <a href="prayerLine.php">click here</a>
</p>
<p>
We will help put medical equipment in the hands of those who need it the most.<a href="donate.php">click here for more info.</a></p> 

          

<?php
  include "../includes/footer.html"
?>
