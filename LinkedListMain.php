<?php
/**
 * Created by PhpStorm.
 * User: thienhmp
 * Date: 29/01/2019
 * Time: 13:49
 */
include_once ('LinkList.php');

$linkedList = new LinkList();

$linkedList->insertFirst(11);
$linkedList->insertFirst(22);
$linkedList->insertFirst(142);
$linkedList->insertLast(33);
$linkedList->insertLast(44);
$totalNodes = $linkedList->totalNodes() . "<br>";
$linkData = $linkedList->readList();

echo $totalNodes;
echo implode ('-' , $linkData);