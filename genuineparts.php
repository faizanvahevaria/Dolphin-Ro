<?php 
include("./header.php")
?>
	
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

<!-- Modernizr -->
<script src="js/modernizr.js"></script>


<div class="container">
    <div class="row">
        <div class="box">
            <div class="row">
           
<style>
            #carousel {
                display:none;
            }

            /* if screen size gets wider than 1024 */

            @media screen and (min-width:900px){
                #carousel {
                    display:block;
              }            
        
</style>    
            
        
        <div class="row" style="padding: 0 20%">

          <section class="slider">
            <div id="slider" class="flexslider">
              <ul class="slides">
                <li>
                    <img src="img/1.JPG" />
                </li>
                <li>
                    <img src="img/2.JPG" />
                </li>
                <li>
                    <img src="img/3.JPG" />
                </li>
                <li>
                    <img src="img/4.JPG" />
                </li>
                <li>
                    <img src="img/5.JPG" />
                </li>
                <li>
                    <img src="img/6.JPG" />
                </li>
                <li>
                    <img src="img/7.JPG" />
                </li>
                <li>
                    <img src="img/8.JPG" />
                </li>
                
              </ul>
            </div>
            <div id="carousel" class="flexslider">
              <ul class="slides">
                <li>
                    <img src="img/1.JPG" />
                </li>
                <li>
                    <img src="img/2.JPG" />
                </li>
                <li>
                    <img src="img/3.JPG" />
                </li>
                <li>
                    <img src="img/4.JPG" />
                </li>
                <li>
                    <img src="img/5.JPG" />
                </li>
                <li>
                    <img src="img/6.JPG" />
                </li>
                <li>
                    <img src="img/7.JPG" />
                </li>
                <li>
                    <img src="img/8.JPG" />
                </li>
                
              </ul>
            </div>
          </section>
        </div>    
 
            

   <script src="js/jquery-1.10.2.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.7.min.js">\x3C/script>')</script>         
  <script defer src="js/jquery.flexslider.js"></script>

  <script type="text/javascript">
    $(function(){
      SyntaxHighlighter.all();
    });
    $(window).load(function(){
      $('#carousel').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        itemWidth: 210,
        itemMargin: 5,
        asNavFor: '#slider'
      });

      $('#slider').flexslider({
        animation: "slide",
        controlNav: false,
        animationLoop: false,
        slideshow: false,
        sync: "#carousel",
        start: function(slider){
          $('body').removeClass('loading');
        }
      });
    });
  </script>

                        
 <!-- Optional FlexSlider Additions -->
  <script src="js/jquery.easing.js"></script>
  <script src="js/jquery.mousewheel.js"></script>
  <script defer src="js/demo.js"></script>
            </div>
        </div>
    </div>
</div>



<?php 
include("./footer.php")
?>