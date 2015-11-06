<?php
/**
 * Example view file, which calls specific layout to be rendered.
 * First we need to load functions.php, which contains all the logic for creating layouts.
 * Then we call specific layout with get_layout().
 */
    require_once '../functions.php';
    $pagetitle = 'Example page';
    get_layout('default');
?>
<div class="content">
    <h1>This is an example view</h1>
    <p>Edit this file, or delete it and start creating your own views.</p>
</div>
