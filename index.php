<!DOCTYPE html class="m-0">
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php bloginfo('description'); ?>">
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(); ?></title>
    <!-- Tailwind core CSS -->
    <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/dist/tailwind.css">
    <!-- Custom style for this template -->
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <?php wp_head(); ?>
</head>

<body>
    <h2 class="text-red-500 p-6 bg-blue-300">Hello!</h2>

    <?php wp_footer(); ?>
</body>

</html>