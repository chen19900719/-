<?php
/**
 * 是否显示
 * @param $brand
 * @return string
 */
//function is_something($brand)
//{
//    if ($brand->is_show) {
//        return '<span class="am-icon-check"></span>';
//    } else {
//        return '<span class="am-icon-close"></span>';
//    }
//}

//是否...
function is_something($attr, $module)
{
    return $module->$attr ? '<span class="am-icon-check is_something" data-attr="' . $attr . '">
    </span>' : '<span class="am-icon-close is_something" data-attr="' . $attr . '"></span>';
}
