<!DOCTYPE html>
<html>
<head>
    <?php echo $this->html->charset() ?>
    <title><?php echo $this->pageTitle ?> - Fórum Spaghetti*</title>
    <?php echo $this->html->stylesheet('layout', 'markitup/skins/simple/style', 'markitup/sets/bbcode/style') ?>
    <link rel="alternate" type="application/atom+xml" title="Spaghetti* - Tópicos e respostas mais recentes" href="<?php echo Mapper::url('/feeds/all.atom', true) ?>" />
    <link rel="shortcut icon" href="<?php echo Mapper::url('/images/favicon.png') ?>" type="image/png" />
</head>
<body>
    <div id="header">
        <div class="left">
            <?php echo $this->html->imagelink('layout/logo.gif', '/', array(
                'alt' => 'Spaghetti* Fórum'
            ), array(
                'id' => 'logo'
            )) ?>
            <p class="forum">Fórum</p>
        </div>
        <div class="right">
            <?php if($logged_in = false): ?>
                <div class="welcome">
                    <div>
                        <span class="hello">Olá,</span>
                        <strong class="name"><?php echo $user["profiles"]["name"] == "" ? $user["username"] : $user["profiles"]["name"] ?></strong><!-- @todo -->
                        <span class="links"><?php echo $this->html->link('Opções', '/settings') ?> | <?php echo $this->html->link('Sair', '/logout') ?></span>
                    </div>
                    <?php echo $this->html->image('http://www.gravatar.com/avatar/' . md5($user['email']) . '?s=52') ?>
                </div>
            <?php else: ?>
                <div class="welcome">
                    <?php echo $this->html->link('<strong>Efetue login</strong>', '/login') ?> ou
                    <?php echo $this->html->link('Registre-se', '/register') ?>
                </div>
            <?php endif ?>
        </div>
    </div>
    
    <div id="nav">
        <span class="breadcrumbs">
            <a href="/">Página Inicial</a> » <strong class="here"></strong>

            <?php if(false): ?>
                <?php echo $breadcrumbs->out($breadCrumbs) ?>
            <?php endif ?>

        </span>

        <?php echo $this->form->create('/search', array(
            'method' => 'get',
            'id' => 'search'
        )) ?>
            <?php echo $this->form->input('s', array(
                'div' => false,
                'label' => false
            )) ?>
        <?php echo $this->form->close('Pesquisar &raquo;', array(
            'tag' => 'input'
        )) ?>
    </div>
    
    <div id="content">
        <?php echo $this->contentForLayout ?>
    </div>
    
    <div id="footer">
        <div class="left">
            <strong>Spaghetti* Framework</strong>
        </div>
    </div>

    <?php echo $this->html->script('jquery.core', 'markitup/jquery.markitup.pack', 'markitup/sets/bbcode/set', 'default.main') ?>
</body>
</html>