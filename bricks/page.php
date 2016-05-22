<?php

class Page {
    var $head_scripts;
    var $scripts;
    var $css;
    var $title;
    var $bricks;

    function __construct($head_scripts, $scripts, $css, $title, $description, $bricks) {
        $this->head_scripts = $head_scripts;
        $this->scripts = $scripts;
        $this->css = $css;
        $this->title = $title;
        $this->description = $description;
        $this->bricks = $bricks;
    }

    function render() {
        echo '<!doctype html>';
        echo '<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->';
        echo '<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->';
        echo '<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->';
        echo '<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->';
        echo '  <head>';
        echo '      <meta charset="utf-8">';
        echo '      <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">';
        echo '      <title>'.$this->title.'</title>';
        echo '      <meta name="description" content="'.$this->description.'">';
        echo '      <meta name="viewport" content="width=device-width, initial-scale=1">';
        if($this->head_scripts) {
            $this->head_scripts->render();
        }
        if($this->css) {
            $this->css->render();
        }
        echo '  </head>';
        echo '  <body>';
        echo '    <!--[if lt IE 8]>';
        echo '      <p class="browserupgrade">';
        echo '        You are using an <strong>outdated</strong> browser.&nbsp;';
        echo '        Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.';
        echo '      </p>';
        echo '    <![endif]-->';

        if($this->bricks) {
            $this->bricks->render();
        } else {
            echo 'Use some bricks to build this page.';
        }

        if($this->scripts) {
            $this->scripts->render();
        }
        echo '  </body>';
        echo '</html>';
    }
}