<?php

class Topics extends AppModel {
    protected $board;
    
    public function author() {
        return Model::load('Users')->firstById($this->user_id);
    }
    
    public function board() {
        if(is_null($this->board)) {
            $this->board = Model::load('Boards')->firstById($this->board_id);;
        }
        
        return $this->board;
    }
    
    public function responses() {
        return $this->allByTopicId($this->id, array(
            'order' => 'created ASC'
        ));
    }
    
    public function lastResponse() {
        $topic = $this->firstByTopicId($this->id, array(
            'order' => 'created DESC'
        ));
        if($topic) {
           return $topic; 
        }
        else {
            return $this;
        }
    }
}