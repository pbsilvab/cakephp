<!-- app/View/Users/add.ctp -->
<div class="users form">
<?php echo $this->Form->create('User'); ?>
    <fieldset>
        <legend><?php echo __('Add User'); ?></legend>
        <?php 
            echo $this->Form->input('email');
            echo $this->Form->input('name');
            echo $this->Form->input('password');
            echo $this->Form->input('role', array(
                'options' => ['admin' => 'Administrador', 'author' => 'Author', 'guest'=>'Invited']
            ));
        ?>
    </fieldset>
<?php 
    echo $this->Form->end(__('Submit')); 
    echo $this->Html->link('Login', [
        'controller'=>'Users',
        'action'=>'login',
    ]);
?>
</div>