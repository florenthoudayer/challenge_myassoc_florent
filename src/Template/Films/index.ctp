<h1>Tout les films de la base de données</h1>

<table>
    <tr>
        <th>Titre</th>
        <th>Annee</th>
        <th>Réalisateur</th>
        <th>Genre</th>
        <th>Acteur principal</th>
    </tr>
    
    <?php foreach ($films as $film): ?>
    <tr>
        <td><?= $this->Html->link($film->titre, ['action' => 'view', $film->id]) ?></td>
        <td><?= $film->annee ?></td>
        <td><?= $film->realisateur ?></td>
        <td><?= $film->genre ?></td>
        <td><?= $this->Html->link('Modifier', ['action' => 'edit', $film->id]) ?></td>
        <td><?= $this->Form->PostLink('Supprimer', ['action' => 'delete', $article->id]) ?></td>
    </tr>
    <?php endforeach; ?>
</table>
