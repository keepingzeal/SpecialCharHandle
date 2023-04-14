<?php
/**
 * Created by PhpStorm
 * User: Serwinle
 * Date: 2023/4/14
 * Time: 10:59
 */

namespace Kzeal\SpecailCharTool;


interface InterfaceSpecailCharMsg
{
    function getPlatformConfig($platform = 'default');
    function send($param);
}