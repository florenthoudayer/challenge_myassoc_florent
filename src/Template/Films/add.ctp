<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Film $film
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Films'), ['action' => 'index']) ?></li>
    </ul>
</nav>
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
