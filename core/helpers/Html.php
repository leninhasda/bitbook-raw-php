<?php

/**
 *
 * @author: Y T
 *
 * $tag: the tag being created
 * $attributes: an array of attributes: id, class, href, title, text, alt, target etc.
 * $content: can be null, a string or tag object
 * $selfclosers: tags that don't require a closing link
 */
class Html
{
    public static function tag($tagName, $content = '', $attributes = [])
    {
        $selfClosers = array('area',
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
        $string = '';
        if (!empty($tagName)) {
            $string .= '<' . $tagName;

            if (!is_null($attributes)) {
                $string .= ' ' . (self::getAttributes($attributes));
            }
            //checking if tag is selfCloser
            if (in_array($tagName, $selfClosers)) {
                $string .= '/>';
            } else {
                $string .= '>' . $content . '</' . $tagName . '>';
            }
        }
        return $string;
    }

    public static function div($content = '', $attributes)
    {
        return self::tag('div', $content, $attributes);
    }

    public static function a($url = '', $content = '', $attributes)
    {
        $string = '';
        $tagName = 'a';
        $string .= '<' . $tagName;
        $string .= ' ' . 'href="' . $url . '"';
        if (!is_null($attributes)) {
            $string .= ' ' . (self::getAttributes($attributes));
        }
        $string .= '>' . $content . '</' . $tagName . '>';
        return $string;
    }

    public static function span($content = '', $attributes)
    {
        return self::tag('span', $content, $attributes);
    }


    //Input tags
    public static function input($type, $attributes = [])
    {
        $string = '';
        $attr = '';
        $tagName = 'input';
        $string .= '<' . $tagName . ' type=' . $type;
        if (!is_null($attributes)) {
            foreach ($attributes as $key => $value) {
                if (!empty($value)) {
                    $attr .= ' ' . $key . '="' . $value . '"';
                } else {
                    $attr .= ' ' . $key;
                }
            }
            $string .= ' ' . ($attr);
        }
        $string .= '>' . '</' . $tagName . '>';
        return $string;
    }

    public static function textInput($attributes = [])
    {
        $string = '';
        $attr = '';
        $tagName = 'input';
        $type = 'text';
        $string .= '<' . $tagName . ' type=' . $type;
        if (!is_null($attributes)) {
            foreach ($attributes as $key => $value) {
                if (!empty($value)) {
                    $attr .= ' ' . $key . '="' . $value . '"';
                } else {
                    $attr .= ' ' . $key;
                }
            }
            $string .= ' ' . ($attr);
        }
        $string .= '>' . '</' . $tagName . '>';
        return $string;
    }

    public static function passwordInput($attributes = [])
    {
        $string = '';
        $attr = '';
        $tagName = 'input';
        $type = 'password';
        $string .= '<' . $tagName . ' type=' . $type;
        if (!is_null($attributes)) {
            foreach ($attributes as $key => $value) {
                if (!empty($value)) {
                    $attr .= ' ' . $key . '="' . $value . '"';
                } else {
                    $attr .= ' ' . $key;
                }
            }
            $string .= ' ' . ($attr);
        }
        $string .= '>' . '</' . $tagName . '>';
        return $string;
    }

//    --------------------------------------------------
//need to check
//    public function checkTag($tag)
//    {
//        $htmlTag = null;
//        if (is_null($this->content)) {
//            $this->content = array();
//        }
//        if (is_object($tag) && get_class($tag) == get_class($this)) {
//            $htmlTag = $tag;
//        } else {
//            $htmlTag = new Html($tag);
//            $this->content[] = $htmlTag;
//        }
//        return $htmlTag;
//    }

    public static function getAttributes($attributes)
    {
        $string = '';
        foreach ($attributes as $key => $value) {
            if (!empty($value)) {
                $string .= ' ' . $key . '="' . $value . '"';
            } else {
                $string .= ' ' . $key;
            }
        }
        return substr($string, 1);
    }

//    private function getContent()
//    {
//        $string = '';
//        if (!is_null($this->content)) {
//            if (is_object($this->content) && get_class($this->content) == get_class($this)) {
//                $string .= $this->checkTag($this->content);
//            } else {
//                $string .= $this->content . CHR(13) . CHR(10) . CHR(9);
//            }
//        }
//        return $string;
//    }

}