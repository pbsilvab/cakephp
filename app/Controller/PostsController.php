<?php
    class PostsController extends AppController{

        public function index(){
            $this->set('posts', $this->Post->find('all', [
                'contain' => [
                    'Category',
                    'User'
                ]
            ]));
        }
        public function add(){
            
            $this->set('categories', $this->Post->Category->find('list'));

            if ($this->request->is(array('post'))) {
                $save = $this->Post->save($this->request->data);
                if($save){
                    return $this->redirect(array('action' => 'index'));
                }
            }
          

        }
        public function view($id){
            if(!$id){
                return false;
            }
            $post = $this->Post->findById($id);
            
            $this->set('post', $post);

        }
        public function edit($id){

        }
        public function comment(){
          //debug($this->request->data);
           $save = $this->Post->Message->saveAssociated($this->request->data);

            if($save){
                return $this->redirect(array('action' => 'index'));
            }
            return false;
        }


    }