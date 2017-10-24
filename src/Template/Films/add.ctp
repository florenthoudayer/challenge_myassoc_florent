<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Film $film
 */
?>
<div class="col-md-3">
    <nav class="navbar navbar-default">
        <ul class="nav nav-pills nav-stacked" role="tablist">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Films'), ['action' => 'index']) ?></li>
        </ul>
    </nav>
</div>
<div class="films form large-9 medium-8 columns content">
    <?= $this->Form->create($film) ?>
    <fieldset>
        <legend><?= __('Add Film') ?></legend>
        <?php
            echo $this->Form->control('titre');
            echo $this->Form->control('annee');
            echo $this->Form->control('realisateur');
            echo $this->Form->control('genre');
            echo $this->Form->control('id_acteur');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
