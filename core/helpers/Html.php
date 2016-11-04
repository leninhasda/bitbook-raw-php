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

    /**
     * Add an attribute to the element
     */
    public function attr($attr, $value = null)
    {
        if (is_array($attr))
            $this->attrs = array_merge($this->attrs, $attr);
        else
            $this->attrs = array_merge($this->attrs, array($attr => $value));
    }

    /**
     * create html result.
     */
    public function output()
    {
        // Start the tag
        $output = '<' . $this->tag;

        // Add the attributes
        foreach ($this->attrs as $attr => $value) {
            if ($attr == 'text')
                continue;

            if (is_integer($attr))
                $attr = $value;
            $output .= ' ' . $attr . '="' . $value . '"';
        }

        // Close the tag
        if ($this->self_closing)
            $output .= ' />';
        else
            $output .= '>' . $this->attrs['text'] . '</' . $this->tag . '>';

        return $output;

    }

    //return result
    function __toString()
    {
        // TODO: Implement __toString() method.
        return $this->output();

    }


}