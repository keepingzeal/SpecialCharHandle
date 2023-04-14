<?php
/**
 * Created by PhpStorm
 * User: Serwinle
 * Date: 2023/4/14
 * Time: 14:34
 */

namespace Kzeal\SpecailCharTool\Imp;

use Kzeal\SpecailCharTool\InterfaceSpecailCharCheck;

class Check implements InterfaceSpecailCharCheck
{
    /**
     * @var ContainerInterface
     */
    private $container;

    /**
     * @var ConfigInterface
     */
    private $config;

    /**
     * @var string
     */
    private $configPrefix = 'specail_char_rule';

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->config = $this->container->get(ConfigInterface::class);
    }

    function setStractCheckConfig($config = 'default')
    {
        $this->config = $this->config->get($this->configPrefix.$config);
    }

    function makeRule()
    {
    }

    function setRule($rule_name = 'default')
    {

    }

    function addRule($rule_name = 'default')
    {

    }

    function resetRule($rule_name = 'default')
    {

    }

}