<?php   

App::uses('CakeEventListener', 'Event');

class PostListener implements CakeEventListener {
  

    public function implementedEvents() {
        return array(
            'Model.Post.add' => 'updateBuyStatistic',
        );
    }

    public function updateBuyStatistic($event) {
       
     debug('esto se ejecuta');

    }
}
