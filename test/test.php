<?php
/**
 * Created by PhpStorm
 * User: Serwinle
 * Date: 2023/4/14
 * Time: 16:42
 */


use Kzeal\SpecailCharTool\Util\SpecailCharUtil;

class test
{
    function index()
    {
        $str[]   = SpecailCharUtil::packDefault([
            '120794'
        ]);
        $str[]   = SpecailCharUtil::packDefaultArr([
            ['120794','120794']
        ]);
        var_dump($str);
    }
}


$obj = new test();
$obj->index();

