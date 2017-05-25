<div class="types form col-md-12 columns content">
    <?= $this->Form->create($type) ?>
    <fieldset>
        <legend><?= 'Edit Type' ?></legend>
        <?php
            echo $this->Form->input('title');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
