<?php get_header() ?>
<main>
    
<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        echo '<section class="content-block">';
        echo "<h2>"; the_title(); echo "</h2>";
        
        if ( has_post_thumbnail() ) {
            the_post_thumbnail('thumbnail', array( 'class' => 'zoom' ));
        }
 
        echo '<p class="contact">Amet: ' . get_post_meta(get_the_ID(), $key = 'Amet', $single = true) . "</p>";
            
        the_content(); 

        $email = get_post_meta(get_the_ID(), $key = 'EPost', $single = true);
        echo '<p class="contact">e-post: <a href="mailto:' . $email . '">' . $email . "</a></p>";;

        echo "</section>";
    }
}
?>

</main>
<?php
    get_footer();
?>
