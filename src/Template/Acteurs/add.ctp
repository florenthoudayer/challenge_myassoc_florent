<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Acteur $acteur
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Acteurs'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="acteurs form large-9 medium-8 columns content">
    <?= $this->Form->create($acteur) ?>
    <fieldset>
        <legend><?= __('Add Acteur') ?></legend>
        <?php
            echo $this->Form->control('nom');
            echo $this->Form->control('prenom');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
