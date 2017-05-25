
<div class="types form col-md-12 columns content">
    <?= $this->Form->create($type) ?>
    <fieldset>
        <legend><?= 'Add Type' ?></legend>
        <?php
            echo $this->Form->input('title');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
