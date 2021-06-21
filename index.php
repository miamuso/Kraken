<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package practice
 */

get_header();
?>

	<main id="primary" class="site-main">
		<section class="hero">
  			<img class="hero-art" src="<?php bloginfo('template_url'); ?>/assets/kraken-art.svg" alt="An orange circular logo with an octopus inside, with white and orange text that says 'Kraken cold brew">
  			<div class="hero-text">
    			<h1 class="hero-header">
      				Dark and Stormy Brews Emerge
    			</h1>
    			<h2 class="hero-paragraph">
      				Trifecta, organic, irish grinder foam roast cup extra.
    			</h2>
    			<a href="#" class="hero-button">Order Now</a>
    			<a href="#" class="hero-button">Find a Store</a>
  			</div>
  			<img class="hero-background" src="<?php bloginfo('template_url'); ?>/assets/coffee-steam.png" alt="A very faint image of a coffee cup with steam coming from the top">
		</section>

		
		
		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) :
				?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
				<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				/*
				 * Include the Post-Type-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Type name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_type() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif;
		?>

	</main><!-- #main -->

<script>
	let buttonTag = document.querySelector('header a.stamps');

	// adding the stamp images as an array that get added on click

	let number = 0;
	const stamps = [
    	"wp-content/themes/practice/assets/circles.svg", 
		"wp-content/themes/practice/assets/waves.svg", 
		"wp-content/themes/practice/assets/circles-1-3.svg", 
		"wp-content/themes/practice/assets/waves-1-2.svg"
	]

	const stampsTag = document.querySelector("div.stamps");

	// using two arguments, x and y, for the position of the page click to add the stamp
	const addStamp = function(x, y){
    	const img = document.createElement("img");

    img.setAttribute("src", stamps[number]);

    // this is where the stamps will go, on the x access, cutting the window width in half instead of the whole page from the top:0
    img.style.left = (x - window.innerWidth / 2) + "px"
	img.style.top = y + "px";
	
	window.addEventListener('scroll', function(){
    img.style.display = 'none';
    
  })



  	stampsTag.appendChild(img)


  	number = number + 1
  	if (number > stamps.length - 1) {
    	number = 0
  	}

	}

	// adding stamp on the click event, then removing it if the accessibility button in the header is clicked
	function stampFunc(event) {
    	addStamp(event.pageX, event.pageY)
  
    	buttonTag.addEventListener("click", function(){
    	document.removeEventListener("click", stampFunc)
  	})
	}
  
  document.addEventListener("click", stampFunc)



</script>

<?php
// get_sidebar();
get_footer();
