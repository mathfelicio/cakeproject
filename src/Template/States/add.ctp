<div class="states form col-md-12 columns content">
    <?= $this->Form->create($state) ?>
    <fieldset>
        <legend><?= 'Add State' ?></legend>
        <?php
            echo $this->Form->input('title');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
