<?php
include("header.php");
$ProductID = $_GET['ID'];
?>
	
	<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

	<!-- Modernizr -->
  <script src="js/modernizr.js"></script>





<div class="container">
    <div class="row">
        <div class="box">
        <div class="row">
            <?php if($ProductID == 1){ ?>
                
            <div class="col-lg-6">
                <hr>
                <h2 class="intro-text text-center"><strong>Dolphin Blue</strong> </h2>
                <hr>
                <a href="#" ><img class="img-responsive img-border" src="img/dolphinblue.jpg" alt=""></a>
                <hr>
                <p style="text-align:center"> 
                Tank Capacity : 9Ltr.<br>
                Production Capacity : 10 to 15 Ltr/Hr.<br>
                Permissible Water Quality - 1500ppm<br>
                TDS rejection 90% to 95%<br></p>
                <p class="price">&#8377; 8,200 Only</p><br><br>
            </div>
            <?php } if($ProductID == 2){ ?>

            <div class="col-lg-6">
                <hr>
                <h2 class="intro-text text-center"><strong>Duster</strong> </h2>
                <hr>
                <div><a href="#" ><img class="img-responsive img-border" src="img/duster.jpg" alt="" ></a></div>
                <hr style="margin-top: 40px">
                <p style="text-align:center"> 
                Tank Capacity : 9Ltr.<br>
                Production Capacity : 10 to 15 Ltr/Hr.<br>
                Permissible Water Quality - 1500ppm<br>
                TDS rejection 90% to 95% with TDS Controller<br>
                Manual Flushing<br>
                Low pressure switch</p>
                <p class="price">&#8377; 8,800 Only</p>


            </div>
            <?php } if($ProductID == 3){ ?>

            <div class="col-lg-6">
                <hr>
                <h2 class="intro-text text-center"><strong>RO + UV</strong> </h2>
                <hr>
                <a href="#" ><img class="img-responsive img-border" src="img/ro+uv.jpg" alt=""></a>
                <hr>
                <p style="text-align:center"> 
                Tank Capacity : 14Ltr.<br>
                Production Capacity : 10 to 15 Ltr/Hr.<br>
                Permissible Water Quality - 1500ppm<br>
                TDS rejection 90% to 95%</p>
                <p class="price">&#8377; 13,500 Only</p>

            </div>
            <?php } if($ProductID == 4){ ?>

            <div class="col-lg-6">
                <hr>
                <h2 class="intro-text text-center"><strong>Aquatica</strong></h2>
                <hr>
                <a href="#" ><img class="img-responsive img-border" src="img/aquatica.jpg" alt=""></a>
                <hr style="margin-top: 32px">
                <p style="text-align:center"> 
                Tank Capacity : 9Ltr.<br>
                Production Capacity : 10 to 15 Ltr/Hr.<br>
                Permissible Water Quality - 1500ppm<br>
                TDS rejection 90% to 95%</p>
                <p class="price">&#8377; 8,400 Only</p>

            </div>
            
            <?php } if($ProductID == 5){ ?>

            <div class="col-lg-6">
                <hr>
                <h2 class="intro-text text-center"><strong>Genuine Parts</strong></h2>
                <hr>
                <a href="product.php?ID=5" ><img class="img-responsive img-border" src="img/classic.jpg" alt=""></a>
                <hr style="margin-top: 32px">
                <p style="text-align:center"> 
                This are all genuine parts which are used to build these products.<br>
                Rarely, if any part needs to be changed, then we have these genuine parts.</p>
                <!--<p class="price">&#8377; 8,400 Only</p>-->
                <p style="text-align:center"> <a href="product.php?ID=5"> <button class="btn btn-4 btn-4a icon-arrow-right">Explore More</button> </a> </p>

            </div>

            
            <?php } ?>
            
            
            <div class="col-lg-6">
                <hr>
                <h2 class="intro-text text-center">Know <strong>More...!!!</strong>
                </h2>
                <hr>
                <p>Fill out the form know more.</p>
                <form role="form">
                    <div class="row">
                        <div class="form-group col-lg-4">
                            <label>Name</label>
                            <input type="text" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Email Address</label>
                            <input type="email" class="form-control">
                        </div>
                        <div class="form-group col-lg-4">
                            <label>Phone Number</label>
                            <input type="tel" class="form-control">
                        </div>
                        <div class="clearfix"></div>
                        <div class="form-group col-lg-12">
                            <label>Message</label>
                            <textarea class="form-control" rows="6"></textarea>
                        </div>
                        <div class="form-group col-lg-12">
                            <input type="hidden" name="save" value="contact">
                            <button type="submit" class="btn btn-default">Submit</button>
                        </div>
                    </div>
                </form>
            
            </div>

        </div>
            
            
        <?php  if($ProductID == 2){ ?>
        <style>
            #carousel {
                display:none;
            }

            /* if screen size gets wider than 1024 */

            @media screen and (min-width:900px){
                #carousel {
                    display:block;
                }
            }            
        
        </style>    
            
        
        <div class="row" style="padding: 0 20%">

          <section class="slider">
            <div id="slider" class="flexslider">
              <ul class="slides">
                <li>
                    <img src="images/duster1.jpg" />
                    </li>
                    <li>
                    <img src="images/duster2.jpg" />
                    </li>
                    <li>
                    <img src="images/duster3.jpg" />
                    </li>
                    <li>
                    <img src="images/duster4.jpg" />
                    </li>
                
              </ul>
            </div>
            <div id="carousel" class="flexslider">
              <ul class="slides">
                <li>
                    <img src="images/duster1.jpg" />
                    </li>
                    <li>
                    <img src="images/duster2.jpg" />
                    </li>
                    <li>
                    <img src="images/duster3.jpg" />
                    </li>
                    <li>
                    <img src="images/duster4.jpg" />
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

            <?php } ?>
            
            
            
        </div>
    </div>

    <div class="row">
        <div class="box">
            <hr>
                <h2 class="intro-text text-center">About <strong style="color: #0E0255;">5 Stage Filteration System</strong>
                </h2>
            <hr>
            <div class="col-lg-6" >
                <iframe width="100%" height="400" src="//www.youtube.com/embed/M3mpJysa6zQ" style="" frameborder="2" allowfullscreen></iframe>
            </div>
            <div class="col-lg-6">
                <table >

                    <tr><td width="16%"><strong>STAGE 1</strong> </td><td>Sediment filter 5Micron made f polypropylene spun fiber removes suspended impurities in water like sand, dirt, rust, slit providing first, line protection for the whole system.</td></tr>

                    <tr><td width="16%"><strong>STAGE 2</strong> </td><td>Granular Carbon Pre-filter removes chlorine, colour and other organic impurities.</td></tr>

                    <tr><td width="16%"><strong>STAGE 3</strong> </td><td>Carbon Block removes smaller contaminants and other remaining chlorine particles protecting the RO membrane.</td></tr>

                    <tr><td width="16%"><strong>STAGE 4</strong> </td><td>RO membrane eliminates 90 to 95.6% of all dissolverd impurities and harmful substances in water, as well as completely eliminating algae, bacteria and viruses.</td></tr>

                <tr><td width="16%"><strong>STAGE 5</strong> </td><td>Inline Post Carbon filter improve the taste of water.</td></tr>

                </table>
            </div>
        </div>
    </div>        
                
    
    
    
    
</div>

<?php
include("footer.php");
?>