<?php
get_header();
?>

<?php
if (have_posts()) {
    while (have_posts()) {
        the_post();
        ?>
        <a href="<?php echo get_the_permalink(); ?>"><?php echo get_the_title(); ?></a>
        <?php
        the_content();
    }
}
if (paginate_links()) {
    echo paginate_links();
}
?>

<?php
get_footer();
