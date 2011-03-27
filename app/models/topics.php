<?php

class Topics extends AppModel {
    protected $defaultScope = array(
        'order' => 'created DESC'
    );
    
    public function author() {
        return Model::load('Users')->firstById($this->user_id);
    }
}