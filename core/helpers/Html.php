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
        $attr = '';

        if (!empty($tagName)) {
            $string .= '<' . $tagName;

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
            //checking if tag is selfCloser
            if (in_array($tagName, $selfClosers)) {
                $string .= '/>' . CHR(13) . CHR(10) . CHR(9);
            } else {
                $string .= '>' . $content . CHR(13) . CHR(10) . CHR(9) . '</' . $tagName . '>';
            }
        }
        return $string;
    }

    public static function div($content = '', $attributes)
    {
        $string = '';
        $attr = '';
        $tagName = 'div';
        $string .= '<' . $tagName;
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
        $string .= '>' . $content . CHR(13) . CHR(10) . CHR(9) . '</' . $tagName . '>';
        return $string;
    }

    public static function a($url = '', $content = '', $attributes)
    {
        $string = '';
        $attr = '';
        $tagName = 'a';
        $string .= '<' . $tagName;
        $string .= ' ' . 'href="' . $url.'"';
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
        $string .= '>' . $content . CHR(13) . CHR(10) . CHR(9) . '</' . $tagName . '>';
        return $string;
    }

    public static function span($content = '', $attributes)
    {
        $string = '';
        $attr = '';
        $tagName = 'span';
        $string .= '<' . $tagName;
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
        $string .= '>' . $content . CHR(13) . CHR(10) . CHR(9) . '</' . $tagName . '>';
        return $string;
    }
    
}