<?php $this->layout = 'login' ?>

<?php echo $this->form->create('/users/login') ?>
    <?php echo $this->form->input('username', array(
        'label' => 'Usuário'
    )) ?>
    
    <?php echo $this->form->input('password', array(
        'label' => 'Senha'
    )) ?>

    <?php echo $this->form->input('remember', array(
        'value' => '0',
        'type' => 'hidden'
    )) ?>

    <?php echo $this->form->input('remember', array(
        'value' => '1',
        'label' => 'Mantenha-me conectado',
        'type' => 'checkbox'
    )) ?>

    <?php echo $this->html->link('Esqueci minha senha', '/users/forgot_password', array(
        'class' => 'forgot_password'
    )) ?>

<?php echo $this->form->close('Enviar') ?>