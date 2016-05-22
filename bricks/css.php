<?php

class Css {
    var $css;

    function __construct($css) {
        $this->css = $css;
    }

    function render() {
        if(is_array($this->css)) {
            foreach ($this->css as $css) {
                echo '<link rel="stylesheet" href="'.$css.'">';
            }
        } else if(is_string($this->css)) {
            echo '<link rel="stylesheet" href="'.$this->css.'">';
        }
    }
}
