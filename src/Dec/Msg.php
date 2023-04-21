<?php
/**
 * Created by PhpStorm
 * User: Serwinle
 * Date: 2023/4/20
 * Time: 17:52
 */

namespace Kzeal\SpecailCharTool\Dec;


use Kzeal\SpecailCharTool\InterfaceSpecailCharMsg;
use Hyperf\Contract\ConfigInterface;
use Psr\Container\ContainerInterface;

class Msg implements InterfaceSpecailCharMsg
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
     * @var array
     */
    private $msg_detail;

    /**
     * @var string
     */
    private $url;

    private $config_prefix = 'specail_char_rule.platform';

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
        $this->config = $this->container->get(ConfigInterface::class);
    }

    function setPlatformConfig($platform = 'default')
    {
        $this->msg_detail = $this->config->get($this->config_prefix .'.'. $platform. '.msg_struct');
        $this->url = $this->config->get($this->config_prefix .'.'. $platform. '.config.url');
    }

    function setContent($param)
    {
    }

    function send()
    {
        // TODO: Implement send() method.
    }
}