<?php
/**
 * extention.func.php 用户自定义函数库
 *
 * @copyright   (C) 2005-2010 PHPCMS
 * @license
 * @lastmodify   2010-10-27
 */
//判断是否手机访问
function check_wap()
{
    if (isset($_SERVER['HTTP_VIA'])) return true;
    if (isset($_SERVER['HTTP_X_NOKIA_CONNECTION_MODE'])) return true;
    if (isset($_SERVER['HTTP_X_UP_CALLING_LINE_ID'])) return true;
    if (strpos(strtoupper($_SERVER['HTTP_ACCEPT']), "VND.WAP.WML") > 0) {
        // Check whether the browser/gateway says it accepts WML.
        $br = "WML";
    } else {
        $browser = isset($_SERVER['HTTP_USER_AGENT']) ? trim($_SERVER['HTTP_USER_AGENT']) : '';
        if (empty($browser)) return true;
        $clientkeywords = array(
            'nokia', 'sony', 'ericsson', 'mot', 'samsung', 'htc', 'sgh', 'lg', 'sharp', 'sie-'
        , 'philips', 'panasonic', 'alcatel', 'lenovo', 'iphone', 'ipod', 'blackberry', 'meizu',
            'android', 'netfront', 'symbian', 'ucweb', 'windowsce', 'palm', 'operamini',
            'operamobi', 'opera mobi', 'openwave', 'nexusone', 'cldc', 'midp', 'wap', 'mobile'
        );
        if (preg_match("/(" . implode('|', $clientkeywords) . ")/i", $browser) && strpos($browser, 'ipad') === false) {
            $br = "WML";
        } else {
            $br = "HTML";
        }
    }
    if ($br == "WML") {
        return TRUE;
    } else {
        return FALSE;
    }
}
?>