<?php
class Post extends AppModel{
    public $name = 'Posts';
    public $belongsTo = [
            'Category' => [
                'className' => 'Category',
                'foreignKey' => 'category_id'
            ]
        ];
    public $actsAs = ["Containable"];
}