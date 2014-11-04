<?php
/**
 * 自动加载类
 *
 * @author libo <buaa_libo@126.com>
 * @date 2014-11-04
 * @since 0.1
 */

spl_autoload_register(function ($class) {
    $classSegments = explode("\\", $class);
    if (empty($classSegments) or 'Weframe' != $classSegments[0]) {
        return FALSE;
    }
    array_walk($classSegments, function (&$segment) {
        $segment = lcfirst($segment);
    });
    array_shift($classSegments);
    array_push($classSegments, ucfirst(array_pop($classSegments)));
    $path = __DIR__ . '/' . implode('/', $classSegments) . '.php';
    if (!file_exists($path)) {
        return FALSE;
    }

    include_once($path);
});
