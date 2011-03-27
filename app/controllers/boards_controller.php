<?php

class BoardsController extends AppController {
    public function index() {
        $this->boards = $this->Boards->all();
    }
}