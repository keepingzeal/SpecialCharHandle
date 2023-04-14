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
    function setStractCheckConfig($config = 'default');
    function makeRule();
    function setRule($rule_name = 'default');
    function addRule($rule_name = 'default');
    function resetRule($rule_name = 'default');
}