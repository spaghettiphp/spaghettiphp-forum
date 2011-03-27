<?php

class JoinProfilesAndUsers {
    public static function migrate($connection) {
        $profiles = $connection->read(array(
            'table' => 'profiles'
        ));
        while($profile = $profiles->fetch()) {
            $connection->update(array(
                'table' => 'users',
                'values' => array(
                    'name' => $profile['name']
                ),
                'conditions' => array(
                    'id' => $profile['user_id']
                )
            ));
        }
    }
}