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
Abstract class AbstractSpecailCharLogic implements InterfaceSpecailCharLogic
{
    public InterfaceSpecailCharLogic $container;
    public function __construct(InterfaceSpecailCharLogic $container)
    {
        $this->container = $container;
    }
}