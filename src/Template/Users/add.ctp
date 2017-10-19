<div class="usersform">
<?= $this->Form->create($user) ?>
    <fieldset> 
        <legend><?= __('Ajouter un utilisateur') ?></legend>
        <?= $this->Form->control('username') ?>
         <?=    $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Form->button(__('Ajouter')); ?>  
     <?=    $this->Form->end() ?>
</div>