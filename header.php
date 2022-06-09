<!DOCTYPE html>
<html lang="<?php echo get_bloginfo("language");?>">
<head>
    <meta charset="utf-8">
    <title><?php echo get_bloginfo("name"); ?></title>
    <?php wp_head() ?>
</head>
<body <?php body_class(); ?>>
<header>
    <h1><?php echo get_bloginfo("name"); ?></h1>
</header>