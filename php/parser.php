<?php

if(isset($_GET["query"])) {
    $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
    $query  = parse_url($actual_link)["query"];
    //echo $query;
    parse_str($query, $params);
    //print_r($params);
    //echo $params["test"];
}