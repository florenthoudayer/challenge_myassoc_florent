<div class="usersform">
<?= $this->Form->create($user) ?>
    <fieldset> 
        <legend><?= ('Ajouter un utilisateur') ?></legend>
        <?= $this->Form->control('username') ?>
         <?=    $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Form->button(('Ajouter')); ?>  
     <?=    $this->Form->end() ?>
</div>