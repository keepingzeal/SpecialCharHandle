<?php
/**
 * Created by PhpStorm
 * User: Serwinle
 * Date: 2023/4/14
 * Time: 10:51
 */

namespace Kzeal\SpecailCharTool;

/**
 * Class AbstractSpecailCharCheck
 * @package Kzeal\SpecailCharTool
 */
Abstract class AbstractSpecailCharCheck implements InterfaceSpecailCharCheck
{
    public InterfaceSpecailCharCheck $container;
    public function __construct(InterfaceSpecailCharCheck $container)
    {
        $this->container = $container;
    }
}