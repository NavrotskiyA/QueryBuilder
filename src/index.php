<?php

use src\Db\Db;
use src\Db\QueryBuilder;

ini_set('display_errors', 1);
include "../vendor/autoload.php";

$builder = new QueryBuilder();
$builder->table('nova_ordered_carts')
    ->select(['orderID','name','price'])
    ->limit('10');
$query = $builder->build();

$db = new Db('','','','');
$result = $db->all($query);