<?php

class FeedsController extends AppController {
    protected $uses = array('Topics');
    protected $layout = false;
    
    public function index() {
        header('Content-type: application/atom+xml');
        $this->topics = $this->Topics->all(array(
            'order' => 'created DESC',
            'limit' => 20
        ));
    }
}