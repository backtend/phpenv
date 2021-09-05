<?php
declare (strict_types=1);

if (!function_exists('environ')) {
    /**
     * 获取环境变量
     * @param $name
     * @param null $default
     * @return array|bool|false|mixed|string|null
     * @throws Exception
     */
    function environ($name, $default = null)
    {
        return \backtend\phpenv\Environ::get($name, $default);
    }
}
