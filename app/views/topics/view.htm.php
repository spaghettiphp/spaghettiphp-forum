<table id="topic">
    <thead>
        <tr>
            <th class="user"></th>
            <th class="topic">
                <h3><?php echo $this->html->link($topic->board()->title, '/boards/view/' . $topic->board()->slug) ?></h3>
            </th>
        </tr>
    </thead>
    <tbody>
        <tr id="topic-<?php echo $topic->id ?>">
            <td class="user">
                <?php echo $this->gravatar->image($topic->author()->email, 64, array(
                    'class' => 'gravatar'
                )) ?>
                <strong class="name"><?php echo $topic->author()->name() ?></strong>
                <span class="date">
                    Tópico publicado em<br />
                    <?php echo $this->date->format($topic->created, 'd/m/Y, H:i:s') ?>
                </span>
            </td>
            
            <td class="topic">
                <h1><?php echo $this->pageTitle = Sanitize::html($topic->title) ?></h1>
                <?php // echo ${$format}->formatThis($topic["text"]) ?>
                <?php echo $topic->text ?>
            </td>
        </tr>

        <?php foreach($responses as $response): ?>
            <tr id="topic-<?php echo $response->id ?>">
                <td class="user">
                    <?php echo $this->gravatar->image($response->author()->email, 64, array(
                        'class' => 'gravatar'
                    )) ?>
                    <strong class="name"><?php echo $response->author()->name() ?></strong>
                    <span class="date">
                        Resposta publicada em<br />
                        <?php echo $this->date->format($response->created, 'd/m/Y, H:i:s') ?>
                    </span>
                </td>

                <td class="topic">
                    <?php // echo ${$format}->formatThis($topic["text"]) ?>
                    <?php echo $response->text ?>
                </td>
            </tr>
        <?php endforeach ?>
    </tbody>
</table>

<?php if($loggedIn = false): ?>
    <?php echo $form->create("/topics/reply/{$topics[0]['id']}", array("id"=>"reply")) ?>
    <h3>Responder T&oacute;pico</h3>
    <?php echo $form->input("title", $topics[0]["title"], array("label" => "Título")) ?>
    <?php echo $form->input("text", $data["text"], array("type" => "textarea", "label" => "Texto <span>Agora usamos <strong>BBCode</strong>!</span>")) ?>
    <?php echo $form->close("Responder T&oacute;pico") ?>
<?php else: ?>
    <p class="must-be-logged">
        Você deve estar logado para responder a um tópico ou adicionar um novo.<br />
        <?php echo $this->html->link('Efetue login', '/login') ?> ou <?php echo $this->html->link('Registre-se', '/register') ?> para participar das discussões.
    </p>
<?php endif; ?>
