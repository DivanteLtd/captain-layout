<?php
/**
 * This is an example layout.
 * You refer to the layout in your views.
 * To do that, first include functions.php file in your view,
 * then call get_layout() function to load layout.
 *
 * You can have as many layouts as you want,
 * but it is good practice to keep their number to a minimum.
 */

include '../partials/_head.php';
include '../partials/_header.php';

get_content();

include '../partials/_footer.php';

