<?php
/**
 * Created by PhpStorm
 * User: Serwinle
 * Date: 2023/4/20
 * Time: 18:40
 */

namespace Kzeal\SpecailCharTool\Util;
use GuzzleHttp\Client;
use Hyperf\Guzzle\HandlerStackFactory;


class HttpUtil
{
    static function httpReq($action, $params, $contentType = 'urlencoded', $httpMethod = 'POST', $headerOptions = [])
    {
        $factory = new HandlerStackFactory();
        $stack = $factory->create();
        $client = make(Client::class, ['config' => [
            'handler' => $stack
        ]]);
        $options = [
            'timeout' => 30,
            'verify' => false, //不验证 https
        ];
        $httpHeader = [];
        if ($httpMethod == 'POST' && $contentType == 'urlencoded') {
            $httpHeader['Content-Type'] = 'application/x-www-form-urlencoded';
            $options['body'] = self::build_query($params);
        }
        if ($httpMethod == 'POST' && $contentType == 'json') {
            $options['json'] = $params;
        }
        if ($httpMethod == 'GET' && $contentType == 'urlencoded') {
            $action .= strpos($action, '?') === false ? '?' : '&';
            $action .= self::build_query($params);
        }
        if ($httpMethod == 'POST' && $contentType == 'application/json') {
            $httpHeader['Content-Type'] = 'application/json';
            $options['body'] = json_encode($params);
        }
        // $httpHeader = $this->createGuzzleHttpHeader();
        $headerOptions && $httpHeader = array_merge($httpHeader, $headerOptions);
        $options['headers'] = $httpHeader;
        $response = $client->request($httpMethod, $action, $options);
        return $response->getBody()->getContents();
    }

    /**
     * 重写实现 http_build_query 提交实现(同名key)key=val1&key=val2
     * @param array $formData 数据数组
     * @param string $numericPrefix 数字索引时附加的Key前缀
     * @param string $argSeparator 参数分隔符(默认为&)
     * @param string $prefixKey Key 数组参数，实现同名方式调用接口
     * @return string
     */
    static function build_query($formData, $numericPrefix = '', $argSeparator = '&', $prefixKey = '')
    {
        $str = '';
        foreach ($formData as $key => $val) {
            if (!is_array($val)) {
                $str .= $argSeparator;
                if ($prefixKey === '') {
                    if (is_int($key)) {
                        $str .= $numericPrefix;
                    }
                    $str .= urlencode($key) . '=' . urlencode($val);
                } else {
                    $str .= urlencode($prefixKey) . '=' . urlencode($val);
                }
            } else {
                if ($prefixKey == '') {
                    $prefixKey .= $key;
                }
                if (is_array($val[0])) {
                    $arr = array();
                    $arr[$key] = $val[0];
                    $str .= $argSeparator . http_build_query($arr);
                } else {
                    $str .= $argSeparator . self::build_query($val, $numericPrefix, $argSeparator, $prefixKey);
                }
                $prefixKey = '';
            }
        }
        return substr($str, strlen($argSeparator));
    }
}