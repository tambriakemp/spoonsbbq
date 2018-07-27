<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 */

get_header(); ?>
<div id="intro">
        <div class="wrap">
        	
            <div class="c-8">
            	<h1>Special Offers</h1>
                <p class="breadcrumbs">You are here: <a href="../../../../special-events/wp-content/themes/specials/index.html">Home</a> &raquo; <strong>Special Offers</strong> </p>
            </div>
            
            <div class="c-4">
            	<ul class="social-bookmarking">
                	<li><a class="tw" href=""></a></li>
                    <li><a class="fb" href="http://www.facebook.com/spoonsbarbq" TARGET="_blank"></a></li>
                    <li><a class="in" href=""></a></li>
                    <li><a class="rss" href=""></a></li>
                </ul>
            </div>
            
        </div><!-- end wrap -->
        </div><!-- end intro -->
        
        <div id="content">
        
        	<div class="wrap">
            	<div class="c-8 divider">
                
                	<div class="review-list">

                    	
                       <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                       
							<div class="treat-h"><?php the_post_thumbnail(); ?></div>
                                <div class="treat-c"><h2><?php the_title(); ?></h2>
								
                                <div class="text"><?php the_content('<p>Read more</p>'); ?> </div>
                                <div class="read"><a href="<?php the_permalink() ?>" class="button"><span style="font-size:16px;">More Info</span></a></div>	
								</div>               
                                        
        
                    <?php endwhile; endif; ?>
					
					   <div style="clear: both"><img src="<?PHP bloginfo('template_directory'); ?>/images/spaser.gif" alt="" width="1" height="1" /></div>
                        
                       
                   <!--<div class="pagination">
                    	<ul>
                            <li><a href="#" class="previous">Previous</a></li>
                            <li><a href="#" class="current">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#" class="next">Next</a></li>
                        </ul>
                    </div> -->
                        
                    </div><!-- end post-list -->
                    
                </div>
                
                <div class="c-4 sidebar">
                	<div class="widget widget-today-special">
                        
                        <h3 class="widget-title">This Week Special</h3>
                        <p class="image"><img width="142" height="142" alt="" src="http://www.spoonsbarbq.com/special-events/wp-content/themes/specials/images/weekspecial.jpg" /></p>
                        <h2 class="title"><a title="" href="">Angus Beef Gourmet Burger 8oz</a></h2>
                        <div class="excerpt">
                            <p>Angus Beef Gourmet Burger 8oz with 1 side</p>
                        </div>
                        <p class="actions"><a title="" href="" class="read-more-red"></a></p>
                    
                    </div><!-- end widget-today-special -->
                    
                    <div class="widget widget-news-events">
                        
                        <h3 class="widget-title">Football Headquarters</h3>
                        <ul>
                            <li>
                                <!--<p class="meta">10 APRIL | 2011</p>-->
                                <h3 class="title"><a title="" href="">Join us for </a></h3>
                                <div class="excerpt">
<p>Monday Night NFL Football</p>
            <p> Thursday Night NFL & College Football</p>
             <p>Saturday College Football</p>
             <p>Sunday NFL Football</p>   </div>                         </li>
                           
                        </ul>
                        
                    </div><!-- end widget-news-events-->
                    
                    <div class="widget widget-restaurant-hours">
                            <h3 class="widget-title">Restaurant Hours</h3>
                            <ul class="restaurant-hours">
                                <!--<li><p class="meta">LUNCH</p></li>-->
                                <li>
                                    <label>Monday - Friday</label>
                                    <span>11:00 am - 11:00pm</span>
                                </li>
                                <li>
                                    <label>Friday - Saturday</label>
                                    <span>11:00 am - 12:00am</span>
                                </li>
								<li>
                                    <label>Sunday</label>
                                    <span> 1:00 pm - 11:00pm</span>
                                </li>
                            </ul>
                    </div><!-- end widget-restaurant-hours -->
                        
                </div><!-- end sidebar -->
            </div><!-- end wrap -->
        </div><!-- end content -->



<?php get_footer(); ?>