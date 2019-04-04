<h1><?php echo $post['Post']['title'];?></h1>
<p><?php echo $post['Post']['content'];?></p>

<?php
    echo $this->Form->create('Message', ['action'=>'add']);
    echo $this->Form->input('content');
    echo $this->Form->input('post_id', ['type'=>'text', 'value'=> $post['Post']['id']]);
    echo $this->Form->end('Save Messages');
?>
