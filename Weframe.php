<?php namespace Weframe;
/**
 * Weframe入口类，同时作为整个frame的外观类
 *
 * @desc 入口类
 * @author libo <buaa_libo@126.com>
 * @date 2014-11-04
 * @since 0.1
 */
final class Weframe {

    private static $_instance; //Weframe实例

    /*
     * 构造函数
     *
     * @desc 私有方法，实现单例
     * @access private
     */
    private function __construct() {
    }

    /**
     * 得到该类的唯一实例
     *
     * @author libo <buaa_libo@126.com>
     * @access public
     * @return $instance:Weframe
     */
    public static function instance() {
        if (!self::$_instance) {
            self::$_instance = new Weframe();
        }

        return self::$_instance;
    }


}