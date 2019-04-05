<h1><?php echo $post['Post']['title'];?></h1>
<p><?php echo $post['Post']['content'];?></p>

<?php
    echo $this->Form->create('Message', ['url'=>'comment']);
    echo $this->Form->input('content', ['label'=>'Agrega tu comentario']);
    echo $this->Form->input('post_id', ['type'=>'hidden', 'value'=> $post['Post']['id']]);
    echo $this->Form->input('user_id', ['type'=>'hidden', 'value'=> 1]);
    echo $this->Form->end('Save Messages');
?>
<h3>Mensajes anteriores</h3>
<table class="table">
    <thead>
        <th width="80%">Mensaje</th>
        <th width="10%">Publicado Por</th>
    </thead>
    <tbody>
        <?php foreach ($post['Message'] as $comment) { ?>
            <tr>
                <td><?php echo $comment['content'];?></td>
                <td><?php echo $comment['user_id'];?></td>
                <td><?php echo $comment['created_at'];?></td>
            </tr>      
        <?php } ?>
    </tbody>

</table>

