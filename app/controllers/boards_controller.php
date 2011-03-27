<?php

class BoardsController extends AppController {
    public function index() {
        $this->boards = $this->Boards->all();
    }
    
    public function view($slug = null) {
        $this->board = $this->Boards->firstBySlug($slug);
        $this->topics = $this->board->paginateTopics($this->page());
    }
}