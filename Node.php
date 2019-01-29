<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 29/01/2019
 * Time: 09:25
 */

class Node
{
public $data;
public $next;
function __construct($data)
{
    $this->data = $data;
    $this->next = null;
}
function readNode(){
    return $this->data;
}
}