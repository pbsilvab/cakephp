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


    public function beforeSave($options = array()) {
        $titulo = $this->required($this->data['Post']['title']);
        $content = $this->required($this->data['Post']['content']);

        if ($titulo && $content) {
            return true;
        }
        
        return false;
    }
    
    public function dateFormatBeforeSave($dateString) {
        return date('Y-m-d', strtotime($dateString));
    }

    public function required($text){

        return !empty($text)?true:false;

    }

}