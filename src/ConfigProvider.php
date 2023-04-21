<?php
/**
 * Created by PhpStorm
 * User: Serwinle
 * Date: 2023/4/20
 * Time: 15:16
 */

namespace Kzeal\SpecailCharTool;


class ConfigProvider
{
    public function __invoke(): array
    {
        return [
            'dependencies' => [],
            'commands' => [],
            'listeners' => [],
            // 合并到  config/autoload/annotations.php 文件
            'annotations' => [
                'scan' => [
                    'paths' => [
                        __DIR__,
                    ],
                ],
            ],
            'publish' => [
                [
                    'id' => 'specail_char',
                    'description' => 'specail_char',
                    'source' => __DIR__ . '/../publish/specail_char_rule.php',
                    'destination' => BASE_PATH . '/config/autoload/specail_char_rule.php',
                ],
            ],
        ];
    }
}