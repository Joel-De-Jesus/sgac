<?php

/**
 * @param $param
 * @return mixed
 */
function sgac($param)
{
    return sgac[$param];
}

/**
 * @param $message
 * @param string $type
 * @param bool $boolean
 * @return false|string
 */
function ajax_response($message, $type = 'error', $boolean = false)
{
    return json_encode(['success' => $boolean, 'message_type' => $type, 'message' => $message]);
}

/**
 * @param $route
 * @param bool $boolean
 * @return false|string
 */
function ajax_redirect($route, $boolean = false)
{
    return json_encode([
        'redirect' => ['url' => route($route)],
        'success' => $boolean
    ]);
}

/**
 * @param $value
 * @return bool
 */
function isnt_string($value)
{
    if (preg_match('/^([áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+((\s[áÁàÀãÃâÂéÉèÈêÊíÍìÌóÓòÒõÕôÔúÚùÙçÇaA-zZ]+)+)?$/',
        $value)) {
        return true;
    }
    return false;
}
