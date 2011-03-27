<?php

class Boards extends AppModel {
    public function lastTopic() {
        return Model::load('Topics')->firstByBoardId($this->id);
    }
    
    public function paginateTopics() {
        return Model::load('Topics')->allByBoardIdAndTopicId($this->id, 0);
    }
}