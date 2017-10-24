<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Film[]|\Cake\Collection\CollectionInterface $films
 */
?>
<div class="col-md-3">
    <nav class="navbar navbar-default">
        <ul class="nav navbar-nav">
            <li class="active"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('New Film'), ['action' => 'add']) ?></li>
        </ul>
    </nav>
</div>
<div class="col-md-9">

    <table class="table">
        <caption style="font-size: 30px;color: white;">Liste des films de la base de données</caption>
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
                <td><?= h($film->annee) ?></td>
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
    <ul class="pager">
        <?= $this->Paginator->numbers() ?>
    </ul>
</div>

<!--<script>
    $(document).ready(function(){
        $('#moviesTable').DataTable({
            data: staticData
        });
    });
</script>-->
