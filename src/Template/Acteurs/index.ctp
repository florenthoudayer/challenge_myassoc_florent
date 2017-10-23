<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Acteur[]|\Cake\Collection\CollectionInterface $acteurs
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Acteur'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="acteurs index large-9 medium-8 columns content">
    <h3><?= __('Acteurs') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_acteur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('nom') ?></th>
                <th scope="col"><?= $this->Paginator->sort('prenom') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($acteurs as $acteur): ?>
            <tr>
                <td><?= $this->Number->format($acteur->id_acteur) ?></td>
                <td><?= h($acteur->nom) ?></td>
                <td><?= h($acteur->prenom) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $acteur->id_acteur]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $acteur->id_acteur]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $acteur->id_acteur], ['confirm' => __('Are you sure you want to delete # {0}?', $acteur->id_acteur)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
