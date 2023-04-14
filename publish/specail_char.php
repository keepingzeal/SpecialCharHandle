<?php

declare(strict_types=1);


return [
    'platform'  =>  [
        // 飞书
        'default'   =>  [
            'msg_struct' => [
                'msg_type'  =>  'text',
                'content'   =>  [
                    'text'  =>  ''  // 违规内容详情
                ]
            ],
            'config' => [
                'url'   =>  '' // 飞书机器人地址
            ]
        ],
    ],
    'handle'    =>  [

    ],


];