<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <h1>Heading styling by using <b>style.css</b> file located in root directory</h1>
    <h2 class="myH2">Heading 2 styling by using external classes</h2>
    <p>We got blogname by using <b>bloginfo</b> function. This blog name is <span style="color: red;"> <?php bloginfo('name')?> </span>This is set by using</p>
    <h2 class="myClass">heading style by <b>mys2.css</b> file</h2>
    
</body>
</html>