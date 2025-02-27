# Adding style.css in Every page

## Version 1 (v1)

Ths `functions.php` is given in **v1** folder

if we add below function in `functions.php`.

```ruby
<?php
// Enqueue Styles using style.css located in theme directory
function gifton_enqueue_assets_css() {
    // Enqueue style.css
    wp_enqueue_style('gifton-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'gifton_enqueue_assets_css');

?>
```

## output After above code

![Before our code](/images/after_adding_function.jpg)

## Version 2 (v2)

# Adding custom style-sheet to every page using functions.php

- Place your custome sheet (say `mys2.css`) in Your Theme Directory (the same directory where your style.css file is).

- use `functions.php` file given in **v2** folder. The file contains code like as below

```ruby
<?php
// Enqueue Styles using mys2.css located in theme directory
function gifton_enqueue_assets_css() {
    // Enqueue mys2.css
    wp_enqueue_style('gifton-mys2-style', get_template_directory_uri() . '/mys2.css', array(), '1.0.0', 'all');
}
add_action('wp_enqueue_scripts', 'gifton_enqueue_assets_css');

?>
```
