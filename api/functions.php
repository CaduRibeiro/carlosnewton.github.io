<?php

 function returnAjax($dados) 
{
    header("Content-type: application/json");
    echo json_encode($dados); 
    die();
}

function setErro($et = 0, $emsg = "", $ecmp = "", $data) 
{
    $data['et']= $et;
    $data['emsg'] = $emsg;
    $data['ecmp'] = urlencode(strip_tags($ecmp));
    return $data;
}