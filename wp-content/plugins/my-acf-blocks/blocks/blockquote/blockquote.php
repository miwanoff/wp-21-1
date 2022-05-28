<?php

// Create id attribute allowing for custom "anchor" value.
$id = 'blockquote-' . $block['id'];
if (!empty($block['anchor'])) {
    $id = $block['anchor'];
}

// Create class attribute allowing for custom "className" and "align" values.
$className = 'blockquote';
if (!empty($block['className'])) {
    $className .= ' ' . $block['className'];
}
if (!empty($block['align'])) {
    $className .= ' align' . $block['align'];
}

// Load values and assign defaults.
$color = get_field('color');
$border = get_field('border');
$portrait = get_field('portrait');
$quote = get_field('quotation') ?: 'Your blockquote here...';
$author = get_field('author') ?: 'Author name';

?>
<div id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($className); ?>">
    <blockquote class="mab-blockquote" style="border: solid <?php echo $border; ?>">
        <span class="mab-blockquote-text" style="color:<?php echo $color; ?>"><?php echo $quote; ?></span>
        <span class="mab-blockquote-author"><?php echo $author; ?></span>
        <div><img src="<?php echo $portrait['url']; ?>" alt=""></div>
    </blockquote>
</div>