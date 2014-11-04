<?php namespace Weframe\Model\Event;
/**
 * 事件消息基类
 *
 * @author libo <buaa_libo@126.com>
 * @date 2014-11-04
 * @since 0.1
 */
use Weframe\Model\Model;
use Weframe\Constant;
abstract class Event extends Model {

    /**
     * 构造函数
     *
     * @param $params:array
     * @author libo <buaa_libo@126.com>
     * @date 2014-11-04
     * @since 0.1
     */
    public function __construct(array $params = array()) {
        $params['MsgType'] = Constant::MSGTYPE_EVENT;
        parent::__construct($params);
    }

}