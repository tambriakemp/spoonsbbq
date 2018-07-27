<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

	</div><!-- #main -->

 <div id="footer">
        <div class="wrap">
            
            	<div class="c-4">
                	<div class="widget widget-about">
                    
                        <h3 class="widget-title">HISTORY OF SPOON’S BBQ! </h3>
                        <p class="image"><img src="/images/homepage/home-logo.jpg" width="82" height="82" alt="" /></p>

                        <div class="excerpt">
                            <p>Kansas City barbecue refers to the specific style of slow smoked meat that evolved from the pit of Henry Perry in the early 1900s in Kansas City, Missouri.  Kansas City barbecue is slow smoked over a variety of woods and then covered with a thick tomato and molasses based sauce.</p>  <p>The Kansas City Metropolitan Area is renowned for barbecue.    </p>
                        </div>
                        <p class="actions"><a class="read-more-white" href="../../../../special-events/wp-content/themes/specials/history-of-spoons-bbq.html" title="">Read more</a></p>
                            
                    </div><!-- end widget-about --> 
                </div>
                
                <div class="c-4">
                	<div class="widget  widget-menu-highlights">
                    
                    	<h3 class="widget-title">Location </h3>
                        <p class="image"><img src="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials//images/homepage/spoons-outside.jpg" width="270" height="190" alt="" /></p>

                    	<ul>
                        	<li>
                                <h4 class="widget-title">Spoon's Smokehouse BBQ </h4>
                                <div class="excerpt">
                                    <p>Spoon's Smokehouse BBQ Resturant & Sports Bar is currently located in College Park, GA </p>
                                    <font size="6"><span>5040 Old National Hwy</span><br /></font>
                                    <span>College Park, GA  30349</span>
                                </div>
                            </li>
                       
                   	 	</ul>
                        
                     </div><!-- end widget-menu-highlights --> 
                </div>
                
                <div class="c-4">
                	<div class="widget widget-contact-us">
                    
                        <h3 class="widget-title">Contact Us</h3>
                        <form id="contactform" action="../../../../special-events/wp-content/themes/specials/php/mail.php" method="post" enctype="multipart/form-data"> 
                            <p>
                            <label for="name">Your name:</label>
                            <input class="u-3" name="name" id="name" />
                            </p>
                            <p>
                            <label for="email">Your email:</label>
                            <input class="u-3" name="email" id="email" />
                            </p>
                            <p>
                            <label for="message">Message:</label>
                            <textarea class="u-3" name="message" id="message" rows="2" cols="1"></textarea>
                            </p>
                            <p>
                            <input type="submit" name="" class="submit" value="Contact Us" />
                            </p>
                        </form>
                    	
                    </div><!-- end widget-contact-us --> 
                </div>
        </div><!-- end wrap -->
        </div><!-- end footer -->
        
        <div id="subfooter">
            <div class="wrap">
                
                	<div class="c-6">
                    	<p id="copyright">Site Designed by <a href="http://www.blukolladesigns.com">Blu Kolla Designs</a> &copy; 2011 Spoons BBQ Sportsbar and Restaurant</p>
                    </div>
                    
                    <div class="c-6">
                        <ul class="subfooter-menu">
                            <li><a href="" title="">Terms &amp; Conditions</a></li>
                            <li><a href="" title="">Copyrights</a></li>
                            <!--<li><a href="" title="">Site Map</a></li>-->
                        </ul>
                    </div>
                    
            </div><!-- end wrap -->
        </div><!-- end subfooter --> 
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>