<?php

include('bricks/page.php');
include('bricks/script.php');
include('bricks/css.php');

$head_scripts = new Script("static/js/modernizr-2.8.3-respond-1.4.2.min.js");
$scripts = new Script(array("static/js/jquery-1.11.2.min.js", "static/js/bootstrap.min.js"));
$css = new Css(array("static/css/bootstrap.min.css", "static/css/bootstrap-theme.min.css", "static/css/site.css"));
$title = 'Brick';
$description = 'Build your site brick by brick.';
$bricks = new Bricks(array("foo", "bar"));

$page = new Page($head_scripts, $scripts, $css, $title, $description, $bricks);
$page->render();
