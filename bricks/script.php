<?php

class Script {
    var $script;

    function __construct($script) {
        $this->script = $script;
    }

    function render() {
        if(is_array($this->script)) {
            foreach ($this->script as $script) {
                echo '<script src="'.$script.'"></script>';
            }
        } else if(is_string($this->script)) {
            echo '<script src="'.$this->script.'"></script>';
        }
    }
}
