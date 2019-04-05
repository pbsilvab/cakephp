<?php
	echo $this->Html->link(
        'Leer Feed',
            [
                'controller' => 'Posts',
                'action' => 'index'
            ]
	); 
	echo '</br>';
	echo $this->Html->link(
        'Ver Categorias',
            [
                'controller' => 'Categories',
                'action' => 'index'
            ]
	); 

?>