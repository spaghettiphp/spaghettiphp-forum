<!DOCTYPE html>
<html>
<head>
    <?php echo $this->html->charset() ?>
    <title>Login - Fórum Spaghetti*</title>
    <?php echo $this->html->stylesheet('login.css') ?>
    <link rel="alternate" type="application/atom+xml" title="Spaghetti* - Tópicos e respostas mais recentes" href="<?php echo Mapper::url('/feeds.atom', true) ?>" />
    <link rel="shortcut icon" href="<?php echo Mapper::url('/images/favicon.png') ?>" type="image/png" />
</head>
<body>
    <?php echo $this->html->imagelink('login/logo.gif', '/', array(), array(
        'id' => 'logo'
    )) ?>

    <?php if($error = Session::flash('Auth.error')): ?>
        <p class="error"><?php echo $error ?></p>
    <?php endif ?>

    <div id="content">
        <?php echo $this->contentForLayout ?>
        <hr />
    </div>

    <p class="register">Não possui login? <?php echo $this->html->link('Registre-se.', '/register'); ?></p>
</body>
</html>
