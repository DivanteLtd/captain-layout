<?php

/**
 * Renders specified layout.
 * @param $layout {String} name of the layout file to load from /app/layouts
 */
function get_layout ($layout) {
    include_once 'layouts/'.$layout.'.php';
    die(); // prevents double-render
}

/**
 * Outputs file contents on screen, from path set in SCRIPT_FILENAME.
 * SCRIPT_FILENAME is the file calling get_layout() function.
 */
function get_content () {
    echo preg_replace('/^\<\?php[^?]+\?\>/', '', file_get_contents($_SERVER['SCRIPT_FILENAME']));
}

/**
 * Returns a page title if it was set in the view.
 * @return string
 */
function get_title () {
    if (isset($GLOBALS['pagetitle'])) {
        return $GLOBALS['pagetitle'];
    } else {
        return 'Title not defined';
    }
}
