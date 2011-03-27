<?php

class Boards extends AppModel {
    public function lastTopic() {
        return Model::load('Topics')->firstByBoardId($this->id);
    }
}