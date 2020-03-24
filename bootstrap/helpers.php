<?php
/**
 * Created on 2020/3/20  14:24
 * Create by zhongzhong
 * Email  phperShine@163.com
 */
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

// 默认的精度为小数点后两位
function big_number($number, $scale = 2)
{
    return new \Moontoast\Math\BigNumber($number, $scale);
}
