<?php

/*
 * recAct.php - 
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
        <SECTION> <!-- <div id="columnl"> -->
              <h1>Joint Olive Prayer Connection Inc (JOPC)</h1>
                 <ARTICLE><P>Our regular activities include:</P></ARTICLE>
<ARTICLE><P></P></ARTICLE>
<UL><LI>Assistance with eating, taking medicines, toileting, and/or walking </LI>
    <LI>Counseling</LI>
    <LI>Educational programs or mental stimulation</LI>
    <LI>Exercise programs</LI>
    <LI>Podiatry care</LI>
    <LI>Hair care</LI>
    <LI>Preparation of meals and snacks</LI>
    <LI>Social activities</LI>
    <LI>Transportation services</LI>
</UL>

          </SECTION>

<?php
  include "../includes/footer.html"
?>