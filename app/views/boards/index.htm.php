<table id="boards">
    <thead>
        <tr>
            <th class="title"><?php echo $this->pageTitle = 'Fóruns' ?></th>
            <th class="latest-activity">Última atividade</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach($boards as $board): ?>
        <tr>
            <td>
                <h1>
                    <?php echo $this->html->link($board->title, '/boards/view/' . $board->slug) ?>
                </h1>
                <p>
                    <?php echo $board->description ?>
                </p>
            </td>
            <td class="latest-activity">
                <?php if($last_topic = $board->lastTopic()): ?>
                    <?php echo $this->html->link($last_topic->title, '/topics/view/' . $last_topic->slug, array(
                        'class' => 'title'
                    )) ?>
                    <span class="date">
                        <strong><?php echo $last_topic->author()->name() ?></strong> em <?php echo $this->date->format($last_topic->created, "d/m/Y, H:i:s") ?>
                    </span>
                <?php else: ?>
                    <p class="no-activity">
                        Nenhum tópico foi criado neste fórum ainda.
                        <?php echo $this->html->link('Crie o primeiro.', '/topics/add/' . $board->slug) ?>
                    </p>
                <?php endif ?>
            </td>
        </tr>
        <?php endforeach ?>
    </tbody>
</table>