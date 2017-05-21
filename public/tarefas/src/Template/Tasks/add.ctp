
<div class="tasks form col-md-10 columns content">
    <?= $this->Form->create($task) ?>
    <fieldset>
        <legend><?= 'Add Task' ?></legend>
        <?php
            echo $this->Form->input('type_id', ['options' => $types]);
            echo $this->Form->input('state_id', ['options' => $states]);
            echo $this->Form->input('title');
            echo $this->Form->input('users._ids', ['options' => $users]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
