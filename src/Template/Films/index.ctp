<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Film[]|\Cake\Collection\CollectionInterface $films
 */
?>
 <?= $this->Html->css([ 'bootstrap.min', 'datatables-extensions/dataTables.bootstrap.min', 'style' ]) ?>
    <?=
        $this->Html->script([ 'jquery-1.12.3','bootstrap.min', 'jquery.dataTables.min',
                             'datatables-extensions/dataTables.bootstrap.min'
                            ])
    ?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Film'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="films index large-9 medium-8 columns content">
    <h3><?= __('Films') ?></h3>
    <table id="moviesTable" cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id_film') ?></th>
                <th scope="col"><?= $this->Paginator->sort('titre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('annee') ?></th>
                <th scope="col"><?= $this->Paginator->sort('realisateur') ?></th>
                <th scope="col"><?= $this->Paginator->sort('genre') ?></th>
                <th scope="col"><?= $this->Paginator->sort('acteur principal') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($films as $film): ?>
            <tr>
                <td><?= $this->Number->format($film->id_film) ?></td>
                <td><?= h($film->titre) ?></td>
                <td><?= $this->Number->format($film->annee) ?></td>
                <td><?= h($film->realisateur) ?></td>
                <td><?= h($film->genre) ?></td>
                <td><?= h($film->nom) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $film->id_film]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $film->id_film]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $film->id_film], ['confirm' => __('Are you sure you want to delete # {0}?', $film->id_film)]) ?>
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

<script>
    $(document).ready(function(){
        $('#moviesTable').DataTable({
            data: staticData
        });
    });
</script>
