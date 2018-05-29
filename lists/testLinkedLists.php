<?php

require_once("LinkedList.php");

use LinkedList\LinkedList;

$linkedList = new LinkedList();
$linkedList->insert("first element");
$linkedList->insert("second element");
$linkedList->insert("third element");

$linkedList->display();
