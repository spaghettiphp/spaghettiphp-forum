<table id="topics">
    <thead>
        <tr>
            <th class="title"><h2><?php echo $this->pageTitle = $board->title ?></h2></th>
            <th class="latest-activity"><?php echo $this->html->link('Adicionar Tópico', '/topics/add/' . $board->slug, array(
                'class' => 'button right'
            )) ?></th>
        </tr>
        <tr>
            <th class="description" colspan="2">
                <p><?php echo $board->description ?></p>
            </th>
        </tr>
    </thead>
    <tbody>
        <?php if(!empty($topics)): ?>
            <?php foreach($topics as $topic): ?>
                <tr>
                    <td>
                        <h1>
                            <?php echo $this->html->link($topic->title, '/topics/view/' . $topic->slug) ?>
                        </h1>
                        <span class="date">Publicado em <?php echo $this->date->format($topic->created, 'd/m/Y, H:i:s') ?></span>
                    </td>
                    <td>
                        <cite class="user">
                            <?php $last_topic = $topic->lastResponse() ?>
                            <strong><?php echo $last_topic->author()->name() ?></strong> em <?php echo $this->date->format($last_topic->created, 'd/m/Y, H:i:s') ?></cite>
                    </td>
                </tr>
            <?php endforeach ?>
        <?php else: ?>
            <tr>
                <td colspan="2">
                    <p class="no-activity">
                        Nenhum tópico foi criado neste fórum ainda.
                        <?php echo $html->link('Crie o primeiro.', '/topics/add/' . $board->slug) ?>
                    </p>
                </td>
            </tr>
        <?php endif ?>
    </tbody>
</table>