<?php

class GravatarHelper extends Helper {
    public function image($email, $size = null, $attr = array()) {
        $url = 'http://www.gravatar.com/avatar/' . md5($email);
        
        if(!is_null($size)) {
            $url .= '?s=' . $size;
        }
        
        return $this->html->image($url, $attr);
    }
}