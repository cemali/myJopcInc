<?php

/*
 * Therapeutic - JOPCINC therapeutic program
 * Matt Lee 09152012
 */
?>


<?php
include ('../includes/header.html');
?>

   <div class="page content">
        <div id="columnl"> 
              <h1>Therapeutic Activities at Joint Olive Prayer Connections(JOPC)</h1>
                 <p> JOPC Optimistic People in a caring atmosphere provides stimulating and therapeutic cognitive and sensory programs that actively engage people from early to later stages of memory loss and related neurological impairment </p>
<p>For the current monthly calendar of day program activities.  See Below (Therapeutic Calendar)</p>

                     
<!-- Set ID of calendar -->
<div class="mealCalender"> 
<center table>
<tr>
<td>
<table id="calendar" cellpadding="0" cellspacing="0">
    <tr>
     <!-- Show Month heading -->
     <th colspan="40">March 2013</th>
   </tr>
   <tr>
     <!-- Days of the Week -->
     <th>Su</th>
     <th>Mo</th>
     <th>Tu</th>
     <th>We</th>
     <th>Th</th>
     <th>Fr</th>
     <th>Sa</th>
   <tr>
   <!-- Days -->
   <tr>
     <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>1</td>
      <td>2</td>
   </tr>
   <tr>
      <td>
         <!-- Link to each event on the appropriate chosen day -->
          <a href="/events/Dad">3</a>
      </td>
      <td>4</td>
      <td>5</td>
      <td>6</td>
      <td>
         <!-- Link to event -->
          <a href="/events/19">7</a>
      </td>
      <td>8</td>
      <td>9</td>
    </tr>
    <tr>
      <td>10</td>
      <td>11</td>
      <td>12</td>
      <td>13</td>
      <td>14</td>
      <td>15</td>
      <td>16</td>
    </tr>
    <tr>
      <td>17</td>
      <td>18</td>
      <td>19</td>
      <td>20</td>
      <td>21</td>
      <td>22</td>
      <td><!-- Link to event -->
          <a href="/event/Prentiss">23</a>
      </td>
     </tr>
     <tr>
      <td>24</td>
      <td>25</td>
      <td>26</td>
      <td><!-- Link to event -->
          <a href="/event/">27</a>
      </td>
      <td>28</td>
      <td>29</td>
      <td>30</td>
     </tr>
     <tr>
       <td>31</td>
       <td colspan="6">
          <!-- Fill in leftover days with blanks -->
       </td>
      </tr>
</table>
</td>
</tr>
</table>
<!-- need some css coloring -->


<!-- adding javascript here -->

<script type="text/javascript">
// wait until document is loaded

$(function() {
    // For all anchors inside the calendar table cells, add an onclick event
    $('#calendar td a').click(function (event) {
        // stop the link from triggering
        event.preventDefault();
        // stop the body click from triggering
        event.stopPropagation();
        //Remove existing tooltips
        $('#calendar td div').remove();
        // Create a simple container for our data
             var tooltip = $('<div/>').css("position", "absolute").addClass(('tooltip'));

        // Perform the AJAX request to the anchors link
         $.AJAX({ url: this.href, success: function(data) {
            // On success, add the data inside the tooltop
               tooltip.append("<p><b>Event:</b> " + data.title + "<br /> <b>Date:</b> " +data.date+ "</p>")
            // add the tooltip to the table cell
             this.parent().append(tooltip);
                     }
                 });
                }
               );
            // add an onclick to the body to remove existing tooltips so the user can move on by clicking anywhere
            $('body').click(function() {
                $('#calendar td div').remove();
            });
});
</script>
</div> 
                  

                  <ul><li>Music therapy</li>
                  <li>Yoga</li>
                  <li>Gardening</li>
                  <li>Educational or Mental Stimulation</li>
                  <li>Puzzles</li>
                  <li>Relaxation techniques</li></ul>
    

<?php
include ('../includes/footer.html');
?>
