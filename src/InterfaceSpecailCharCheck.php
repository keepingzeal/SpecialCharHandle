<?php
/**
 * Created by PhpStorm
 * User: Serwinle
 * Date: 2023/4/14
 * Time: 10:59
 */

namespace Kzeal\SpecailCharTool;


interface InterfaceSpecailCharCheck
{
    function setStractCheckConfig($rule_name = 'default');
    function makeRule();
    function addRule($rule_name = 'default');
    function resetRule($rule_name = 'default');
}