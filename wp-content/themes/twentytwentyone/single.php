<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

/* Start the Loop */
while (have_posts()):
    the_post();

    get_template_part('template-parts/content/content-single');

    //-----------------
    $images = get_field('photogallery');
    $size = 'thumbnail'; // (thumbnail, medium, large, full или произвольный размер)

    if ($images): ?>
<ul class="object-gallery">
    <?php foreach ($images as $image): ?>
    <li>
        <a href="<?php echo $image['url']; ?>"
            alt="<?php echo get_post_meta($image['ID'], "_wp_attachment_image_alt")[0]; ?>"
            title="<?php echo get_the_excerpt($image['ID']) ?>">
            <?php echo wp_get_attachment_image($image['ID'], $size) ?>
        </a><br />
        <div><?php echo get_the_content(null, null, $image['ID']) ?></div>
    </li>
    <?php endforeach;?>
</ul>
<?php endif;
//-------------

if (is_attachment()) {
    // Parent post navigation.
    the_post_navigation(
        array(
            /* translators: %s: Parent post link. */
            'prev_text' => sprintf(__('<span class="meta-nav">Published in</span><span class="post-title">%s</span>', 'twentytwentyone'), '%title'),
        )
    );
}

// If comments are open or there is at least one comment, load up the comment template.
if (comments_open() || get_comments_number()) {
    comments_template();
}

// Previous/next post navigation.
$twentytwentyone_next = is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_left') : twenty_twenty_one_get_icon_svg('ui', 'arrow_right');
$twentytwentyone_prev = is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_right') : twenty_twenty_one_get_icon_svg('ui', 'arrow_left');

$twentytwentyone_next_label = esc_html__('Next post', 'twentytwentyone');
$twentytwentyone_previous_label = esc_html__('Previous post', 'twentytwentyone');

the_post_navigation(
    array(
        'next_text' => '<p class="meta-nav">' . $twentytwentyone_next_label . $twentytwentyone_next . '</p><p class="post-title">%title</p>',
        'prev_text' => '<p class="meta-nav">' . $twentytwentyone_prev . $twentytwentyone_previous_label . '</p><p class="post-title">%title</p>',
    )
);
endwhile; // End of the loop.

get_footer();