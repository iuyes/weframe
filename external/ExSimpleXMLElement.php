<?php namespace Weframe\External;
/**
 * 扩展SimpleXMLElement, 添加addCData方法
 *
 * @author libo <buaa_libo@126.com>
 * @date 2014-11-04
 * @since 0.1
 */
use SimpleXMLElement;

class ExSimpleXMLElement extends SimpleXMLElement {

    /**
     * Add CDATA text in node
     * @param string $text cdata text value
     */
    public function addCData($text) {
        $node = dom_import_simplexml($this);
        $no = $node->ownerDocument;
        $node->appendChild($no->createCDATASection($text));
    }

    /**
     * add cdata child
     * @param string $name name of cdata
     * @param string $text cdata text value
     */
    public function addChildCData($name, $text) {
        $child = $this->addChild($name);
        $child->addCData($text);
    }

}