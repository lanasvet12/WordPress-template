<?php
/**
 * The header for our theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Restaurant_and_Cafe
 */
    

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head itemscope itemtype="https://schema.org/WebSite">
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="/wp-content/themes/card_us/contact.js"></script>

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?> itemscope itemtype="https://schema.org/WebPage">
<?php 
wp_body_open(); 



?>
<div id="page" class="site">
    <script>
jQuery(document).ready(function($) {
	$("#contact").submit(function() {
		var str = $(this).serialize();
		$.ajax({
			type: "POST",
			url: "<?php bloginfo('template_url'); ?>/mail.php", // здесь указываем путь ко второму файлу
			data: str,
			success: function(msg) {
				if(msg == 'OK') {
					result = '<div class="ok">Сообщение отправлено</div>'; // текст, если сообщение отправлено
					$("#fields").show();
				}
				else {result = msg;}
				$('#note').html(result);
				 $('.input', '#contact') // очищаем поля после того, как сообщение отправилось
 .not(':button, :submit, :reset, :hidden')
 .val('')			 
			}
		});
		return false;
	});
});
</script>

	<a class="skip-link screen-reader-text" href="#acc-content"><?php esc_html_e( 'Skip to content (Press Enter)', 'CARD US' ); ?></a>
	<header id="masthead" class="site-header <?php if( is_page_template( 'template-home.php' )  ) echo 'page-template-header'; if( !is_page_template( 'template-home.php' ) ) echo 'header-inner'; ?>" role="banner" itemscope itemtype="https://schema.org/WPHeader">
		<div class = "container">
		<div class="site-branding" itemscope itemtype="https://schema.org/Organization">
		<?php 
			if( function_exists( 'has_custom_logo' ) && has_custom_logo() ){
            	the_custom_logo();
            }
            ?>
            <div class="text-logo">
            <?php
            if ( is_front_page() ) : ?>
                <h1 class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
            <?php else : ?>
                <p class="site-title" itemprop="name"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></p>
            <?php endif;
			$description = get_bloginfo( 'description', 'display' );
			if ( $description || is_customize_preview() ) : ?>
				<p class="site-description" itemprop="description"><?php echo $description; /* WPCS: xss ok. */ ?></p>
			<?php
			endif; ?>
        </div>
		</div><!-- .site-branding -->
			<div id="menu-opener">
			    <span></span>
			</div>
			
			<nav id="site-navigation" class="main-navigation" role="navigation">
			
			<?php
			wp_nav_menu(
				array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				)
			);
			?>
		
		</nav><!-- #site-navigation -->
		
			</div>
		<div class="banner-text">
                    <div class="container">
                        <img  src="http://u68977a8.beget.tech/wp-content/uploads/2021/01/Care.Card-Contest-logo-for-balloon-1.png"  class="img_baner" >
                    <div class="text">
                      <strong class="title">How design makes healthcare better</strong>
                    </div>
                    </div>
                    </div>
	
	</header><!-- #masthead -->

   	

		
   	
	
