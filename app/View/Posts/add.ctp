<?php
   echo $this->Form->create('Post');
   echo $this->Form->input('title');
   echo $this->Form->input('content');
   echo $this->Form->label('Usuario');
   echo $this->Form->select('user_id', ['1'=>'Pedro']);
   echo $this->Form->label('Categoria');

   echo $this->Form->select('category_id', $categories);
   echo $this->Form->end('Save Category');
?>