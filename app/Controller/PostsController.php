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
            $this->loadModel('Message');
            if(!$id){
                return false;
            }

            $findOptions = [
                'contain'=>[
                    'User',
                    'Message'=>'User'
                ],
                //'fields'=>['User.name'],
                'connditions'=>[
                    'Post.id'=>$id
                ]
            ];

            $post = $this->Post->find('first', $findOptions);
          //  debug($post);

         //   die();
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