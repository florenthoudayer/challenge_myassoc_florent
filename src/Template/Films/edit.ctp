<h1>Modifier un film</h1>
<?php
    echo $this->Form->create($film);
    echo $this->Form->control('titre');
    echo $this->Form->control('annee');
    echo $this->Form->control('realisateur');
    echo $this->Form->control('genre');
    echo $this->Form->button(__('Sauvegarder l\'article'));
    echo $this->Form->end();
?>
