<?php   

App::uses('CakeEventListener', 'Event');

class LogListener implements CakeEventListener {
  
    public function implementedEvents() {
        return array(
            'Model.Post.add' => 'postAdded',
            'Model.Post.message' => 'messageAdded',
        );
    }

    public function postAdded($event) {
      CakeLog::write('debug', 'A new Post was added');
    }

    public function messageAdded($event){
        CakeLog::write('debug', 'A new message was added');
    }
}
