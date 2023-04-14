<?php
/**
 * Created by PhpStorm
 * User: Serwinle
 * Date: 2023/4/14
 * Time: 10:54
 */

namespace Kzeal\SpecailCharTool;

/**
 * Class AbstractSpecailCharMsg
 * @package Kzeal\SpecailCharTool
 */
Abstract class AbstractSpecailCharMsg
{
    public InterfaceSpecailCharMsg $container;
    public function __construct(InterfaceSpecailCharMsg $container)
    {
        $this->container = $container;
    }
}