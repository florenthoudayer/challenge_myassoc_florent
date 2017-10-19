<div class="usersform">
<?= $this->Flash->render() ?>
<?= $this->Form->create() ?>
    <fieldset> 
        <legend><?= ('Rentrer votre login et mot de passe pour vous connecter') ?></legend>
        <?= $this->Form->control('username')?>
         <?=   $this->Form->control('password') ?>
    </fieldset>
    <?= $this->Form->button(('Connexion'))?>;
       <?= $this->Form->end() ?>
</div>