<?php get_header(); ?>
<?php $content = apply_filters( 'the_content', get_the_content() );
echo $content; ?>
<?php get_footer(); ?>
