<?php
/**
 * Created by PhpStorm
 * User: Serwinle
 * Date: 2023/4/14
 * Time: 14:49
 */

namespace Kzeal\SpecailCharTool\Util;


class SpecailCharUtil
{
    static function CheckHex(string $str)
    {
        if (!ctype_xdigit($str)) {
            throw new CharExcetion("字符串错误: $str");
        }
    }

    static function checkSingle($str)
    {
        if (mb_strlen($str) !== 1) {
            throw new CharExcetion("只允许单个字符: $str");
        }
    }

    static function ToCode($str)
    {
        self::checkSingle($str);
        return mb_ord($str);
    }

    static function ToUCode(string $str)
    {
        self::CheckHex($str);
        $char = dechex($str);
        if ($char === false) {
            throw new CharExcetion("转换失败: $str");
        }
        return $char;
    }

    static function packRuleArr($arr)
    {
        $str = '';
        foreach ($arr as $map) {
            $str .= self::retPackChar(self::ToCode($map[0])).'-'.self::retPackChar(self::ToCode($map[1]));
        }
        return $str;
    }

    static function packRule($arr)
    {
        $str = '';
        foreach ($arr as $map) {
            $str .= self::retPackChar(self::ToCode($map));
        }
        return $str;
    }

    static function packDefaultArr($arr)
    {
        $str = '';
        foreach ($arr as $map) {
            $str .= self::retPackChar(self::ToUCode($map[0])).'-'.self::retPackChar(self::ToUCode($map[1]));
        }
        return $str;
    }

    static function packDefault($arr)
    {
        $str = '';
        foreach ($arr as $map) {
            $str .= self::retPackChar(self::ToUCode($map));
        }
        return $str;
    }

    static function packNormalArrRule($arr)
    {
        $str = '';
        foreach ($arr as $map) {
            $str .= $map[0] . '-' . $map[1];
        }
        return $str;
    }

    static function packNormalRule($arr)
    {
        $str = '';
        foreach ($arr as $map) {
            $str .= $map;
        }
        return $str;
    }

    static function isSpecailRule($str)
    {
        if (strrpos($str, 'spectail')) {
            return true; 
        }
    }

    static function isArrRule($str)
    {
        if (strrpos($str, 'arr')) {
            return true;
        }
    }

    static function retPackChar($str)
    {
        return '\\x{'.$str.'}';
    }


}
