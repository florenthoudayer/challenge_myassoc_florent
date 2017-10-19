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
        <td><?= $film->titre ?></td>
        <td><?= $film->annee ?></td>
        <td><?= $film->realisateur ?></td>
        <td><?= $film->genre ?></td>
    </tr>
    <?php endforeach; ?>
</table>
