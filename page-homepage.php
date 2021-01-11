<?php
/*
    Template Name: homepage
    */

get_header(); ?>
           <div id="acc-content">
		    <section class="section-1" id="imagine">
		        <div class="container">
	             <div class="row">
	               <div class="text-holder">
	       <?php $the_query = new WP_Query('p=130'); ?>
<?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
    
<?php the_content(); ?>
<?php endwhile; ?>
<?php wp_reset_postdata();?>
                  </div>
                  <div class="img-holder">
                 
                   <img  src="http://u68977a8.beget.tech/wp-content/uploads/2021/01/Group-24-Copy-3.png" class="center-img" />
                 
                  </div>
              </div>
          </div>
       </section>
       <section class="section-2" id="hurry">
           <div class="container">
	             <div class="row">
	              <div class="img-holder">
                    <h2 class="main-title">Hurry up to join</h2>
                   <img  src="http://u68977a8.beget.tech/wp-content/uploads/2021/01/join-1.png"  />
                  </div>
                  <div class="text-holder">
                       <?php $the_query = new WP_Query('p=133'); ?>
<?php while  ($the_query->have_posts() ) : $the_query->the_post(); ?>
    
<?php the_content(); ?>
<?php endwhile; ?>
<?php wp_reset_postdata();?>
 <div id="join">
     <a href="" title="Join us" class="btn-blue">Join us</a> 
     </div>
                 </div>
              </div>
          </div>

        </section>
<?php

get_footer();
