<div class="project-overview-columns">
    <?php foreach ($columns as $column): ?>
        <div class="project-overview-column">
            <strong title="<?= t('Task count') ?>"><?= $column['amount'] > 0 ? $column['amount'] : 0  ?></strong>
            <small><?= $this->text->e($column['title']) ?></small>
        </div>
    <?php endforeach ?>
</div>
<div class="project-overview-columns">
    <iframe frameborder=0 width="900" height="300" src="https://reports.zoho.com/open-view/302656000000032070/6fe931c941ed68aecc7f0a8fe1a206a3"></iframe>
</div>