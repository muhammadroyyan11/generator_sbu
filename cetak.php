<?php
$queries = array();
parse_str($_SERVER['QUERY_STRING'], $queries);
error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
switch ($queries['page']) {
    case 'print':
        # code...
        include 'print.php';
        break;
}
