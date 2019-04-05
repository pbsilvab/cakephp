<?php
class Post extends AppModel{
    public $name = 'Posts';
    public $belongsTo = [
            'Category' => [
                'className' => 'Category',
                'foreignKey' => 'category_id'
            ],
            'User' => [
                'className' => 'User',
                'foreignKey' => 'user_id'
            ]
        ];
    public $hasMany = [
        'Message' => [
            'className' => 'Message'
        ]
    ];
    public $actsAs = ["Containable"];

}