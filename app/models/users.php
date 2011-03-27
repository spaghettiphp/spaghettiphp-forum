<?php

class Users extends AppModel {
    public function name() {
        if(!empty($this->name)) {
            return $this->name;
        }
        else {
            return $this->username;
        }
    }
}