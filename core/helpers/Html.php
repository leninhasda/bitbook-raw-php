<?php

/**
 * Created by IntelliJ IDEA.
 * User: yasirtaher
 * Date: 2016/11/02
 * Time: 19:23
 */
class Html
{
    private $tag;
    private $self_closing = false;
    private $attrs = array();
    private $self_closing_list = array('input', 'img', 'hr', 'br', 'meta', 'link');

    /**
     * Html constructor.
     * @param $tag
     * @param bool $self_closing
     * @param array $attrs
     */
    public function __construct($tag, $self_closing = null, $attrs = array())
    {
        $this->tag = $tag;
        //force to self close
        if (is_null($self_closing)) {
            $this->self_closing = in_array($tag, $this->self_closing_list);
        } else {
            $this->self_closing = $self_closing;
        }

        $attrs['text'] = (empty($attrs['text'])) ? '' : $attrs['text'];
        $this->attrs = $attrs;
    }

    

}