<?php

class TopicsController extends AppController {
    protected $requireLogin = array('add', 'edit');
    
    public function view($slug = null) {
        $this->topic = $this->Topics->firstBySlug($slug);
        $this->responses = $this->topic->responses();
    }
    
    public function add() {

    }
    
    public function edit() {

    }
}