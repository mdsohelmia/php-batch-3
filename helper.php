<?php

//if(!function_exists('dd')){
//    function dd($var)
//    {
//        echo "<pre>";
//        echo "<div style='background: black; color: orange;padding: 10px 20px;display: inline-block'>";
//        var_dump($var);
//        echo "</div>";
//        echo "</pre>";
//        die();
//
//    }
//}

function dd($var)
{
    echo "<pre>";
    echo "<div style='background: black; color: orange;padding: 10px 20px;display: inline-block'>";
    var_dump($var);
    echo "</div>";
    echo "</pre>";
    die();

}