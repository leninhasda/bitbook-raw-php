<?php

/**
 *
 * @author: Y T
 *
 * /
 *
 * /**
 * $tag: the tag being created
 * $attributes: an array of attributes: id, class, href, title, text, alt, target etc.
 * $content: can be null, a string or tag object
 * $selfclosers: tags that don't require a closing link
 */
class Html
{
    private static $_instance = null;
    private $tag = null;
    private $attributes = null;
    private $content = null;
    private $selfClosers = array('area',
        'base',
        'br',
        'col',
        'command',
        'embed',
        'hr',
        'img',
        'input',
        'keygen',
        'link',
        'meta',
        'param',
        'source',
        'track',
        'wbr');

    function __construct($tag, $content = '', $attributes = '')
    {
        $this->tag = strtolower($tag);
        if (!empty($content)) $this->content = $content;
        if (!empty($attributes)) $this->attributes = $attributes;
        return $this;
    }

    public static function tag($tag, $content = '', $attributes = '')
    {
        self::$_instance = new Html($tag, $content, $attributes);
        return self::$_instance;
    }

    public function checkTag($tag)
    {
        $html = null;
        if (is_null($this->content)) {
            $this->content = array();
        }
        if (is_object($tag) && get_class($tag) == get_class($this)) {
            $html = $tag;
        } else {
            $html = new Html($tag);
            $this->content[] = $html;
        }
        return $html;
    }

    public function __toString()
    {
        return $this->getTag();
    }

    //setting all values
    public function getTag()
    {
        $string = '';
        if (!empty($this->tag)) {
            $string .= '<' . $this->tag;
            if (!is_null($this->attributes)) $string .= ' ' . $this->getAttributes();
            if (in_array($this->tag, $this->selfClosers)) {
                $string .= '/>' . CHR(13) . CHR(10) . CHR(9);
            } else {
                $string .= '>' . $this->getContent() . '</' . $this->tag . '>';
            }
        }
        return $string;
    }

    private function getAttributes()
    {
        $string = '';
        foreach ($this->attributes as $key => $value) {
            if (!empty($value)) {
                $string .= ' ' . $key . '="' . $value . '"';
            } else {
                $string .= ' ' . $key;
            }
        }
        return substr($string, 1);
    }


    private function getContent()
    {
        $string = '';
        if (!is_null($this->content)) {
            if (is_object($this->content) && get_class($this->content) == get_class($this)) {
                $string .= $this->checkTag($this->content);
            } else {
                $string .= $this->content . CHR(13) . CHR(10) . CHR(9);
            }
        }
        return $string;
    }
}