<?php 
    // Load event listeners
App::uses('PostListener', 'Lib/Event');
App::uses('CakeEventManager', 'Event');

// Attach listeners.
CakeEventManager::instance()->attach(new PostListener());