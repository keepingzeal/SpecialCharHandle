<?php
/**
 * Created by PhpStorm
 * User: Serwinle
 * Date: 2023/4/14
 * Time: 14:44
 */

namespace Kzeal\SpecailCharTool\Imp;


use Kzeal\SpecailCharTool\AbstractSpecailCharCheck;

class Check extends AbstractSpecailCharCheck
{

    function setStractCheckConfig($rule_name = 'default')
    {
        $this->container->setStractCheckConfig($rule_name);
    }

    function makeRule()
    {
        $this->container->makeRule();
    }

    function addRule($rule_name = 'default')
    {
        $this->container->makeRule($rule_name);
    }

}