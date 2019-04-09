<?php
    class PostsController extends AppController{

        public function index(){
          //  $this->dd( $this->Post->find('all') );
            $posts = $this->Post->find('all', [
                            'contain' => [
                                'Category',
                                'User',
                                'Message'
                            ],
                            
                        ]);

            $this->set('posts', $posts );

           // if($this->request->is('ajax')){
              //  $this->dd('acceso');
                $this->set(array(
                    'post' => $posts,
                    '_serialize' => array('post')
                ));
          //  }
        }
        public function add(){
            
            $this->set('categories', $this->Post->Category->find('list'));

            if ($this->request->is(array('post'))) {

                $this->request->data['Post']['data']= $this->dummyArray();

                $save = $this->Post->save($this->request->data);
                if($save){
                    $this->Post->getEventManager()->dispatch(new CakeEvent('Model.Post.add', $this));
                    return $this->redirect(array('action' => 'index'));
                }
                $this->Flash->error(
                    'Campos incompletos'
                );
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
                'conditions'=>[
                    'Post.id'=>$id
                ]
            ];

            $post = $this->Post->find('first', $findOptions);
            //$this->dd($post);

         //   die();
            $this->set('post', $post);


            if($this->request->is('ajax')){
                $this->set(array(
                    'post' => $post,
                    '_serialize' => array('post')
                ));
            }

        }
        public function edit($id){

        }
        public function comment(){
           $save = $this->Post->Message->saveAssociated($this->request->data);

            if($save){
                return $this->redirect(array('action' => 'index'));
            }
            return false;
        }

        public function dummyArray(){
            return [
                'apple' =>   1234,
                'boy'   =>   2345,
                'cat'   =>   3456,
                'dog'   =>   4567,
                'echo'  =>   5678,
                'fortune' => 6789
            ];
        }
    }