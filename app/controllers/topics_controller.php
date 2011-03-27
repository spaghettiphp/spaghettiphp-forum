<?php

class TopicsController extends AppController {
    public function view($slug = null) {
        $this->topic = $this->Topics->firstBySlug($slug);
        $this->responses = $this->topic->responses();
    }
    
    public function add() {

    }
    
    public function edit() {

    }
}