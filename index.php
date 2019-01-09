<?php 

require 'core/QueryBuilder.php';
require 'core/Connection.php';
$config=include_once('core/config.php');

$objeto= new QueryBuilder($config);
$objeto->selectAll("agenda");