<?php

    class JsonBehavior extends ModelBehavior  {
        public $jsonfields = [];
        public $dateformat = [];

        public function setup(Model $model, $settings = array()) {

            if(array_key_exists('ToFromJson',$settings)){
                $this->jsonfields = $settings['ToFromJson'];
            }
            if(array_key_exists('dateFormat',$settings)){
                $this->dateformat = $settings['dateFormat'];
            }
                
        }
    
        public function afterFind(Model $model, $results, $primary = false) {
            foreach ($results as $key => $val) { //date formatting
                for ($i=0; $i < count($this->dateformat) ; $i++) { 
                    if (isset($val[$model->alias][$this->dateformat[$i]])) {
                        $results[$key][$model->alias][$this->dateformat[$i]] = $this->dateFormatAfterFind(
                            $val[$model->alias][$this->dateformat[$i]]
                        );
                    }
                }
                for ($i=0; $i < count($this->jsonfields) ; $i++) { 
                    if (isset($val[$model->alias][$this->jsonfields[$i]])) {
                        $results[$key][$model->alias][$this->jsonfields[$i]] = $this->dataFromJson(
                            $val[$model->alias][$this->jsonfields[$i]]
                        );
                    }
                }
            }            
            return $results;
        }
    
        public function beforeSave(Model $model, $options = array()){

            for ($i=0; $i < count($this->jsonfields) ; $i++) { 
                $model->data[$model->alias][$this->jsonfields[$i]] = $this->dataToJson( $model->data[$model->alias][$this->jsonfields[$i]]);
            }

            return true;
            
        }
        public function dateFormatBeforeSave($dateString) {
            return date('Y-m-d', strtotime($dateString));
        }
        
        public function dateFormatAfterFind($dateString) {
            return date('d-m-Y', strtotime($dateString));
        }
    
        public function required($text){
            return !empty($text)?true:false;
        }
        public function dataToJson($data){
            return json_encode($data);
        }
        public function dataFromJson($data){
            return (array) json_decode($data);
        }

    }
    