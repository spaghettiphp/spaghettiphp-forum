<?php

class Topics extends AppModel {
    protected $defaultScope = array(
        'order' => 'created DESC'
    );
    
    public function author() {
        return Model::load('Users')->firstById($this->user_id);
    }
    
    public function lastResponse() {
        // by 'first' we actually mean 'last', but mind the order in the default scope
        $topic = $this->firstByTopicId($this->id);
        if($topic) {
           return $topic; 
        }
        else {
            return $this;
        }
    }
}