<?php namespace Weframe\Model;
/**
 * 微信模型基类
 *
 * @author libo <buaa_libo@126.com>
 * @date 2014-11-04
 * @since 0.1
 */
abstract class Model {

    protected $toUserName;
    protected $fromUserName;
    protected $createTime;
    protected $msgType;
    protected $msgId;

    /**
     * 构造函数
     *
     * @param $params:array
     * @author libo <buaa_libo@126.com>
     * @date 2014-11-04
     * @since 0.1
     */
    public function __construct(array $params = array()) {
        $this->toUserName = isset($values['ToUserName']) ? $values['ToUserName'] : NULL;
        $this->fromUserName = isset($values['FromUserName']) ? $values['FromUserName'] : NULL;
        $this->msgType = isset($values['MsgType']) ? $values['MsgType'] : NULL;
        $this->createTime = isset($values['CreateTime']) ? $values['CreateTime'] : $_SERVER['REQUEST_TIME'];
        $this->msgId = isset($values['MsgId']) ? $values['MsgId'] : NULL;
    }

    /*getter and setter*/
    public function getToUserName() {
        return $this->toUserName;
    }

    public function getFromUserName() {
        return $this->fromUserName;
    }

    public function getCreateTime() {
        return $this->createTime;
    }

    public function getMsgType() {
        return $this->msgType;
    }

    public function getMsgId() {
        return $this->msgId;
    }
    /*getter and setter end*/

}