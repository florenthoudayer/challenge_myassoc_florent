<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Film $film
 */
?>
<div class="col-md-3">
    <nav class="navbar navbar-default">
        <ul class="nav nav-pills nav-stacked" role="tablist">
            <li class="active"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('Edit Film'), ['action' => 'edit', $film->id_film]) ?> </li>
            <li><?= $this->Form->postLink(__('Delete Film'), ['action' => 'delete', $film->id_film], ['confirm' => __('Are you sure you want to delete # {0}?', $film->id_film)]) ?> </li>
            <li><?= $this->Html->link(__('List Films'), ['action' => 'index']) ?> </li>
            <li><?= $this->Html->link(__('New Film'), ['action' => 'add']) ?> </li>
        </ul>
    </nav>
</div>
<div class="col-md-9">
    <h3><?= h($film->id_film) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Titre') ?></th>
            <td><?= h($film->titre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Realisateur') ?></th>
            <td><?= h($film->realisateur) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Genre') ?></th>
            <td><?= h($film->genre) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Film') ?></th>
            <td><?= $this->Number->format($film->id_film) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Annee') ?></th>
            <td><?= h($film->annee) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id Acteur') ?></th>
            <td><?= h($film->acteur->nom) ?></td>
        </tr>
    </table>
</div>
