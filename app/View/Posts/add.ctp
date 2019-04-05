<?php
   echo $this->Form->create('Post');
   echo $this->Form->input('title');
   echo $this->Form->input('content');
   echo $this->Form->label('Usuario');
   echo $this->Form->input('user_id', ['value'=> $this->Session->read('userId'), 'type'=>'hidden' ]);
   echo $this->Form->label('Categoria');

   echo $this->Form->select('category_id', $categories);
   echo $this->Form->end('Save Category');
?>