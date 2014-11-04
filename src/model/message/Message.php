<?php namespace Weframe\Model\Message;
/**
 * 普通消息基类
 *
 * @author libo <buaa_libo@126.com>
 * @date 2014-11-04
 * @since 0.1
 */
use Weframe\Model\Model;
abstract class Message extends Model {

    /**
     * 构造函数
     *
     * @param $params:array
     * @author libo <buaa_libo@126.com>
     * @date 2014-11-04
     * @since 0.1
     */
    public function __construct(array $params = array()) {
        parent::__construct($params);
    }

}