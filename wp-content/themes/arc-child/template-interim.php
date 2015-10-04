<?php
/*
Template Name: Interim Home
*/
get_header(); ?>


<?php while ( have_posts() )
    the_post();
    the_content(); ?>


<style type="text/css">
.mc4wp-form {
    width: 100%;
    max-width: 460px;
    margin: 0 auto;
    padding: 0 40px;
}
#footer, .vc_custom_1427785190873 {
	display: none;
}
.st_1443824089 {
    padding: 5px !important;
}

</style>

<?php get_footer(); ?>