<?php   

App::uses('CakeEventListener', 'Event');

class PostListener implements CakeEventListener {
  
    public function implementedEvents() {
        return array(
            'Model.Post.add' => 'addStatistic',
            'Model.Post.index' => 'indexActivated',
            'Model.Post.view' => 'postViewDetails',
            'Model.Post.message' => 'messageAdded',
        );
    }

    public function addStatistic($event) {
        debug('esto se ejecuta aqui addStatistic');
        die();
    }

    public function messageAdded($event){
        debug('esto se ejecuta aqui message added ');
        die();
    }
    public function indexActivated($event){
        debug('esto se ejecuta aqui indexing');
        die();
    }
    public function postViewDetails($event){
        debug('esto se ejecuta aqui posting');
        die();
    }
}
