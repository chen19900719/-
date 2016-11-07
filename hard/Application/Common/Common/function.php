<?php

function dd($arr)
{
    if (is_array($arr)) {
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
    } else {
        echo $arr;
    }

}
