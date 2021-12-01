<?php

class EmployeeModel extends Model {

    function getEmployees($query, $params, $fetch) //OK
    {
    return parent::query($query, $params, $fetch);
    }
}