<?php
/**
 * Created by PhpStorm
 * User: Serwinle
 * Date: 2023/4/14
 * Time: 10:53
 */

namespace Kzeal\SpecailCharTool;

/**
 * Class AbstractSpecailCharHandleLogic
 * @package Kzeal\SpecailCharTool
 */
Abstract class AbstractSpecailCharHandleLogic
{
    public InterfaceSpecailCharHandleLogic $container;
    public function __construct(InterfaceSpecailCharHandleLogic $container)
    {
        $this->container = $container;
    }
}