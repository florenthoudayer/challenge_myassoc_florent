<div class="col-md-3"></div>   
    <div class="form-group, col-md-6">
        <?= $this->Flash->render() ?>
        <?= $this->Form->create() ?>
            <fieldset>
                <legend><?= __("Merci de rentrer vos nom d'utilisateur et mot de passe") ?></legend>
                <?= $this->Form->control('email') ?>
                <?= $this->Form->control('password') ?>
            </fieldset>
        <?= $this->Form->button(__('Connexion')); ?>
        <?= $this->Form->end() ?>
    </div>
<div class="col-md-3"></div> 