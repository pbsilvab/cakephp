<?php
    echo $this->Session->read('userId');
    echo '</br>';
    echo $this->Session->read('Correo');
    echo '</br>';
    echo $this->Html->link('Log Out',[
        'action'=>'logout'
    ])

?>