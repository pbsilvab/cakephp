<?php
    class CategoriesController extends AppController{

        public function index(){
            $this->set('categories', $this->Category->find('all'));
        }
        public function add(){
          

            if ($this->request->is(array('post'))) {
                $save = $this->Category->save($this->request->data);
                if($save){
                    return $this->redirect(array('action' => 'index'));
                }
            }
          

        }
        public function edit($id){

        }


    }