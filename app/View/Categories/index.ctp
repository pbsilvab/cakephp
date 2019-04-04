<div>
<h2>Definicion de categorias</h2>
<?php 
    echo $this->Html->link(
        'Agregar Categoria',
            [
                'controller' => 'Categories',
                'action' => 'add'
            ]
    );
?>
<table>
    <thead>
        <th>ID</th>
        <th>Nombre</th>
        <th>Fecha de creacion</th>
        <th>Acciones</th>
    </thead>
    <tbody>
         <?php foreach($categories as  $cat){?>
            <tr>   
                <td> <?php echo $cat['Category']['id'];?></td>
                <td> <?php echo $cat['Category']['name'];?></td>
                <td> <?php echo $cat['Category']['created_at'];?></td>
                <td> Editar</td>
            </tr>
        <?php } ?>
    </tbody>
</table>
</div>