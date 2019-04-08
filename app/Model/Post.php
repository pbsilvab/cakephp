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
    public $actsAs = [
            "Containable", 
            'Data'=>[ //data format v1.0.1
                'ToFromJson'=>[//parsin array into json
                    'data'
                ],
                'dateFormat'=>[ //retrieving fields with d-m-Y format 
                    'created_at'
                ],
                'slugabble'=>[//field called 'slug' must exits in the DB
                    'title' //only one index is accepted
                ]
            ]
        ];

}