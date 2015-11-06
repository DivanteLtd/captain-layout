<!DOCTYPE html>
<html>
<head>
  <title>PHP View Generator</title>
  <meta charset="utf-8">
</head>
<body>

<h3>List of views</h3>
<ul>
<?php

foreach (glob('./views/*.php') as $path) {

    $name = preg_replace('/.php/', '', preg_replace('/\.\/views\//', '', $path));

    echo '<li><a href="'.$path.'">'.$name.'</a></li>';
}

?>
</ul>

</body>
</html>