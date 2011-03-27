<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<feed xmlns="http://www.w3.org/2005/Atom" xmlns:thr="http://purl.org/syndication/thread/1.0" xml:lang="en" xml:base="<?php echo Mapper::url("/feeds.atom", true) ?>">
    <link rel="alternate" type="text/html" href="<?php echo Mapper::url('/', true) ?>" />
    <link rel="self" type="application/atom+xml" href="<?php echo Mapper::url('/feeds.atom', true) ?>" />
    <title type="text">
        Spaghetti* Framework - Tópicos e Respostas Recentes
    </title>
    <subtitle type="text">
        Tópicos e Respostas Recentes
    </subtitle>
    <updated>
        <?php echo $this->date->format($topics[0]->created, 'Y-m-dTH:i:sZ') ?>
    </updated>
    <generator uri="<?php echo Mapper::url('/', true) ?>" version="0.3">
        Spaghetti* Framework
    </generator>
    <id>
        <?php echo Mapper::url('/feeds.atom', true) ?>
    </id>
    
    <?php foreach($topics as $topic): ?>
        <entry>
            <link rel="alternate" type="text/html" href="<?php echo Mapper::url('/topics/view/' . $topic->parent()->slug . '#topic-' . $topic->id, true) ?>" />
            <title type="html">
                <![CDATA[<?php echo Sanitize::html($topic->title) ?>]]>
            </title>
            <author>
                <name><?php echo $topic->author()->name() ?></name>
            </author>
            <id>
                <?php echo Mapper::url('/topics/view/' . $topic->parent()->slug . '#topic-' . $topic->id, true) ?>
            </id>
            <published>
                <?php echo $this->date->format($topic->created, 'Y-m-dTH:i:sZ') ?>
            </published>
            <updated>
                <?php echo $this->date->format($topic->modified, 'Y-m-dTH:i:sZ') ?>
            </updated>
            <summary type="html"><![CDATA[
                <?php echo substr(strip_tags($topic->text()), 0, 350) ?>
            ]]></summary>
            <content type="html" xml:base="<?php echo Mapper::url('/topics/view/' . $topic->parent()->slug . '#topic-' . $topic->id, true) ?>"><![CDATA[
                <?php echo $topic->text() ?>
            ]]></content>
            <thr:total>1</thr:total>
        </entry>
    <?php endforeach ?>
</feed>