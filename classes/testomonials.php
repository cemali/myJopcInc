<?php

/*
 * Testimonials - JOPCINC Testimonials program
 * Matt Lee 09152012
 */
?>


<?php
include ('../includes/header.html');
?>
<article>
   <div class="page content">
        <div id="columnl"> 
              <h1>Testomonials for Joint Olive Prayer Connections(JOPC)</h1>
              

<p>Ms Josephine says <span class=auntJ> "My body maybe old, but my spirit still young and alive".</span>, "I started this journey many years ago.  I was part of a prayer band of women (I was ordained, but could not serve in pulpit), we would visit the sick, elderly, homebound, and incarcerated.  We brought the word of God, and the works of His hands.  We would fast, pray, divide the word, and clean house, for all that needed our special care.  We would shop, prepare meals, wash, and fold clothes, change bandages, and offer a word from the Lord.  Sometimes I would lie in bed next to a sister who needed healing, and I saw the works of the Lord. Now that I'm older I can see the fruits of the seeds that were planted." Ms Hill age 92
.</p>




</article>

<script type="text/javascript">


(function(){
    var auntJ = $('span.auntJ').each(function(){
         var $this = $(this);
         $('<blockquote></blockquote>', {
             class:'auntJ', /* JavaScript has a number of reserved keywords; these are not used in the language yet but are reserved for future usage. NetBeans will warn you when you attempt to use these (unless you disable the warning of course).*/
             text: $this.text()
         }).prependTo($this.closest('p'));
         });
         
    
})();

</script>
<?php
include ('../includes/footer.html');
?>
