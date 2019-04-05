<?php
class Message extends AppModel{
    public $name = 'messages';
    public $belongsTo = [
        'User' => [
            'className' => 'User',
            'foreignKey' => 'user_id'
        ]
    ];
    public $actsAs = ["Containable"];

}