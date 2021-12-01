<?php

require './libs/database.php';
class Model
{
    function __construct()
    {
        $this->db = new Database();
    }
}
