<div>
<h2>Feed</h2>
<?php 
  // debug($posts);
    echo $this->Html->link(
        'Agregar Post',
            [
                'controller' => 'Posts',
                'action' => 'add'
            ]
    );
?>
<table>
    <thead>
        <th>ID</th>
        <th>Titulo</th>
        <th>Fecha</th>
        <th>Creador</th>
        <th>Categoria</th>
        <th>cant comentarios</th>
        <th>Acciones</th>
    </thead>
    <tbody>

        <?php foreach($posts as $post){  ?>
            <tr>
                <td> <?php echo $post['Post']['id']?></td>
                <td> <?php echo $post['Post']['title']?></td>
                <td> <?php echo $post['Post']['created_at']?></td>
                <td> <?php echo $post['User']['name']?></td>
                <td> <?php echo $post['Category']['name']?></td>
                <td> <?php echo count($post['Message'])?></td>

                

                <td> <?php echo $this->Html->link('Ver info', ['action'=>'view',  $post['Post']['id']] )?> </td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>