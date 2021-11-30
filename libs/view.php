<?php
class View
{
    function __construct()
    {
        echo "<pre>";
        echo "view base";
    }
    function render($nombre)
    {
        require 'views/' . $nombre . '.php';
    }
}
