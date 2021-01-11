<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 *
 * @package Card_US
 */

 

    if( is_home() || ! $ed_section || ! ( is_front_page()   ) ){ ?>
        	
        <!-- #content -->
    
    <?php } ?>

	<footer id="colophon" class="site-footer" role="contentinfo" itemscope itemtype="https://schema.org/WPFooter">
      		<div class="widget-area">
				<div class="container">
					<div class="footer-t">
                        <div class="row">
					   <div class= "col-3">
					       <section id="text-1">			
					       Contacts  <br><br>
<p>Estonia: Narva mnt 5,<br>
Tallinn city, Harju county,<br>
10117</p>

		</section>
					       </div>
                             <div class= "col-3">
                                  <section id="text-2">
                                 Got a question?<br><br>
                                  <ul class="social-networks">
				              
				                 <li>
                               <img src="http://u68977a8.beget.tech/wp-content/uploads/2021/01/youtube.png"/> 
                               </li> 
				                  <li> contest@solve.care </li>
				                  </ul>
				                  <br>
                                 <ul class="social-networks">
				              
				                 <li>    <a href="" title="Telegram">
				                     <img src="http://u68977a8.beget.tech/wp-content/uploads/2021/01/telegram-1.png"/>
				                   </a></li> 
				                  <li>   <a href="" title="Youtube">
				                       <img src="http://u68977a8.beget.tech/wp-content/uploads/2021/01/youtube.png"/>
				                  </a></li>
				                       <li>   <a href="" title="Linkedin">
				                       <img src="http://u68977a8.beget.tech/wp-content/uploads/2021/01/LinkedIn.png"/>
				                  </a></li>
				                   <li>  <a href="" title="Facebook">
				                        <img src="http://u68977a8.beget.tech/wp-content/uploads/2021/01/fb-1.png"/>
				                   </a></li>
				                       
				                      </ul>
                                 </section>
					       </div>   
                       
                    </div>
                     <div class="row">
					   <div class= "col-6">
                    <section id="text-1" class="widget widget_text">
                        <div class="textwidget"><p>
                           @ 2019 Solve.Care. All Rights Reserved |<a href="#">Terms of use</a> | <a href="#">Privacy policy </a> </p>
</div>
		</section>
		</div>
		</div>
				</div>
			</div>	
		</div>
        
		
	</footer><!-- #colophon -->
    <div class="overlay"></div>

</div><!-- #acc-content -->
</div><!-- #page -->

<?php wp_footer(); ?>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bs4-summernote@0.8.10/dist/summernote-bs4.min.js"></script>

</body>
</html>
